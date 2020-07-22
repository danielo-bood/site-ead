<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/style1.css')}}">
        <title>Espace étudiant</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
#un{
	
     color: transparent;
     text-align: center; 
	 animation-name: script;
	 animation-duration: 10s;
	 animation-delay: 2s; 
	 animation-iteration-count: infinite;
	 animation-direction: alternate;
	 animation-timing-function: case;
}

@-webkit-keyframes script {
        	
	     0%{background-color: forestgreen;}
         25%{background-color: lightgreen;}
		 50%{background-color: forestgreen;}
		 75%{background-color: yellowgreen;}
		 100%{background-color: green;}
}


            html, body {
                background-color: mediumspringgreen;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            #span{
                float: right;
                font-weight: bold;
                letter-spacing: 4px;
                padding-top: 22px;
                margin-left: -200px;
                padding-right: 17px;
                font-size: 18px;

            }
            i{
                background-color:green;
                border-radius: 20px;
                color: forestgreen;
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
                font-size: 73px;
                letter-spacing: 4px:
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
          <a class="btn btn-danger mr-5 mt-3" id="pos"  href="/deconnexion">Déconnexion</a> 
        </div>         
           <span class="" id="span">{{auth()->user()->name}} <i class="fa fa-user" id="un"></i></span> 

    <body>
        <div class="flex-center position-ref full-height">
            <div class="content" id="divp"> 
                <div class="title m-b-md" id="text">
                    Espace Etudiant
                </div>

                <div class="links">
                    <a href="">Gestion des réclamations</a>                                     
                </div>
            </div>
        </div>
    </body>
</html>