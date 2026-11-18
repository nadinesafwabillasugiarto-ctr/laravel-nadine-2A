<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{

// Home (/home)
public function home_olshop() {
    return view('olshop'); // Memanggil file olshop.blade.php
}
    // Product (/product)
    public function product() {
        return view('product');
    }

    // Detail Produk dengan parameter harga (/produk/detail/{harga})
    public function detail($harga) {
        return view('detail', ['harga' => $harga]);
    }

    public function home() {
$data['judul']='Laman Home';
$data['isi']='Lorem ipsum dolor sit amet';
return view('home',$data);
} 
public function gallery(){
$data['judul']='Laman Gallery';
return view('gallery',$data);
}

public function about() {
        $data['judul'] = 'Laman About';
        return view('about', $data);
    }

public function service() {
    $data['judul'] = 'Laman Service';
    return view('service', $data);
}

public function contact() {
    $data['judul'] = 'Laman Contact';
    return view('contact', $data);
}
}