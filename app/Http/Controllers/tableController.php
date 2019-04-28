<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class tableController extends Controller
{
    public function show(){
        $items = DB::select("SELECT * FROM olympic_db.olympic_table;");
        //return view("vote.show",['items'=>$items]);
        $data = array();
        
        $competition_0 = 0;
        foreach($items as $item){
        	if($item->competition == 0){
        	    $competition_0++;
        	}
        }
        $data += array('水泳'=>$competition_0);
        //echo "水泳：".$competition_0."<br>";
        
        $competition_1 = 0;
        foreach($items as $item){
        	if($item->competition == 1){
        	    $competition_1++;
        	}
        }
        $data += array('アーチェリー'=>$competition_1);
        //echo "アーチェリー：".$competition_1."<br>";
        
        $competition_2 = 0;
        foreach($items as $item){
        	if($item->competition == 2){
        	    $competition_2++;
        	}
        }
        $data += array('陸上競技'=>$competition_2);
        //echo "陸上競技：".$competition_2."<br>";
        
        $competition_3 = 0;
        foreach($items as $item){
        	if($item->competition == 3){
        	    $competition_3++;
        	}
        }
        $data += array('バドミントン'=>$competition_3);
        //echo "バドミントン：".$competition_3."<br>";
        
        $competition_4 = 0;
        foreach($items as $item){
        	if($item->competition == 4){
        	    $competition_4++;
        	}
        }
        $data += array('野球・ソフトボール'=>$competition_4);
        //echo "野球・ソフトボール：".$competition_4."<br>";
        
        $competition_5 = 0;
        foreach($items as $item){
        	if($item->competition == 5){
        	    $competition_5++;
        	}
        }
        $data += array('バスケットボール'=>$competition_5);
        //echo "バスケットボール：".$competition_5."<br>";
        
        $competition_6 = 0;
        foreach($items as $item){
        	if($item->competition == 6){
        	    $competition_6++;
        	}
        }
        $data += array('ボクシング'=>$competition_6);
        //echo "ボクシング：".$competition_6."<br>";
        
        $competition_7 = 0;
        foreach($items as $item){
        	if($item->competition == 7){
        	    $competition_7++;
        	}
        }
        $data += array('カヌー'=>$competition_7);
        //echo "カヌー：".$competition_7."<br>";
        
        $competition_8 = 0;
        foreach($items as $item){
        	if($item->competition == 8){
        	    $competition_8++;
        	}
        }
        $data += array('自転車競技'=>$competition_8);
        //echo "自転車競技：".$competition_8."<br>";
        
        $competition_9 = 0;
        foreach($items as $item){
        	if($item->competition == 9){
        	    $competition_9++;
        	}
        }
        $data += array('馬術'=>$competition_9);
        //echo "馬術：".$competition_9."<br>";
        
        $competition_10 = 0;
        foreach($items as $item){
        	if($item->competition == 10){
        	    $competition_10++;
        	}
        }
        $data += array('フェンシング'=>$competition_10);
        //echo "フェンシング：".$competition_10."<br>";
        
        $competition_11 = 0;
        foreach($items as $item){
        	if($item->competition == 11){
        	    $competition_11++;
        	}
        }
        $data += array('サッカー'=>$competition_11);
        //echo "サッカー：".$competition_11."<br>";
        
        $competition_12 = 0;
        foreach($items as $item){
        	if($item->competition == 12){
        	    $competition_12++;
        	}
        }
        $data += array('ゴルフ'=>$competition_12);
        //echo "ゴルフ：".$competition_12."<br>";
        
        $competition_13 = 0;
        foreach($items as $item){
        	if($item->competition == 13){
        	    $competition_13++;
        	}
        }
        $data += array('体操'=>$competition_13);
        //echo "体操：".$competition_13."<br>";
        
        $competition_14 = 0;
        foreach($items as $item){
        	if($item->competition == 14){
        	    $competition_14++;
        	}
        }
        $data += array('ハンドボール'=>$competition_14);
        //echo "ハンドボール：".$competition_14."<br>";
        
        $competition_15 = 0;
        foreach($items as $item){
        	if($item->competition == 15){
        	    $competition_15++;
        	}
        }
        $data += array('ホッケー'=>$competition_15);
        //echo "ホッケー：".$competition_15."<br>";
        
        $competition_16 = 0;
        foreach($items as $item){
        	if($item->competition == 16){
        	    $competition_16++;
        	}
        }
        $data += array('柔道'=>$competition_16);
        //echo "柔道：".$competition_16."<br>";
        
        $competition_17 = 0;
        foreach($items as $item){
        	if($item->competition == 17){
        	    $competition_17++;
        	}
        }
        $data += array('空手'=>$competition_17);
        //echo "空手：".$competition_17."<br>";
        
        $competition_18 = 0;
        foreach($items as $item){
        	if($item->competition == 18){
        	    $competition_18++;
        	}
        }
        $data += array('近代五種'=>$competition_18);
        //echo "近代五種：".$competition_18."<br>";
        
        $competition_19 = 0;
        foreach($items as $item){
        	if($item->competition == 19){
        	    $competition_19++;
        	}
        }
        $data += array('ボート'=>$competition_19);
        //echo "ボート：".$competition_19."<br>";
        
        $competition_20 = 0;
        foreach($items as $item){
        	if($item->competition == 20){
        	    $competition_20++;
        	}
        }
        $data += array('ラグビー'=>$competition_20);
        //echo "ラグビー：".$competition_20."<br>";
        
        $competition_21 = 0;
        foreach($items as $item){
        	if($item->competition == 21){
        	    $competition_21++;
        	}
        }
        $data += array('セーリング'=>$competition_21);
        //echo "セーリング：".$competition_21."<br>";
        
        $competition_22 = 0;
        foreach($items as $item){
        	if($item->competition == 22){
        	    $competition_22++;
        	}
        }
        $data += array('射撃'=>$competition_22);
        //echo "射撃：".$competition_22."<br>";
        
        $competition_23 = 0;
        foreach($items as $item){
        	if($item->competition == 23){
        	    $competition_23++;
        	}
        }
        $data += array('スケートボード'=>$competition_23);
        //echo "スケートボード：".$competition_23."<br>";
        
        $competition_24 = 0;
        foreach($items as $item){
        	if($item->competition == 24){
        	    $competition_24++;
        	}
        }
        $data += array('スポーツクライミング'=>$competition_24);
        //echo "スポーツクライミング：".$competition_24."<br>";
        
        $competition_25 = 0;
        foreach($items as $item){
        	if($item->competition == 25){
        	    $competition_25++;
        	}
        }
        $data += array('サーフィン'=>$competition_25);
        //echo "サーフィン：".$competition_25."<br>";
        
        $competition_26 = 0;
        foreach($items as $item){
        	if($item->competition == 26){
        	    $competition_26++;
        	}
        }
        $data += array('卓球'=>$competition_26);
        //echo "卓球：".$competition_26."<br>";
        
        $competition_27 = 0;
        foreach($items as $item){
        	if($item->competition == 27){
        	    $competition_27++;
        	}
        }
        $data += array('テコンドー'=>$competition_27);
        //echo "テコンドー：".$competition_27."<br>";
        
        $competition_28 = 0;
        foreach($items as $item){
        	if($item->competition == 28){
        	    $competition_28++;
        	}
        }
        $data += array('テニス'=>$competition_28);
        //echo "テニス：".$competition_28."<br>";
        
        $competition_29 = 0;
        foreach($items as $item){
        	if($item->competition == 29){
        	    $competition_29++;
        	}
        }
        $data += array('トライアスロン'=>$competition_29);
        //echo "トライアスロン：".$competition_29."<br>";
        
        $competition_30 = 0;
        foreach($items as $item){
        	if($item->competition == 30){
        	    $competition_30++;
        	}
        }
        $data += array('バレーボール'=>$competition_30);
        //echo "バレーボール：".$competition_30."<br>";
        
        $competition_31 = 0;
        foreach($items as $item){
        	if($item->competition == 31){
        	    $competition_31++;
        	}
        }
        $data += array('ウェイトリフティング'=>$competition_31);
        //echo "ウェイトリフティング：".$competition_31."<br>";
        
        $competition_32 = 0;
        foreach($items as $item){
        	if($item->competition == 32){
        	    $competition_32++;
        	}
        }
        $data += array('レスリング'=>$competition_32);
        return view("vote.show",[
            'data'=>$data
            ]);
        //echo "レスリング：".$competition_32."<br>";
    }
    
}
