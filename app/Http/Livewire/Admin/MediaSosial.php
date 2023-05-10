<?php

namespace App\Http\Livewire\Admin;

use Illuminate\Support\Facades\File;
use Livewire\Component;

class MediaSosial extends Component
{
    public $edit;

    public $wa1;
    public $wa2;
    public $twitter;
    public $facebook;
    public $instagram;
    public $linkedin;

    public function __construct()
    {
        $path = public_path('mediaSosial');
        if (!File::exists($path)) {
            File::makeDirectory($path, 0777, true);
        }

        if (file_exists(public_path('mediaSosial/wa1.txt'))) {
            
            $this->wa1 = File::get(public_path('mediaSosial/wa1.txt'));
        }

        if (file_exists(public_path('mediaSosial/wa2.txt'))) {
            
            $this->wa2 = File::get(public_path('mediaSosial/wa2.txt'));
        }

        if (file_exists(public_path('mediaSosial/twitter.txt'))) {
            
            $this->twitter = File::get(public_path('mediaSosial/twitter.txt'));
        }

        if (file_exists(public_path('mediaSosial/facebook.txt'))) {
            
            $this->facebook = File::get(public_path('mediaSosial/facebook.txt'));
        }

        if (file_exists(public_path('mediaSosial/instagram.txt'))) {
            
            $this->instagram = File::get(public_path('mediaSosial/instagram.txt'));
        }

        if (file_exists(public_path('mediaSosial/linkedin.txt'))) {
            
            $this->linkedin = File::get(public_path('mediaSosial/linkedin.txt'));
        }
    }

    public function render()
    {
        return view('livewire.admin.media-sosial');
    }

    public function edit()
    {
        $this->edit = true;
    }

    public function cancel()
    {
        $this->edit = "";
        $this->wa1 = "";
        $this->wa2 = "";
        $this->twitter = "";
        $this->facebook = "";
        $this->instagram = "";
        $this->linkedin = "";
        $this->__construct();

    }

    public function UpdateMediaSosial()
    {
        File::put(public_path('mediaSosial/wa1.txt'), $this->wa1);
        File::put(public_path('mediaSosial/wa2.txt'), $this->wa2);
        File::put(public_path('mediaSosial/twitter.txt'), $this->twitter);
        File::put(public_path('mediaSosial/facebook.txt'), $this->facebook);
        File::put(public_path('mediaSosial/instagram.txt'), $this->instagram);
        File::put(public_path('mediaSosial/linkedin.txt'), $this->linkedin);

        $this->cancel();
        $this->__construct();
    }
}
