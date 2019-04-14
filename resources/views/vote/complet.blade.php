<!DOCTYPE html>
<html>
    <head>
        <title>完了画面</title>
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
    </head>
    <body>
        <div class="mb-2 bg-light text-dark aaaa">
            <div class="title">
                <h1>２０２０東京オリンピック競技投票</h1>
            </div>
            <h2>ご協力ありがとうございました。</h2>
                <a href="http://ec2-18-191-25-220.us-east-2.compute.amazonaws.com/vote/public/top">入力画面へ</a>
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