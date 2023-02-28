<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //Praktikum2
    // public function index(){
    //     echo "selamat datang bro";
    // }
    // public function about(){
    //     echo "namaku Akbar NIM-nya 2141720225";
    // }
    // public function articles($id){
    //     echo "Halaman Articles ID {$id}";
    // }


    //Praktikum3

    //no2
    public function edu(){
        echo "belajar dek";
    }
    public function kidsGame(){
        echo "main sambil belajar dek";
    }

    public function story(){
        echo "baca buku cerita yuk dek";
    }
    public function songs(){
        echo "mari bernyanyi bersama dek";
    }

    //no4
    public function karir(){
        echo "Program karir";
    }
    public function magang(){
        echo "program magang";
    }

    public function kunjungan(){
        echo "program kunjungan industri";
    }

}
