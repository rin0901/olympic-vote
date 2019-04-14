<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class agendaController extends Controller
{
    public function top(){
        return view('agenda.top');
    }
    
    public function comfirm(){
        return view('agenda.comfirm');
    }

    public function complet(){
        return view('agenda.complet');
    }
}
