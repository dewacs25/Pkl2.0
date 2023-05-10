<?php

namespace App\Http\Livewire\Admin;

use App\Models\Blog;
use App\Models\Content;
use App\Models\Layanan;
use Carbon\Carbon;
use FilesystemIterator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Livewire\Component;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;


class Dashboard extends Component
{
    public $blogHariIni;
    public $blogAll;
    public $blogPersen;

    public $kontenHariIni;
    public $kontenAll;
    public $kontenPersen;

    public $layanan;


    public $sampahTmp;
    public $adaTmpGa;
    public function render()
    {
        return view('livewire.admin.dashboard');
    }

    public function __construct()
    {

        // dd(DB::connection()->getPdo());
        $this->layanan = count(Layanan::all());


        $this->blogAll = count(Blog::all());

        $this->blogHariIni = count(Blog::whereDate('created_at', Carbon::today())->get());
        if ($this->blogAll == 0 && $this->blogHariIni == 0) {
            $this->blogPersen = 0;
        }else{
            $this->blogPersen = round($this->blogHariIni / $this->blogAll * 100, 2);
        }

        $this->kontenAll = count(Content::all());
        $this->kontenHariIni = count(Content::whereDate('created_at', Carbon::today())->get());
        if ($this->kontenAll == 0 && $this->kontenHariIni == 0) {
            $this->kontenPersen = 0;
        }else{
            $this->kontenPersen = round($this->kontenHariIni / $this->kontenAll * 100, 2);
        }

        $this->adaTmpGa = File::exists(storage_path('app/livewire-tmp'));

        if ($this->adaTmpGa == true) {

            $path = storage_path('app/livewire-tmp');
            $bytes = $this->GetDirectorySize($path);

            $this->sampahTmp = $this->formatBytes($bytes);
        }
    }
    public function GetDirectorySize($path)
    {
        $bytestotal = 0;
        $path = realpath($path);
        if ($path !== false && $path != '' && file_exists($path)) {
            foreach (new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path, FilesystemIterator::SKIP_DOTS)) as $object) {
                $bytestotal += $object->getSize();
            }
        }
        return $bytestotal;
    }
    function formatBytes($size) {
        $units = ['B', 'KB', 'MB', 'GB', 'TB'];
        for ($i = 0; $size >= 1024 && $i < 4; $i++) {
            $size /= 1024;
        }
        return round($size, 2).$units[$i];
    }
    public function deleteSampah()
    {
        $path = storage_path('app/livewire-tmp');
        File::deleteDirectory($path);
        session()->flash('success', 'Success');
        $this->adaTmpGa = false;
    }
}
