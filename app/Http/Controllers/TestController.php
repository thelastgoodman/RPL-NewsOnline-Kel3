<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
class TestController extends Controller
{
    public function index() {
       
        return view('kontenberita');
    }
    public function pendaftaran(){
    	return view('pendaftaran');
    }
    public function nf(){
    	return view('404');
    }
    public function login(){
    	return view('login');
    }
    public function kategoriberita(){
    	return view('kategori');
    }
    public function tanggal(){
    	return view('tanggal');
    }
    public function admin(){
    	return view('admin_template');
    }
}
