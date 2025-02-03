<!-- Vue pour un type de frais -->
<div id="contenu">
    <!-- Vérifiez si un message est défini (optionnel) -->
    @if(session('message'))
        <p style="color: red;">{{ session('message') }}</p>
    @endif

    <h1>Liste des frais par type</h1>

    <table border="1" style="width: 100%; border-collapse: collapse;">
        <thead>
            <tr>
                <th>Visiteur</th>
                <th>Montant</th>
                <th>Mois</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($visiteurs as $vis)
            <tr>
                <td>{{ $vis->visiteur }}</td>
                <td>{{ $vis->montant }}</td>
                <td>{{ $vis->mois }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="3" style="text-align: center;">Aucun frais trouvé pour ce type.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

