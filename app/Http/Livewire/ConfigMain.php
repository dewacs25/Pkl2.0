<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\File;
use Livewire\Component;
use Livewire\WithFileUploads;

class ConfigMain extends Component
{
    public $imgService;
    public $imgAbout;
    public $imgDoo;
    public $logo;

    public $about;
    public $iAbout;
    public $doo;
    public $do;
    public $copyright;
    public $Bcopyright;
    

    use WithFileUploads;

    public function render()
    {
        return view('livewire.config-main');
    }

    public function __construct()
    {
        if (file_exists(public_path('aboutOur.txt'))) {
            
            $this->iAbout = File::get(public_path('aboutOur.txt'));
        }
        if (file_exists(public_path('doo.txt'))) {
            
            $this->doo = File::get(public_path('doo.txt'));
        }

        if (file_exists(public_path('copyright.txt'))) {
            
            $this->copyright = File::get(public_path('copyright.txt'));
        }
    }

    public function UpdateimgService()
    {
        $this->validate([
            'imgService' => 'image|max:20000|mimes:png'
        ]);
        $imgServiceLama = public_path('storage/imgService.png');
        if (File::exists($imgServiceLama)) {
            unlink($imgServiceLama);
        }
        $newNamaimgService = "imgService" . '.' . $this->imgService->getClientOriginalExtension();
        $this->imgService->storeAs('public', $newNamaimgService, 'local');

        $this->imgService = "";
        
        $this->emit('imgServiceUpdated');
        $this->close();
    }

    public function UpdateLogo()
    {
        $this->validate([
            'logo' => 'image|max:20000|mimes:png'
        ]);
        $imgLogo = public_path('storage/logo.png');
        if (File::exists($imgLogo)) {
            unlink($imgLogo);
        }
        $newNamalogo = "logo" . '.' . $this->logo->getClientOriginalExtension();
        $this->logo->storeAs('public', $newNamalogo, 'local');

        $this->logo = "";
        
        $this->emit('logoUpdated');
        $this->close();
    }
    public function UpdateimgAbout()
    {
        $this->validate([
            'imgAbout' => 'image|max:20000|mimes:png'
        ]);
        $imgAboutLama = public_path('storage/imgAbout.png');
        if (File::exists($imgAboutLama)) {
            unlink($imgAboutLama);
        }
        $newNamaimgAbout = "imgAbout" . '.' . $this->imgAbout->getClientOriginalExtension();
        $this->imgAbout->storeAs('public', $newNamaimgAbout, 'local');

        $this->imgAbout = "";
        
        $this->emit('imgAboutUpdated');
        $this->close();
    }
    public function About()
    {
        
        $this->about = true;
    }

    public function UpdateAbout()
    {
        
        File::put(public_path('aboutOur.txt'), $this->iAbout);
        $this->close();
        $this->__construct();

    }

    public function close()
    {
        $this->about = "";
        
        $this->imgService = "";
        $this->imgAbout = "";
        $this->imgDoo = "";

        $this->do = "";
        $this->copyright = "";
        $this->Bcopyright = "";
        $this->__construct();

    }


    public function do()
    {
        $this->do = true;
    }
    public function UpdateDo()
    {
        File::put(public_path('doo.txt'), $this->doo);
        $this->close();
        $this->__construct();

    }

    public function copyright()
    {
        $this->Bcopyright = true;
    }
    public function UpdateImgDoo()
    {
        $this->validate([
            'imgDoo' => 'image|max:20000|mimes:png'
        ]);
        $imgDooLama = public_path('storage/imgDoo.png');
        if (File::exists($imgDooLama)) {
            unlink($imgDooLama);
        }
        $newNamaimgDoo = "imgDoo" . '.' . $this->imgDoo->getClientOriginalExtension();
        $this->imgDoo->storeAs('public', $newNamaimgDoo, 'local');

        $this->imgDoo = "";
        
        $this->emit('imgDooUpdated');
        $this->close();
    }

    public function UpdateCopyright()
    {
        File::put(public_path('copyright.txt'), $this->copyright);
        $this->close();
        $this->__construct();
    }

}
