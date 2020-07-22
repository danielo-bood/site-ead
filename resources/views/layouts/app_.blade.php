
<html>
    <title> @yield('titre') </title>
    <head>
    <link rel="stylesheet" href="{{ asset('css\bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css\style.css')}}">
    <link rel="stylesheet" href="{{asset('fonts\font-awesome.css')}}">
    <link rel="stylesheet" href="{{ asset('css\style1.css')}}">
    <link rel="stylesheet" href="{{asset('css\clients.css')}}">
    <link rel="stylesheet" href="{{asset('css\bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css\bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css\produit.css')}}">  

    </head>
    <body>
      
        <div id="tetes">
                
<div class="cotainer-fluid" id=""> 
        
         
          <h1 id="site_name"> E.A.D </h1>  
        
   </div>   

      <nav id="menu" class="contenair-fluid">
        <ul class="text-right mr-4 pt-4">         
           <li> <a href="/home"> Acceuil </a> </li>
           <li> <a href="Contact"> Contact </a> </li>
           <li> <a href="A_propos"> A propos </a> </li>
           <li> <a href="Publication"> Publication </a> </li>
        </ul> 
      </nav>
             <div>
                 <div class="text-right">
                   @if(auth()->user())
                   <span style="color:black">{{auth()->user()->name}} <i style="color:lightseagreen" class="fa fa-user"></i></span>
                    <button id="btn" class="btn btn-danger mr-3" ><a href="/deconnexion">Déconnexion <i class="fa fa-sign-out"></i> </a></button>  
                    @else
                    <button id="btn" class="btn btn-success mr-2" ><a href="/login">Connexion</a></button> 
                    @endif                
                 </div>
            </div>

        </div>

        <div id="ventre">
        @yield('ventre')
        </div>

        <div id="page-footer">
            <div id="footer-top">
            </div>
            <div style="text-align:center;" id="footer-bottom">
               <span style="font-weight:bold; color:green">&copy; Ecole</span>  <?= date('Y') ?> <small>Tous droits reservés</small>  
            </div>
        </div>           
         
        </div>
    </body>  
</html>