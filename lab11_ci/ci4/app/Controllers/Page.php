<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function about()
    {
        return view('about', [
            'title' => 'Tentang Kami',
            'content' => 'Ini adalah halaman abaut yang menjelaskan tentang is halaman ini.'
        ]);
    }
    public function kontak()
    {
        return view('kontak', [
            'title' => 'Kontak',
        ]);
    }
}
