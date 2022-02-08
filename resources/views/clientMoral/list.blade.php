@include('layouts.header')
    
    <div class="container">

        <div class="col-md-8 col-xs-12 col-md-offset-2" style="margin-top:40px; width: 1000px; margin-left: 30px;">
            <div class="panel panel-info">
                <div class="panel-heading">Banque du Peuple</div>
                <div class="panel-body">
                    <div class="alert alert-success" style="font-size:18px; text-align:justify;">
                        Liste des clients entreprises
                    </div>
                            <table class="table table-bordered table-stripped" style="text-align: center">
                                <tr>
                                    <th>Identifiant</th>
                                    <th>Nom</th>
                                    <th>Raison Sociale</th>
                                    <th>Adresse</th>
                                    <th>Telephone</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                                @foreach ($clients as $client)
                                <tr>
                                    <td>{{ $client->id }}</td>
                                    <td>{{ $client->nom }}</td>
                                    <td>{{ $client->raisonSociale }}</td>
                                    <td>{{ $client->adresse }}</td>
                                    <td>{{ $client->tel }}</td>
                                    <td>{{ $client->email }}</td>

                                    <td><a href="{{ route('deleteclientm', ['id'=>$client->id]) }}">Supprimer</a></td>                                        
                                </tr>
                                @endforeach
                            </table>
                </div>
                <a href="{{ route('home') }}">Accueil</a> <a href="{{ route('addclientm') }}">Ajouter un client</a>
            </div>
        </div>
        
    </div>
@include('layouts.footer')