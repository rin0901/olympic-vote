<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\VoteRequest;

class voteController extends Controller
{
    public function top(){
        $items = DB::select("SELECT * FROM olympic_table");
        return view('vote.top');
    }
    
    public function comfirm(Request $request){
        $validate_rule = [
            'sex' => 'required|numeric|between:0,1',
            'age' => 'required|numeric|between:0,7',
            'competition' => 'required|numeric|between:0,32',
        ];
        $this->validate($request, $validate_rule);
        
        $data = [
	       'sex' => $request->sex,
	       'age' => $request->age,
	       'competition' => $request->competition,
        ];
        return view('vote.comfirm',$data);
    }

    public function complet(Request $request){
        $validate_rule = [
            'sex' => 'required|numeric|between:0,1',
            'age' => 'required|numeric|between:0,7',
            'competition' => 'required|numeric|between:0,32',
        ];
        $this->validate($request, $validate_rule);
        $param=[
            'sex' => $request->sex,
            'age' => $request->age,
            'competition' => $request->competition,
            ];
        DB::insert("INSERT INTO olympic_table (sex, age, competition) VALUES(:sex, :age, :competition);",$param);
        return view('vote.complet');
    }
}