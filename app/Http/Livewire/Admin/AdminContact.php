<?php

namespace App\Http\Livewire\Admin;

use Illuminate\Support\Facades\File;
use Livewire\Component;

class AdminContact extends Component
{
    public $alamat;
    public $Balamat;

    public $email;
    public $Bemail;

    public $whatsapp;
    public $Bwhatsapp;
    public function render()
    {
        return view('livewire.admin.admin-contact');
    }

    public function __construct()
    {
        if (file_exists(public_path('contact/alamat.txt'))) {
            
            $this->alamat = File::get(public_path('contact/alamat.txt'));
        }
        if (file_exists(public_path('contact/email.txt'))) {
            
            $this->email = File::get(public_path('contact/email.txt'));
        }
        if (file_exists(public_path('contact/whatsapp.txt'))) {
            
            $this->whatsapp = File::get(public_path('contact/whatsapp.txt'));
        }
    }
    public function close()
    {
        $this->alamat = "";
        $this->Balamat = "";

        $this->email = "";
        $this->Bemail = "";
        
        $this->whatsapp = "";
        $this->Bwhatsapp = "";
        
        $this->__construct();

    }
    public function BAlamat()
    {
        $this->Balamat = true;
    }


    public function UpdateAlamat()
    {
        File::put(public_path('contact/alamat.txt'), $this->alamat);
        $this->close();
        $this->__construct();
    }

    public function BEmail()
    {
        $this->Bemail = true;
    }


    public function UpdateEmail()
    {
        File::put(public_path('contact/email.txt'), $this->email);
        $this->close();
        $this->__construct();
    }


    public function BWhatsapp()
    {
        $this->Bwhatsapp = true;
    }


    public function UpdateWhatsapp()
    {
        File::put(public_path('contact/whatsapp.txt'), $this->whatsapp);
        $this->close();
        $this->__construct();
    }
}
