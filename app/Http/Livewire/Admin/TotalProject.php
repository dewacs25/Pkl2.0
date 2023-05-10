<?php

namespace App\Http\Livewire\Admin;

use Illuminate\Support\Facades\File;
use Livewire\Component;

class TotalProject extends Component
{
    public $web;
    public $iWeb;

    public $app;
    public $iApp;

    public $werbase;
    public $iWerbase;

    public $seo;
    public $iSeo;

    public function __construct()
    {
        $path = public_path('totalProject');
        if (!File::exists($path)) {
            File::makeDirectory($path, 0777, true);
        }

        if (file_exists(public_path('totalProject/web.txt'))) {
            
            $this->iWeb = File::get(public_path('totalProject/web.txt'));
        }

        if (file_exists(public_path('totalProject/werbase.txt'))) {
            
            $this->iWerbase = File::get(public_path('totalProject/werbase.txt'));
        }
        if (file_exists(public_path('totalProject/app.txt'))) {
            
            $this->iApp = File::get(public_path('totalProject/app.txt'));
        }

        if (file_exists(public_path('totalProject/seo.txt'))) {
            
            $this->iSeo = File::get(public_path('totalProject/seo.txt'));
        }


    }

    public function render()
    {
        return view('livewire.admin.total-project');
    }

    public function Web()
    {
        $this->web = true;
    }

    public function UpdateWeb()
    {
        File::put(public_path('totalProject/web.txt'), $this->iWeb);
        $this->cancel();
        $this->__construct();
    }

    public function Werbase()
    {
        $this->werbase = true;
    }

    public function UpdateWerbase()
    {
        File::put(public_path('totalProject/werbase.txt'), $this->iWerbase);
        $this->cancel();
        $this->__construct();
    }

    public function App()
    {
        $this->app = true;
    }

    public function UpdateApp()
    {
        File::put(public_path('totalProject/app.txt'), $this->iApp);
        $this->cancel();
        $this->__construct();
    }

    public function Seo()
    {
        $this->seo = true;
    }

    public function UpdateSeo()
    {
        File::put(public_path('totalProject/seo.txt'), $this->iSeo);
        $this->cancel();
        $this->__construct();
    }

    public function cancel()
    {
        $this->web = "";
        $this->iWeb = "";
        $this->app = "";
        $this->iApp = "";
        $this->werbase = "";
        $this->iWerbase = "";
        $this->seo = "";
        $this->iSeo = "";

        $this->__construct();
    }
}
