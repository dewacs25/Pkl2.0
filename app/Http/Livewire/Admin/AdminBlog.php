<?php

namespace App\Http\Livewire\Admin;

use App\Models\Blog;

use Livewire\Component;
use Livewire\Livewire;
use Livewire\WithFileUploads;

class AdminBlog extends Component
{
    public $take = 3;
    public $add;
    public $edit;
    public $totalBlog;
    public $cari;

    public $idid;
    public $judul;
    public $isi;
    public $gambar;
    public $gambarLama;


    use WithFileUploads;


    public function __construct()
    {
        Livewire::listen('editorData', function($data, $componentId){
            $this->emit('update-isi', $data, $componentId);
        });
        Livewire::listen('update-isi', function($data, $componentId){
            if($this->id === $componentId){
                $this->isi = $data;
            }
        });
       $this->totalBlog = count(Blog::all()); 
    }
    public function render()
    {
        if ($this->cari) {
            $blogs = Blog::where('judul', 'like', '%' . $this->cari . '%')->take(3)->get();
        }else{

            $blogs = Blog::orderBy('created_at','desc')->take($this->take)->get();
        }
        return view('livewire.admin.admin-blog', [
            'blogs'=>$blogs
        ]);
    }
    public function showMore()
    {
        $this->take = $this->take + 3;
    }
    public function add()
    {
        $this->add = true;
    }

    public function close()
    {
        $this->judul = "";
        $this->isi = "";
        $this->gambar = "";
        $this->add = "";
        $this->edit = "";
        $this->gambarLama = "";
        $this->idid = "";


    }

    public function Tambah()
    {
        // dd($this->isi);
        $this->validate([
            'judul'=>'required|min:3',
            
            'gambar'=>'image|required'
        ]);


        $namaGambar = 'blog-'. uniqid(). '.'. $this->gambar->getClientOriginalExtension();

        $this->gambar->storeAs('public',$namaGambar,'local');

        Blog::create([
            'judul'=>$this->judul,
            'isi'=>$this->isi,
            'gambar'=>$namaGambar
        ]);
        session()->flash('success','Berhasil');
        $this->__construct();
        $this->close();
    }

    public function deleteBlog($id)
    {
       $cari = Blog::where('id',$id)->get()->first();
        if (file_exists(public_path('storage/'.$cari->gambar))) {
            unlink(public_path('storage/'.$cari->gambar));
        }
        $cari->delete();
        session()->flash('danger','Delete Berhasil');
        $this->__construct();


       
    }

    public function edit($id)
    {
        $this->edit = true;
        $cari = Blog::find($id);
        $this->judul = $cari->judul;
        $this->isi = $cari->isi;
        $this->gambarLama = $cari->gambar;
        $this->idid = $cari->id;

    }

    public function Update($id)
    {
        $cari = Blog::find($id);
        $namaGambar = $cari->gambar;
        if ($this->gambar) {
            if (file_exists(public_path('storage/'.$cari->gambar))) {
                unlink(public_path('storage/'.$cari->gambar));
            }
            $namaGambar = 'blog-'. uniqid(). '.'. $this->gambar->getClientOriginalExtension();
            $this->gambar->storeAs('public',$namaGambar,'local');
        }

        $cari->update([
            'judul'=>$this->judul,
            'isi'=>$this->isi,
            'gambar'=>$namaGambar
        ]);

        $this->close();
        session()->flash('warning','Update Berhasil');
        $this->__construct();


    }
}
