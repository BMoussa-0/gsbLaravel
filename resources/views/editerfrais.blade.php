<body>
    <div id="contenu">
        <!-- Formulaire pour un type de frais -->
        <h2>Pour un type de frais</h2>
        <form method="post" action="{{ route('chemin_editerfraistype') }}">
            @csrf
            <label for="type">Veuillez saisir un type de frais : </label>
            <input type="text" name="type" required />
            <input id="ok" type="submit" value="Valider" />
        </form>

        <!-- Formulaire pour une année et un mois -->
        <h2>Pour une année et un mois</h2>
        <form method="post" action="{{ route('chemin_editerfraisannee') }}">
            @csrf
            <label for="moisAnnee">Veuillez saisir une année et un mois au format AAAAmm : </label>
            <input type="text" name="moisAnnee" required />
            <input id="ok" type="submit" value="Valider" />
        </form>

        <!-- Formulaire pour un visiteur -->
        <h2>Pour un visiteur</h2>
        <form method="post" action="{{ route('chemin_editerfraisvisiteur') }}">
            @csrf
            <label for="visiteur">Veuillez saisir un visiteur : </label>
            <input type="text" name="visiteur" required />
            <input id="ok" type="submit" value="Valider" />
        </form>
    </div>
</body>
