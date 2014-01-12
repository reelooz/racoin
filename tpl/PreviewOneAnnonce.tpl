<section>
    <div id="content">
        <h1 style="border-bottom: solid black 1px;">Annonces</h1>

            <a href="#">
                <div class="Annonce">
                    <h3>Titre : {$annonce['titre']}</h3>
                    <p>Descriptif : {$annonce['description']}</p>
                    <p>Prix : {$annonce['prix']} euros</p>
                    <p>Code postal : {$annonce['date']}</p>
                    <p>Ville : {$annonce['ville']}</p>
                    <a href="#" onClick="afficher()">Contacter le vendeur<a/>
                    <div id="contact" style="display:none;">
                        <p>Nom : {$annonce['nom']}</p>
                        <p>Prénom : {$annonce['prenom']}</p>
                        <p>Ville : {$annonce['ville']}</p>
                        <p>Code postal : {$annonce['post']}</p>
                        <p>Departement : osef</p>
                        <p>Mail : {$annonce['mail']}</p>
                        <p>Téléphone : 0{$annonce['phoneUser']}</p>
                        
                    </div>
                </div>
                <hr>
            </a>
        
    </div>
</section>