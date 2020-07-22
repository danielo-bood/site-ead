@extends('layouts.app_')
@section('titre')
Création d'un étudiant
@endsection
@section('ventre')
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <div class="container mt-5">
            <h3 class="mb-5 text-center">Fiche de l'étudiant</h3>

                <div class="mycard">
                    <form enctype="multipart/form-data" action="/users" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="file">Photo</label>
                            <input type="file" name="image_uri" id="file" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="">Nom et Prénom</label>
                            <input required type="text" class="form-control" placeholder="Saisir le nom et le prénom" name="name">
                        </div>

                        <div class="form-group">
                            <label for="">Numéro de téléphone</label>
                            <input required type="text" class="form-control" placeholder="Saisir le numéro de téléphone" name="telephone">
                        </div>

                        <div class="form-group">
                            <label for="">E-mail</label>
                            <input type="email" placeholder="Saisir son E-mail" name="email" class="form-control">
                        </div>

			<div class="form-group">
                            <label for="">Mot de passe</label>
                            <input type="password" placeholder="Choisissez un mot de passe" name="password" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Filière</label>
                            <select name="filiere_id" id="" class="form-control col-md-3 ml-3 mb-2" required>
                        	<option value="">Filière</option>
                           	 @foreach($filiere as $cli)
                       		 <option value="{{ $cli->id}}">{{ $cli->name }}</option>
                           	@endforeach
              			</select>
                        </div>

                        <div class="form-group">
                            <label for="">Site</label>
                            <select name="site_id" id="" class="form-control col-md-3 ml-3 mb-2" required>
                        	<option value="">Site</option>
                           	 @foreach($site as $cli)
                       		 <option value="{{ $cli->id}}">{{ $cli->name }}</option>
                           	@endforeach
              			</select>
                        </div>

                        <div>

                            <input type="submit" class="btn btn-success btn-sm btn-block" value="Inscrire" a href="/etudiant/create">

                        </div>

                    </form>
                  </div>
            </div>



@endsection
