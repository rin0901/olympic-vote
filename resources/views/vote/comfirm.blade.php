<!DOCTYPE html>
<html>
    <head>
        <title>確認画面</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <style type="text/css">
        	body {margin: 0px 50px 50px 50px;}
        	.aaaa {
                padding: 0px 16px 16px 16px;
            }
            .title {
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
            h2{
            	padding-top: 10px;
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
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script type="text/javascript">
        $(function() {
            switch ($('#sex').val()) {
				case '0':
					$('#dd1').html("男");
					 break;
				case '1':
					$('#dd1').html("女");
					 break;
				default:
					 break;
			}
            console.log($('#sex').val());
            
            
            switch ($('#age').val()) {
				case '0':
					$('#dd2').html("10代以下");
					 break;
				case '1':
					$('#dd2').html("20代");
					 break;
				case '2':
					$('#dd2').html("30代");
					 break;
				case '3':
					$('#dd2').html("40代");
					 break;
				case '4':
					$('#dd2').html("50代");
					 break;
				case '5':
					$('#dd2').html("60代");
					 break;
				case '6':
					$('#dd2').html("70代");
					 break;
				case '7':
					$('#dd2').html("80代以上");
					 break;
				default:
					 break;
			}
            console.log($('#age').val());  
            
            switch ($('#competition').val()) {
				case '0':
					$('#dd3').html("水泳");
					 break;
				case '1':
					$('#dd3').html("アーチェリー");
					 break;
				case '2':
					$('#dd3').html("陸上競技");
					 break;
				case '3':
					$('#dd3').html("バドミントン");
					 break;
				case '4':
					$('#dd3').html("野球・ソフトボール");
					 break;
				case '5':
					$('#dd3').html("バスケットボール");
					 break;
				case '6':
					$('#dd3').html("ボクシング");
					 break;
				case '7':
					$('#dd3').html("カヌー");
					 break;
				case '8':
					$('#dd3').html("自転車競技");
					 break;
				case '9':
					$('#dd3').html("馬術");
					 break;
				case '10':
					$('#dd3').html("フェンシング");
					 break;
				case '11':
					$('#dd3').html("サッカー");
					 break;
				case '12':
					$('#dd3').html("ゴルフ");
					 break;
				case '13':
					$('#dd3').html("体操");
					 break;
				case '14':
					$('#dd3').html("ハンドボール");
					 break;
				case '15':
					$('#dd3').html("ホッケー");
					 break;
				case '16':
					$('#dd3').html("柔道");
					 break;
				case '17':
					$('#dd3').html("空手");
					 break;
				case '18':
					$('#dd3').html("近代五種");
					 break;
				case '19':
					$('#dd3').html("ボート");
					 break;
				case '20':
					$('#dd3').html("ラグビー");
					 break;
				case '21':
					$('#dd3').html("セーリング");
					 break;
				case '22':
					$('#dd3').html("射撃");
					 break;
				case '23':
					$('#dd3').html("スケートボード");
					 break;
				case '24':
					$('#dd3').html("スポーツクライミング");
					 break;
				case '25':
					$('#dd3').html("サーフィン");
					 break;
				case '26':
					$('#dd3').html("卓球");
					 break;
				case '27':
					$('#dd3').html("テコンドー");
					 break;
				case '28':
					$('#dd3').html("テニス");
					 break;
				case '29':
					$('#dd3').html("トライアスロン");
					 break;
				case '30':
					$('#dd3').html("バレーボール");
					 break;
				case '31':
					$('#dd3').html("ウェイトリフティング");
					 break;
				case '32':
					$('#dd3').html("レスリング");
					 break;
				default:
					 break;
			}
            console.log($('#competition').val());
        });
        </script>

    </head>
    <body>
        <div class="mb-2 bg-light text-dark aaaa">
            <div class="title">
                <h1>２０２０東京オリンピック競技投票</h1>
            </div>
	        <h2>確認画面</h2>
	        <p>よろしければ送信を押して下さい。</p>
	        <form method ="POST" action="/vote/public/complet">
	            {{ csrf_field() }}
	            <dl>
	              <dt>性別：</dt>
	              <dd id='dd1'></dd>
	              <input type='hidden' name='sex' id='sex' value='{{$sex}}'>
	              </dd>
	            </dl>
	 
	            <dl>
	              <dt>年齢：</dt>
	              <dd id='dd2'></dd>
	              <input type='hidden' name='age' id='age' value='{{$age}}'>
	            </dl>
	 
	            <dl>
	              <dt>競技：</dt>
	              <dd id='dd3'></dd>
	              <input type='hidden' name='competition' id='competition' value='{{$competition}}'>
	            </dl>
	 
	            <div><input type="submit" name="button1" value="送信" class="btn btn-primary"; /></div>
        	</form>
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