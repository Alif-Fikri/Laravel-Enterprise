<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class contohcontroller extends Controller 
{
    public function tampilcontoh()
    {
        $data = [
            'totalproduks'=> 310,
            'salestoday'=> 100,
            'totalrevenue'=> 'Rp 50,000,000',
            'registereduser'=> 350,
        ];
        return view('contoh',$data);
    }
}