<!DOCTYPE html>
<html>
    <head>
        <title>２０２０東京オリンピック人気競技投票結果</title>
        <!--Bootstrap４に必要なCSSとJavaScriptを読み込み-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        
        <style>
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
                margin-top: 0;
            }
            footer #footer_nav li:last-child {
                border-right: solid 1px #aaa;
                padding: 0 8pX;
            }
        </style>
        
    </head>
    <body>
        <div class="mb-2 bg-light text-dark aaaa">
            <div class="title">
                <h1>２０２０東京オリンピック競技投票</h1>
            </div>
            <div class="main">
                <table border="1">
                    <tr><th>Id</th><th>Sex</th><th>Age</th><th>Competition</th><br></tr>

                    @foreach ($items as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->sex}}</td>
                            <td>{{$item->age}}</td>
                            <td>{{$item->competition}}</td><br>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </body>
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
</html>
