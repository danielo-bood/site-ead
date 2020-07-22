@extends('layouts/app_')
@section('titre')
Gestion des étudiants
@endsection
@section('ventre')
    <div class="container mt-5 mb-5">
      <div class="card">
        <div class="card-header">
          <ul class="list-inline">
           <li class="list-inline-item"><a href="/etudiant/create" class="btn btn-danger btn-sm"> Ajouter<i class="fa fa-user"></i></a></li>
          </ul>
        </div>
            <h2 class="text-center">Base des étudiants</h2>
         <table class="table table-bordered table-striped">
            <thead class="card-body">
              <div class="table table-bordered table-striped">
                    <tr>
                        <th></th>
                        <th>Nom</th>
                        <th>E-mail</th>
                        <th>Role</th>
                    </tr>
                <tbody>
                    @foreach($user as $use)
                    <tr>
                        <td><?=$use->actif? '<span class="badge badge-success">Actif</span>':'<span class="badge badge-danger">Désactif</span>'?> </td>
                        <td>{{$use->name}}</td>
                        <td>{{$use->email}}</td>
                        <td>{{$use->role?$use->role->name:"Aucun"}}</td>
                        <td>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                  <a href="/etudiant/edit/{{$use->id}}" class="btn btn-warning btn-sm">Modifier</a>
                                  @if(!$use->actif)
                                  <a href="/etudiant/open/{{$use->id}}" class="btn btn-success btn-sm">Activer</a>
                                  @else
                                  <a href="/etudiant/close/{{$use->id}}" class="btn btn-danger btn-sm">Désactiver</a>
                                  @endif
                                </li>
                            </ul>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </thead>
        </table>
        <div>
            <a href="/local/acceuil" class="btn btn-danger mt-3">RETOUR</a>
        </div>
      </div>
    </div>

 @endsection
