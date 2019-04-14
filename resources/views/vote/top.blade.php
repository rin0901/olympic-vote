<!DOCTYPE html>
<html>
    <head>
        <title>２０２０東京オリンピック人気競技投票</title>
        <!--Bootstrap４に必要なCSSとJavaScriptを読み込み-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        
        <style>
            img {width: 170px;}
            img {height: 170px;}
            body {margin: 0px 50px 50px 50px;}
            .aaaa {
                padding: 0px 16px 16px 16px;
            }
            .title {position: fixed;
                width: 100%;
                text-align: center;
                background-image: linear-gradient(-90deg, #B8000C, #FFFFFF);
                color: #FFCC00;
                height: 70px;
                padding-top: 0;
                left: 0;
                right: 0;
                box-shadow: 4px 4px 6px #A9A9A9;
                z-index: 20;
            }
            .title h1{
                font-size: 40;
                text-align: center;
                padding-top: 10px;
            }
            .picture {text-align: center;
                      width: 100%;
                      height: 400px;
            }
            .main {
                    padding-top: 100px;
                    width: 100%;
            }
            footer {background-image: linear-gradient(-90deg, #FFFFFF, #B8000C);
                    text-align: center;
            }
            footer #footer_nav ul {
                list-style: none;
                margin: 0;
                padding: 0;
            }
            footer #footer_nav li {
                display: inline;
                border-left: solid 1px #aaa;
                margin-left: 8px;
                padding-left: 8px;
                font-size: smaller;
            }
            footer p {
                margin-bottom: 0;
            }
            footer #footer_nav li:last-child {
                border-right: solid 1px #aaa;
                padding: 0 8pX;
            }
                      
        </style>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>
            jQuery(function($){
                $(function(){
                    $('.competition').on('click', function() {
                        if ($(this).prop('checked')){
                        // 一旦全てをクリアして再チェックする
                            $('.competition').prop('checked', false);
                            $(this).prop('checked', true);
                        }
                    });
                });
            });
        </script>
    </head>

    <body>
        <div class="mb-2 bg-light text-dark aaaa">
            <div class="title">
                <h1>２０２０東京オリンピック競技投票</h1>
            </div>
            <div class="main">
                <p>ご回答お願いします。</p>
        
                <form method ="POST" action="/vote/public/comfirm">
                    {{ csrf_field() }}
                    @if ($errors->has('sex'))
                    <font color="red">入力に問題があります。</font>
                    @endif
        
                    <div class="float-left">性別:</div>
                    <dd>
                        <label><input type="radio" name="sex" id="sex0" value="0">男</label>
                        <label><input type="radio" name="sex" id="sex0" value="1">女</label>
                    </dd>
                    
                    @if ($errors->has('age'))
                    <font color="red">入力に問題があります。</font>
                    @endif
                    <div class="float-left">年齢:</div>
                    <dd>
                        <select name="age" id="age">
                            <option value="0">10代以下</option>
                            <option value="1">20代</option>
                            <option value="2">30代</option>
                            <option value="3">40代</option>
                            <option value="4">50代</option>
                            <option value="5">60代</option>
                            <option value="6">70代</option>
                            <option value="7">80代以上</option>
                        </select>
                    </dd>
        
                    @if ($errors->has('competition'))
                    <font color="red">入力に問題があります。</font>
                    @endif
                    <div>競技:</div>
                    <dd>
                        <div class="row">
                            <div class="col-md-2">
                                <div class="competition">
                                    <a href="javascrip:test();" class="thumbnail">
                                        <label><input type="checkbox" name="competition" class="competition" id="competition0" value="0">水泳
                                        <img src="image/swim.jpg"  alt="水泳のイラスト"></label>
                                    </a> 
                                </div>
                            </div>
                            <div class="col-md-2">
                                <a href="#" class="thumbnail">
                                    <label><input type="checkbox" name="competition" class="competition" id="competition1" value="1">アーチェリー
                                    <img src="image/arche.jpg" alt="アーチェリーのイラスト"></label>
                                </a>
                            </div>
                            <div class="col-md-2">
                                <a href="#" class="thumbnail">
                                    <label><input type="checkbox" name="competition" class="competition" id="competition2" value="2">陸上競技
                                    <img src="image/track.jpg" alt="陸上競技のイラスト"></label>
                                </a>
                            </div>
                            <div class="col-md-2">
                                <a href="#" class="thumbnail">
                                    <label><input type="checkbox" name="competition" class="competition" id="competition3" value="3">バドミントン
                                    <img src="image/badminton.jpg" alt="バドミントンのイラスト"></label>
                                </a>
                            </div>
                            <div class="col-md-2">
                                <a href="#" class="thumbnail">
                                    <label><input type="checkbox" name="competition" class="competition" id="competition4" value="4">野球・ソフトボール
                                    <img src="image/baseball.jpg" alt="野球・ソフトボールのイラスト"></label>
                                </a>
                            </div>
                            <div class="col-md-2">
                                <a href="#" class="thumbnail">
                                    <label><input type="checkbox" name="competition" class="competition" id="competition5" value="5">バスケットボール
                                    <img src="image/basket.jpg" alt="バスケットボールのイラスト"></label>
                                </a>
                            </div>
                            <div class="col-md-2">
                                <a href="#" class="thumbnail">
                                    <label><input type="checkbox" name="competition" class="competition" id="competition6" value="6">ボクシング
                                    <img src="image/box.jpg" walt="ボクシングのイラスト"></label>
                                </a>
                            </div>
                            <div class="col-md-2">
                                <a href="#" class="thumbnail">
                                    <label><input type="checkbox" name="competition" class="competition" id="competition7" value="7">カヌー
                                    <img src="image/canoe.jpg" alt="カヌーのイラスト"></label>
                                </a>
                            </div>
                            <div class="col-md-2">
                                <a href="#" class="thumbnail">
                                    <label><input type="checkbox" name="competition" class="competition" id="competition8" value="8">自転車競技
                                    <img src="image/bicycle.jpg" alt="自転車競技のイラスト"></label>
                                </a>
                            </div>
                            <div class="col-md-2">
                                <a href="#" class="thumbnail">
                                    <label><input type="checkbox" name="competition" class="competition" id="competition9" value="9">馬術
                                    <img src="image/jouba.jpg" alt="馬術のイラスト"></label>
                                </a>
                            </div>
                            <div class="col-md-2">
                                <a href="#" class="thumbnail">
                                    <label><input type="checkbox" name="competition" class="competition" id="competition10" value="10">フェンシング
                                    <img src="image/fencing.jpg" alt="フェンシングのイラスト"></label>
                                </a>
                            </div>
                            <div class="col-md-2">
                                <a href="#" class="thumbnail">
                                    <label><input type="checkbox" name="competition" class="competition" id="competition11" value="11">サッカー
                                    <img src="image/soccer.jpg" alt="サッカーのイラスト"></label>
                                </a>
                            </div>
                            <div class="col-md-2">
                                <a href="#" class="thumbnail">
                                    <label><input type="checkbox" name="competition" class="competition" id="competition12" value="12">ゴルフ
                                    <img src="image/golf.jpg" alt="ゴルフのイラスト"></label>
                                </a>
                            </div>
                            <div class="col-md-2">
                                <a href="#" class="thumbnail">
                                    <label><input type="checkbox" name="competition" class="competition" id="competition13" value="13">体操
                                    <img src="image/gym.jpg" alt="体操のイラスト"></label>
                                </a>
                            </div>
                            <div class="col-md-2">
                                <a href="#" class="thumbnail">
                                    <label><input type="checkbox" name="competition" class="competition" id="competition14" value="14">ハンドボール
                                    <img src="image/handball.jpg" alt="ハンドボールのイラスト"></label>
                                </a>
                            </div>
                            <div class="col-md-2">
                                <a href="#" class="thumbnail">
                                    <label><input type="checkbox" name="competition" class="competition" id="competition15" value="15">ホッケー
                                    <img src="image/hockey.jpg" alt="ホッケーのイラスト"></label>
                                </a>
                            </div>
                            <div class="col-md-2">
                                <a href="#" class="thumbnail">
                                    <label><input type="checkbox" name="competition" class="competition" id="competition16" value="16">柔道
                                    <img src="image/judo.jpg" alt="柔道のイラスト"></label>
                                </a>
                            </div>
                            <div class="col-md-2">
                                <a href="#" class="thumbnail">
                                    <label><input type="checkbox" name="competition" class="competition" id="competition17" value="17">空手
                                    <img src="image/karate.jpg" alt="空手のイラスト"></label>
                                </a>
                            </div>
                            <div class="col-md-2">
                                <a href="#" class="thumbnail">
                                    <label><input type="checkbox" name="competition" class="competition" id="competition18" value="18">近代五種
                                    <img src="image/gosyu.jpg" alt="近代五種のイラスト"></label>
                                </a>
                            </div>
                            <div class="col-md-2">
                                <a href="#" class="thumbnail">
                                    <label><input type="checkbox" name="competition" class="competition" id="competition19" value="19">ボート
                                    <img src="image/boat.jpg" alt="ボートのイラスト"></label>
                                </a>
                            </div><div class="col-md-2">
                                <a href="#" class="thumbnail">
                                    <label><input type="checkbox" name="competition" class="competition" id="competition20" value="20">ラグビー
                                    <img src="image/rugby.jpg" walt="ラグビーのイラスト"></label>
                                </a>
                            </div>
                            <div class="col-md-2">
                                <a href="#" class="thumbnail">
                                    <label><input type="checkbox" name="competition" class="competition" id="competition21" value="21">セーリング
                                    <img src="image/Sailing.jpg" walt="セーリングのイラスト"></label>
                                </a>
                            </div>
                            <div class="col-md-2">
                                <a href="#" class="thumbnail">
                                    <label><input type="checkbox" name="competition" class="competition" id="competition22" value="22">射撃
                                    <img src="image/syageki.jpg" alt="射撃のイラスト"></label>
                                </a>
                            </div>
                            <div class="col-md-2">
                                <a href="#" class="thumbnail">
                                    <label><input type="checkbox" name="competition" class="competition" id="competition23" value="23">スケートボード
                                    <img src="image/scate.jpg" alt="スケートボードのイラスト"></label>
                                </a>
                            </div>
                            <div class="col-md-2">
                                <a href="#" class="thumbnail">
                                    <label><input type="checkbox" name="competition" class="competition" id="competition24" value="24">スポーツクライミング
                                    <img src="image/climing.jpg" alt="スポーツクライミングのイラスト"></label>
                                </a>
                            </div>
                            <div class="col-md-2">
                                <a href="#" class="thumbnail">
                                    <label><input type="checkbox" name="competition" class="competition" id="competition25" value="25">サーフィン
                                    <img src="image/surfin.jpg" alt="サーフィンのイラスト"></label>
                                </a>
                            </div>
                            <div class="col-md-2">
                                <a href="#" class="thumbnail">
                                    <label><input type="checkbox" name="competition" class="competition" id="competition26" value="26">卓球
                                    <img src="image/tabletennis.jpg" alt="卓球のイラスト"></label>
                                </a>
                            </div>
                            <div class="col-md-2">
                                <a href="#" class="thumbnail">
                                    <label><input type="checkbox" name="competition" class="competition" id="competition27" value="27">テコンドー
                                    <img src="image/tekondo.jpg" alt="テコンドーのイラスト"></label>
                                </a>
                            </div>
                            <div class="col-md-2">
                                <a href="#" class="thumbnail">
                                    <label><input type="checkbox" name="competition" class="competition" id="competition28" value="28">テニス
                                    <img src="image/tennis.jpg" alt="テニスのイラスト"></label>
                                </a>
                            </div>
                            <div class="col-md-2">
                                <a href="#" class="thumbnail">
                                    <label><input type="checkbox" name="competition" class="competition" id="competition29" value="29">トライアスロン
                                    <img src="image/triathlon.jpg" alt="トライアスロンのイラスト"></label>
                                </a>
                            </div>
                            <div class="col-md-2">
                                <a href="#" class="thumbnail">
                                    <label><input type="checkbox" name="competition" class="competition" id="competition30" value="30">バレーボール
                                    <img src="image/valley.jpg" alt="バレーボールのイラスト"></label>
                                </a>
                            </div>
                            <div class="col-md-2">
                                <a href="#" class="thumbnail">
                                    <label><input type="checkbox" name="competition" class="competition" id="competition31" value="31">ウェイトリフティング
                                    <img src="image/weight.jpg" alt="ウェイトリフティングのイラスト"></label>
                                </a>
                            </div>
                            <div class="col-md-2">
                                <a href="#" class="thumbnail">
                                    <label><input type="checkbox" name="competition" class="competition" id="competition32" value="32">レスリング
                                    <img src="image/wrestling.jpg" alt="レスリングのイラスト"></label>
                                </a>
                            </div>
                        </div>
                    </dd>
                    <input type="submit" id="button" name="button1" value="確認画面へ" class="btn btn-primary"; />
                </form>
            </div>
        </div>
        <footer>
            <div id="footer_nav">
                <ul>
                    <li><a href="http://ec2-18-191-25-220.us-east-2.compute.amazonaws.com/vote/public/top">HOME</a></li>
                    <li><a href="contact.html">お問い合わせ</a></li>
                </ul>
                <p>当サイトの不具合・内容の間違い等から生じうるあらゆる損失に対し、当方は一切の責任を負いかねます。</p>
            </div>
            <small>&copy; 2019 H.R.</small>
        </footer>
    </body>
</html>
