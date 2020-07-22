<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('fonts/font-awesome.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/style1.css')}}">
        <title>Admin</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: black;
                color: floralwhite;
                font-family: 'Nunito', sans-serif;
                font-weight: 100;
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
            }

            .title {
                font-size: 74px;
                letter-spacing: 7px;
            }

            .links > a {
                color: grey;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .links > a:hover{
                color: white;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            #btn>a{
                color: white;
                text-decoration:none;
            }
            #text{
                animation-name: text;
                animation-duration: 3s;
                animation-delay: 1;

            }

            @keyframes text{
    0%{
        color: black;
        margin-bottom: -40px;
    }
    30%{
        letter-spacing: 25px;
        margin-bottom: -40px;
        font-weight: 200;
    }
    85%{
        letter-spacing: 8px;
        margin-bottom: -40;
    }
    100%{
        color: snow;

    }
}

        </style>
    </head>
        <div>
          <a class="btn btn-danger mr-3 mt-3" id="pos"  href="/deconnexion">Déconnexion <i class="fa fa-sign-out"></i></a>
        </div>

    <body>
        <div class="flex-center position-ref full-height">
            <div class="content" id="divp">
                <div class="title m-b-md" id="text">
                    Espace administrateur
                </div>

                <div class="links">
                    <a href="/users">Utilisateurs<i class="fa fa-users"></i></a>
                    <a href="/filieres_">Filières</a>
                    <a href="/sites">Sites</a>
                    <a href="">xxxx</a>
                    <a href="">xxxx</a>
                    <a href="">xxxx</a>
                </div>
            </div>
        </div>
    </body>
</html>
