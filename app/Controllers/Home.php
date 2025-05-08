<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('Customer/Main/welcome');
    }
    public function produk(){
        $data =[
            'nama' => 'Smartphone XYZ',
                'harga' => 'Rp 3.000.000',
                'deskripsi' => 'Smartphone canggih dengan kamera berkualitas dan baterai tahan lama.',
                'gambar' => 'https://images.unsplash.com/photo-1511707171634-5f897ff02aa9',
            'galeri' => [
    'https://static.retailworldvn.com/Products/Images/12220/317584/smartphone-oppo-a18-4gb-128gb-blue-thumb-600x600.jpg',
    'https://p16-oec-sg.ibyteimg.com/tos-alisg-i-aphluv4xwc-sg/73212f222a96476cadf5cecf675fe733~tplv-aphluv4xwc-resize-jpeg:800:800.jpeg?dr=15584&t=555f072d&ps=933b5bde&shp=6ce186a1&shcp=e1be8f53&idc=maliva&from=1826719393',
    'https://img.lazcdn.com/g/p/46c7a632e266b29202f31b3a05c4489f.jpg_720x720q80.jpg',]
            
        ];
        return view('Customer/Main/produk',$data);
    }
}
