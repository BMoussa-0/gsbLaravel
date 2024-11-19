
@section('content')
<div id="contenu" class="container mt-5">
    <h1 class="text-center">Frais du Visiteur : {{ $visiteur }}</h1>

    <div class="table-responsive mt-4">
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>ID Visiteur</th>
                    <th>Mois</th>
                    <th>ID Frais Forfait</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($fraisvn as $frais)
                <tr>
                    <td>{{ $frais->nom }}</td>
                    <td>{{ $frais->prenom }}</td>
                    <td>{{ $frais->idVisiteur }}</td>
                    <td>{{ $frais->mois }}</td>
                    <td>{{ $frais->idFraisForfait }}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center text-warning">Aucun frais trouvé pour ce visiteur.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection

