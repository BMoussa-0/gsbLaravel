<!DOCTYPE html>
<html>
<body>
    <div id="contenu">
        <!-- Formulaire pour un type de frais -->
        <h2>Pour un type de frais</h2>
        <form method="post" action="{{ route('chemin_editerfraistype') }}">
            @csrf
            <label for="type">Veuillez sélectionner un type de frais : </label>
            <select name="type" required>
                <option value="">Choisissez un type de frais</option>
                <option value="NUI">Nuitées</option>
                <option value="REP">Repas</option>
                <option value="KM">Kilométrage</option>
                <option value="INV">Invitations</option>
            </select>
            <input id="ok" type="submit" value="Valider" />
        </form>

        <!-- Formulaire pour une année et un mois -->
        <h2>Pour une année et un mois</h2>
        <form method="post" action="{{ route('chemin_editerfraisannee') }}">
            @csrf
            <label for="moisAnnee">Veuillez sélectionner une année et un mois : </label>
            <select name="moisAnnee" required>
                <option value="">Choisissez une année et un mois</option>
                @foreach($mois as $unMois)
                    <option value="{{ $unMois['mois'] }}">
                        {{ substr($unMois['mois'], 0, 4) }} - {{ substr($unMois['mois'], 4, 2) }}
                    </option>
                @endforeach
            </select>
            <input id="ok" type="submit" value="Valider" />
        </form>

        <!-- Formulaire pour un visiteur -->
        <h2>Pour un visiteur</h2>
        <form method="post" action="{{ route('chemin_editerfraisvisiteur') }}">
            @csrf
            <label for="visiteur">Veuillez sélectionner un visiteur : </label>
            <select name="visiteur" required>
                <option value="">Choisissez un visiteur</option>
                @foreach($visiteurs as $visiteur)
                    <option value="{{ $visiteur['nom'] }}">
                        {{ $visiteur['nom'] }} {{ $visiteur['prenom'] }}
                    </option>
                @endforeach
            </select>
            <input id="ok" type="submit" value="Valider" />
        </form>
    </div>
</body>
</html>