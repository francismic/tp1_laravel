@extends('layouts.app')
@section('title', 'Ajouter un étudiant')
@section('content')

<div class="container mt-4">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Ajouter un étudiant</h3>
                        <p>Remplir le formulaire.</p>
                        <form action="{{route('etudiant.store')}}" method="post">
                        @csrf
                            <div class="col-md-12 mt-4">
                               <input class="form-control" type="text" name="nom" placeholder="Nom Complet" required>
                            </div>

                            <div class="col-md-12 mt-4">
                                <input class="form-control" type="text" name="adresse" placeholder="Adresse maison" required>
                            </div>

                            <div class="col-md-12 mt-4">
                                <input class="form-control" type="tel" name="phone" placeholder="Numéro de téléphone" required>
                            </div>

                            <div class="col-md-12 mt-4">
                                <input class="form-control" type="email" name="email" placeholder="Adresse courielle" required>
                            </div>

                            <div class="col-md-12 mt-4">
                                <input class="form-control" type="date" name="birthday" placeholder="Date de naissance" required>
                            </div>

                           <div class="col-md-12">
                                <select class="form-select mt-3" name="villeId" required>
                                      <option selected disabled value="">Ville</option>
                                      @foreach($villes as $ville)
                                        <option value="{{ $ville->id }}">{{$ville->nom}}</option>
                                     @endforeach
                               </select>
                           </div>

                            <div class="form-button mt-3">
                                <button id="submit" type="submit" class="btn btn-primary">Ajouter</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection