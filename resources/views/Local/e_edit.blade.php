@extends('layouts.app_')
@section('titre')
Modification de l'étudiant
@endsection
@section('ventre')
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <div class="container mt-5">
        <h3 class="mt-1 mb-4 ml-1 text-center">Modification de {{$user->name}}</h3>
         <form action="/users/edit" method="post" class="fomr-group">
          @csrf
          <input type="hidden" value="{{$user->id}}" name="id">
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <input value="{{$user->name}}" type="text" placeholder="Saisir son nom" name="name" class="form-control">
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <input value="{{$user->email}}" type="email" placeholder="Saisir son E-mail" name="email" class="form-control">
                </div>
              </div>
              <div class="col-md-3">
                 <div class="form-group">
                    <input value="{{$user->password}}" type="password" placeholder="Mot de passe" name="password" class="form-control">
                 </div>
              </div>
             
              </div>
              <div class="">
                 <div class="">
                   <input class="btn btn-danger" value="Envoyer" type="submit">
                 </div>
              </div>
            </div>
          </form>
        </div>
@endsection
