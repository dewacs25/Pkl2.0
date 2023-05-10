<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Content;
use App\Models\Layanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{
    public function index()
    {
        $blogs = Blog::take(3)->get();
        $layanans = Layanan::all();
        $contents = Content::all();


        return view('index',[
            'blogs'=>$blogs,
            'layanans'=>$layanans,
            'contents'=>$contents,
            'aboutOur'=>File::get(public_path('aboutOur.txt')),
            'doo'=>File::get(public_path('doo.txt')),
            'web'=>File::get(public_path('totalProject/web.txt')),
            'werbase'=>File::get(public_path('totalProject/werbase.txt')),
            'app'=>File::get(public_path('totalProject/app.txt')),
            'seo'=>File::get(public_path('totalProject/seo.txt')),
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

    

    public function Blog($id,$judul)
    {
        $layanans = Layanan::all();
        $contents = Content::all();
        $isi = Blog::where('id',$id)->get()->first();
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

    public function blogAll()
    {
        $layanans = Layanan::all();
        $contents = Content::all();
        $blog = Blog::orderBy('created_at','desc')->paginate(6);
        return view('blog',[
            'blogs'=>$blog,
            'layanans'=>$layanans,
            'contents'=>$contents,
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

    public function contact2()
    {
        $layanans = Layanan::all();
        $contents = Content::all();
        
        return view('contact',[
            
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
