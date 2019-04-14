<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class tableController extends Controller
{
    public function show(){
        $items = DB::select("SELECT * FROM olympic_db.olympic_table;");
        $competition_1=0;
        foreach($items as $item){
        	echo $item->competition."<br>";
        	if($item->competition==1){
        	    $competition_1++;
        	}
        }
        echo $competition_1;
        //return view("vote.show",['items'=>$items]);
    }
}
