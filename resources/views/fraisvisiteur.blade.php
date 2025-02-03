<!-- Vue pour un visiteur -->
<div id="contenu">
    <!-- Vérifiez si un message est défini (optionnel) -->
    @if(session('message'))
        <p style="color: red;">{{ session('message') }}</p>
    @endif

    <h1>Liste des frais par visiteur</h1>

    <table border="1" style="width: 100%; border-collapse: collapse;">
        <thead>
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
                <td colspan="3" style="text-align: center;">Aucun frais trouvé pour ce type.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
