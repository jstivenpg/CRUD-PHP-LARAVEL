<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>App Registrar</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            
            .error {
                color: #FF0000;
            }

            html, body {
                
                
                color: #636b6f;
                font-family: "Latin Modern Roman 10";
                
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                
                text-align: center;
                height: 60vh;
                margin: 0px;  

            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .button {
                display: inline-block;
            border-radius: 40px;
            background-color: #f4511e;
            border: none;
            color: #FFFFFF;
            text-align: center;
            font-size: 30px;
            padding: 2px;
            width: 200px;
            transition: all 0.5s;
            cursor: pointer;
            margin: 5px;
            }

            .button span {
            cursor: pointer;
            display: inline-block;
            position: relative;
            transition: 0.5s;
            }

            .button span:after {
            content: '\00bb';
            position: absolute;
            opacity: 0;
            top: 0;
            right: -20px;
            transition: 0.5s;
            }

            .button:hover span {
            padding-right: 25px;
            }

            .button:hover span:after {
            opacity: 1;
            right: 0;
            }

           
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height"style="background-image: url('fondo.jpg');">
            
            <div class="content" class="loginbody"style="background-image: url('fondo.jpg');">
                <div class="title m-b-md">
                    Bienvenido a tu App para Registrar Personal 
                </div>
                <div></div>
                <a href ="/login" class="button" style="vertical-align:middle"><span>Ingresar </span></a>
            </div>
        </div>
    </body>
</html>