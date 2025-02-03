<!-- Vue pour une annee -->
<div id="contenu">
    <!-- Vérifiez si un message est défini (optionnel) -->
    @if(session('message'))
        <p style="color: red;">{{ session('message') }}</p>
    @endif

    <h1>Liste des frais par date</h1>

    <table border="1" style="width: 100%; border-collapse: collapse;">
        <thead>
            <tr>
                <th>Visiteur</th>
                <th>Type de frais</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($fraisAnnee as $frais)
            <tr>
                <td>{{ $frais->idVisiteur }}</td>
                <td>{{ $frais->idFraisForfait }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="2" style="text-align: center;">Aucun frais trouvé pour cette période.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
