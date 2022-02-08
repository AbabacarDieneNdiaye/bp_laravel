@include('layouts.header')

<div class="container">

    <div class="col-md-8 col-xs-12 col-md-offset-2" style="margin-top:40px; width: 1000px; margin-left: 30px;">
        <div class="panel panel-info">
            <div class="panel-heading">Banque du Peuple</div>
            <div class="panel-body">
                <div class="alert alert-success" style="font-size:18px; text-align:justify;">
                    Liste des Comptes
                </div>
                    <table class="table table-bordered table-stripped" style="text-align: center">
                            <tr>
                                <th>id du compte</th>
                                <th>Numero de compte</th>
                                <th>Type de compte</th>
                                <th>Solde</th>
                                <th>Remuneration</th>
                                <th>Date d'Ouverture</th>
                                <th>Date de Fermeture</th>

                            </tr>
                            @foreach ($comptes as $compte)
                            <tr>
                                <td>{{ $compte->id }}</td>
                                <td>{{ $compte->numeroCompte }}</td>
                                <td>{{ $compte->typeCompte }}</td>
                                <td>{{ $compte->solde }}</td>
                                <td>{{ $compte->remuneration }}</td>
                                <td>{{ $compte->dateOuverture }}</td>
                                <td>{{ $compte->dateDeblocage }}</td>
                            </tr>
                            @endforeach
                                
                        </table>
            </div>
            <a href="{{ route('home') }}">Accueil</a> <a href="{{ route('addcompte') }}">Ajouter un compte</a>
        </div>
    </div>
    
</div>
@include('layouts.footer')