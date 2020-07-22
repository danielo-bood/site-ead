
<html>
    <title> @yield('titre') </title>
    <head>
    <link rel="stylesheet" href="{{ asset('css\bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css\style.css')}}">
    <link rel="stylesheet" href="{{asset('css\font-awesome.css')}}">
    <link rel="stylesheet" href="{{ asset('css\style1.css')}}">
    <link rel="stylesheet" href="{{asset('css\clients.css')}}">
    <link rel="stylesheet" href="{{asset('css\bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css\bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css\produit.css')}}">  

    </head>
    <body>
        <div id="tetes">
                
<div class="cotainer-fluid" id="tete"> 
        <img src="aigle royale.png" alt="" id="image">
         
          <h1 id="site_name"> Bienvenue sur mon site </h1>  
        
   </div>

      <nav id="menu" class="contenair-fluid">
        <ul class="text-right mr-4 pt-4">         
           <li> <a href="/"> Acceuil </a> </li>
           <li> <a href="Contact"> Contact </a> </li>
           <li> <a href="A_propos"> A propos </a> </li>
           <li> <a href="Publication"> Publication </a> </li>
        </ul> 
      </nav>
 </div>

<div>
                 <div class="text-right">
                   @if(auth()->user())
                   <span style="color:white">{{auth()->user()->name}}</span>
                    <button id="btn" class="btn btn-danger mr-2" ><a href="/deconnexion">Déconnexion</a></button>  
                    @else
                    <button id="btn" class="btn btn-success mr-2" ><a href="/login">Connexion</a></button> 
                    @endif                
                 </div>
            </div>
        <div id="ventre">
        @yield('ventre')
        </div>

        <div id="pied">
         
        </div>
    </body>  
</html>