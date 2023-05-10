<?php

namespace App\Http\Livewire\Admin;

use App\Models\Layanan;
use Livewire\Component;
use Livewire\WithPagination;

class DataLayanan extends Component
{
    public $add;
    public $edit;
    public $idid;

    public $layanan;


    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        $layanan = Layanan::paginate(5);
        return view('livewire.admin.data-layanan',[
            'layanans'=>$layanan
        ]);
    }

    public function add()
    {
        $this->add = true;
    }
    public function close()
    {
        $this->add = "";
        $this->layanan = "";
        $this->edit = "";
        $this->idid = "";

    }

    public function Tambah()
    {
        $this->validate([
            'layanan'=>'required|min:3'
        ]);

        Layanan::create([
            'nama_layanan'=>$this->layanan
        ]);
        $this->close();
        session()->flash('success','Data Berhasil Di Tambahkan');
    }
    public function delete($id)
    {
        Layanan::where('id_layanan',$id)->delete();
        session()->flash('danger','Deleted Success');
    }
    public function edit($id)
    {
        $this->edit = true;
        $this->idid = $id;

        $cari = Layanan::where('id_layanan',$id)->first();
        $this->layanan = $cari->nama_layanan;
    }

    public function update($id)
    {
        Layanan::where('id_layanan',$id)->update([
            'nama_layanan'=>$this->layanan
        ]);

        session()->flash('warning','Update Success');
        $this->close();
    }

}
