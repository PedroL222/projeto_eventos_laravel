<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        $nome = "Pedro";
        $arr = ['1','2','3'];
        $img = "../img/evento1.jpg";
        return view('welcome', [
            'nome'=> $nome, 
            'arr' => $arr, 
            'img' => $img]);
        }

    public function create(){
        return view('events.create');
    }
    public function entrar($id){
        return view('events.entrar', ['id' => $id]);
    }
    public function contacts(){
        return view('contact');
    }
    public function products(){

        $busca = request('search');

        return view('products', ['busca' => $busca]);
    }

    
}
