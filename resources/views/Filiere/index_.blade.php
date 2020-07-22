<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Filières</title>


    <link rel="stylesheet" href="{{asset('js/bootstrap.min.js')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/grid/">

    <!-- Bootstrap core CSS -->
<link href="/docs/4.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/4.5/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/4.5/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/4.5/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
<link rel="icon" href="/docs/4.5/assets/img/favicons/favicon.ico">
<meta name="msapplication-config" content="/docs/4.5/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c">


    <style>
        .themed-grid-col {
  padding-top: 15px;
  padding-bottom: 15px;
  background-color: rgba(86, 61, 124, .15);
  border: 1px solid rgba(86, 61, 124, .2);
}

.themed-container {
  padding: 15px;
  margin-bottom: 30px;
  background-color: rgba(0, 123, 255, .15);
  border: 1px solid rgba(0, 123, 255, .2);
}

      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="grid.css" rel="stylesheet">
  </head>
  <body class="py-4">
    <div class="container">


  <p class="lead"></p>
  <p><code></code> </p>

  <div class="card-header">
                <h1 class="text-center">Liste des Filières</h1>
            </div>

            <div class="container">
                <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Etat</th>
                        <th>Abréviation</th>
                        <th>Nom</th>
                        <th>Durée Formation</th>
                    </tr>

                    <tr>
                        <tbody>

                            <tr>
                            @foreach($filieres as $filieres)
                                <td><?=!$filieres->actif?'<span class="badge badge-danger">Désactif</span>':'<span class="badge badge-success">Actif</span>'?>  </td>
                                <td>{{$filieres->abreviation}}</td>
                                <td>{{$filieres->name}}</td>
                                <td>{{$filieres->duref}}</td>
                                <td>
                                    <ul class="list-inline">
                                    <li class="list-inline-item"><a href="/filieres/show/{{$filieres->id}}" class="btn btn-info mt-3 btn-sm">AFFICHER</a></li>
                                    </ul>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </tr>

                </thead>
                </table>
                <div>

                    <a href="/admin/acceuil" class="btn btn-danger mt-3">RETOUR</a>
                </div>



  <div id="page-footer">
            <div id="footer-top">
            </div>
            <div style="text-align:center;" id="footer-bottom">
               <span style="font-weight:bold; color:green">&copy; Ecole </span>  <?= date('Y') ?> <small>Tous droits reservés</small>
            </div>
  </div>

</body>
</html>
