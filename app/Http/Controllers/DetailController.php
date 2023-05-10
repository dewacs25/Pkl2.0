<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Layanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class DetailController extends Controller
{
    public function index($id,$judul)
    {
        $layanans = Layanan::all();
        $contents = Content::all();
        $isi = Content::where('id_isiLayanan',$id)->get()->first();
        return view('detail',[
            'isi'=>$isi,
            'layanans'=>$layanans,
            'contents'=>$contents,
            'alamat'=>File::get(public_path('contact/alamat.txt')),
            'email'=>File::get(public_path('contact/email.txt')),
            'whatsapp'=>File::get(public_path('contact/whatsapp.txt')),
            'alamat'=>File::get(public_path('contact/alamat.txt')),
            'email'=>File::get(public_path('contact/email.txt')),
            'wa1'=>File::get(public_path('mediaSosial/wa1.txt')),
            'wa2'=>File::get(public_path('mediaSosial/wa2.txt')),
            'twitter'=>File::get(public_path('mediaSosial/twitter.txt')),
            'facebook'=>File::get(public_path('mediaSosial/facebook.txt')),
            'instagram'=>File::get(public_path('mediaSosial/instagram.txt')),
            'linkedin'=>File::get(public_path('mediaSosial/linkedin.txt')),
            'copyright'=>File::get(public_path('copyright.txt')),

        ]);
    }
}
