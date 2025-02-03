@extends ('modeles/gestionnaire')
    @section('menu')
            <!-- Division pour le sommaire -->
        <div id="menuGauche">
            <div id="infosUtil">
                  
             </div>  
               <ul id="menuList">
                   <li >
                    <strong>Bonjour {{ $gestionnaire['nom'] . ' ' . $gestionnaire['prenom'] }}</strong>
                   </li>
                  <li class="smenu">
                     <a href="{{ route('chemin_frais')}}" title="Edition des frais">Editer les frais</a>
                  </li>
                </ul>
               
        </div>
    @endsection          