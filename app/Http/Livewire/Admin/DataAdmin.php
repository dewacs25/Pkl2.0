<?php

namespace App\Http\Livewire\Admin;

use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class DataAdmin extends Component
{

    public $add;
    public $eye;
    public $edit;

    public $name;
    public $email;
    public $password;
    public $passLama;
    public $emailLama;
    public $idid;

    public function render()
    {
        $DataAdmin = Admin::where('role', 'admin')->get();
        return view('livewire.admin.data-admin', [
            'DataAdmin' => $DataAdmin,
        ]);
    }

    public function add()
    {
        $this->add = true;
    }

    public function close()
    {
        $this->add = "";
        $this->edit = "";

        $this->name = "";
        $this->email = "";
        $this->password = "";
        $this->passLama = "";
        $this->emailLama = "";

        $this->idid = "";
    }

    public function openEye()
    {
        $this->eye = true;
    }
    public function closeEye()
    {
        $this->eye = "";
    }

    public function addAdmin()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email|unique:admins',
            'password' => 'required'
        ]);

        $passHash = Hash::make($this->password);

        Admin::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $passHash,
        ]);

        $this->close();

        session()->flash('success', 'Ok');
    }

    public function delete($id)
    {
        $a = Admin::find($id);
        $a->delete();

        session()->flash('danger', 'Delete Success');
    }

    public function edit($id)
    {
        $this->edit = true;

        $cek = Admin::find($id);

        $this->name = $cek->name;
        $this->email = $cek->email;
        $this->emailLama = $cek->email;
        $this->passLama = $cek->password;
        $this->idid = $cek->id;
    }

    public function editAdmin()
    {
        $cek = Admin::find($this->idid);
        if ($this->email == $this->emailLama && $cek) {
            $this->validate([
                'name' => 'required',
                'email' => 'required|email',
            ]);

            $pass = $this->passLama;
            if ($this->password) {
                $pass = Hash::make($this->password);
            }

            $cek->update([
                'name'=>$this->name,
                'email'=>$this->email,
                'password'=>$pass,
            ]);
            $this->close();
            session()->flash('warning','Update Success');
            
            

        } else {
            $this->validate([
                'name' => 'required',
                'email' => 'required|email|unique:admins',
            ]);
            
        }   

    }
}
