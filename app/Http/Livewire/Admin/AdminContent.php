<?php

namespace App\Http\Livewire\Admin;

use App\Models\Content;
use App\Models\Layanan;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class AdminContent extends Component
{
    public $add;
    public $edit;
    public $idid;

    public $judul;
    public $isi;
    public $gambar;
    public $gambarLama;
    public $id_layanan;
    public $cari;

    use WithFileUploads;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        if ($this->cari) {
           $content = Content::where('judul', 'like', '%' . $this->cari . '%')->paginate(5);
        }else{
            $content = Content::orderBy('created_at','desc')->paginate(5);

        }
        $layanans = Layanan::all();

        return view('livewire.admin.admin-content', [
            'contents' => $content,
            'layanans'=>$layanans
        ]);
    }

    public function add()
    {
        $this->add = true;
    }
    public function edit($id)
    {
        $this->edit = true;
        $cari = Content::where('id_isiLayanan',$id)->get()->first();
        $this->judul = $cari->judul;
        $this->isi = $cari->isi;
        $this->gambarLama = $cari->gambar;
        $this->idid = $cari->id_isiLayanan;
        $this->id_layanan = $cari->id_layanan;

    }

    public function close()
    {
        $this->judul = "";
        $this->isi = "";
        $this->gambar = "";
        $this->add = "";
        $this->gambarLama = "";
        $this->id_layanan = "";
        $this->idid = "";
        $this->edit = "";
        
    }

    public function Tambah()
    {
        $this->validate([
            'judul'=>'required',
            'isi'=>'required',
            'id_layanan'=>'required',
            'gambar'=>'image',
        ]);

        $namaGambar = 'Content-'. uniqid(). '.'. $this->gambar->getClientOriginalExtension();

        $this->gambar->storeAs('public',$namaGambar,'local');

        Content::create([
            'judul'=>$this->judul,
            'isi'=>$this->isi,
            'id_layanan'=>$this->id_layanan,
            'gambar'=>$namaGambar
        ]);

        $this->close();
        session()->flash('success', 'Add Berhasil');

    }

    public function delete($id)
    {
        $cari = Content::where('id_isiLayanan',$id)->get()->first();
        unlink(public_path('storage/'.$cari->gambar));
        Content::where('id_isiLayanan',$id)->delete();
        session()->flash('danger', 'Delete Berhasil');

    }

    public function Update($id)
    {
        $cari = Content::where('id_isiLayanan',$id)->get()->first();
        $namaGambar = $cari->gambar;
        if ($this->gambar) {
            // if (file_exists(public_path('storage/'.$cari->gambar))) {
            //     unlink(public_path('storage/'.$cari->gambar));
            // }
            $namaGambar = 'Content-'. uniqid(). '.'. $this->gambar->getClientOriginalExtension();
            $this->gambar->storeAs('public',$namaGambar,'local');
        }

        Content::where('id_isiLayanan',$id)->update([
            'judul'=>$this->judul,
            'isi'=>$this->isi,
            'id_layanan'=>$this->id_layanan,
            'gambar'=>$namaGambar
        ]);

        $this->close();
        session()->flash('warning', 'Update Berhasil');
    }
}
