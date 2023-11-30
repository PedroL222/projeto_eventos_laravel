<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index(){
        
        $events = Event::all();

        return view('welcome', ['events' => $events]);
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
