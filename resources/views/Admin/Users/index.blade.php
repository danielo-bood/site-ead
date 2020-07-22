@extends('layouts/app_')
@section('titre')
Gestion des utilisateurs
@endsection
@section('ventre')
    <div class="container mt-5 mb-5">
      <div class="card">
        <div class="card-header">
          <ul class="list-inline">
           <li class="list-inline-item"><a href="/users/create" class="btn btn-danger btn-sm"> Ajouter<i class="fa fa-user"></i></a></li>
          </ul>
        </div>
            <h2 class="text-center">Base des utilisateurs</h2>
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
                        <td><?=$use->actif? '<span class="badge badge-success">a</span>':'<span class="badge badge-danger">d</span>'?> </td>
                        <td>{{$use->name}}</td>
                        <td>{{$use->email}}</td>
                        <td>{{$use->role?$use->role->name:"Aucun"}}</td>
                        <td>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                  <a href="/users/{{$use->id}}/edit" class="btn btn-warning btn-sm">Modifier</a>
                                  @if(!$use->actif)
                                  <a href="/users/{{$use->id}}/open" class="btn btn-success btn-sm">Actif</a>
                                  @else
                                  <a href="/users/{{$use->id}}/close" class="btn btn-danger btn-sm">Désactiver</a>
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
            <a href="/admin/acceuil" class="btn btn-danger mt-3">RETOUR</a>
        </div>
      </div>
    </div>

    <div>{{$user->links()}}</div>
 @endsection
