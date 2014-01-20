<section>
    <div id="content">
        <h1 style="border-bottom: solid black 1px;">Annonces</h1>

        {section name=annonces loop=$annonces}
            <a href="#">
                <div class="Annonce">
                    <h3>Titre : {$annonces[annonces].titre}</h3>
                    <p>Descriptif : {$annonces[annonces].descriptif}</p>
                    <p>Prix : {$annonces[annonces].prix} euros</p>
                    <p>Code postal : {$annonces[annonces].post}</p>
                    <p>Ville : {$annonces[annonces].ville}</p>
                    <a href="#" onClick="afficher()">Contacter le vendeur<a/>
                    <div id="contact" style="display:none;">
                        <p>Nom : {$annonces[annonces].nomUtil}</p>
                        <p>Prénom : {$annonces[annonces].prenomUtil}</p>
                        <p>Ville : {$annonces[annonces].villeUtil}</p>
                        <p>Code postal : {$annonces[annonces].postUtil}</p>
                        <p>Departement : {$annonces[annonces].deptUtil}</p>
                        <p>Mail : {$annonces[annonces].mailUtil}</p>
                        <p>Téléphone : 0{$annonces[annonces].phoneUtil}</p>
                        
                    </div>
                </div>
                <hr>
                <a href="#" OnClick="validation()"> Modifier l'annonce</a>
                   <div id="validation" style="display:none;">
                       <p> Pour modifier cette annonce, merci de rentrer l'email et le mot de passe associés à cette annonce</p>
                       <form method="POST" action="/ProjetRacoinNet/annonces/modifAnnonce/{$annonces[annonces].id}">
                           Email : <input type="text" name="mail" />
                           Mot de passe : <input type="text" name="pass"/>
                           <input type="submit" value="Valider pour modifier"/>
                       </form>
                        
                    </div>
            </a>

        {/section}
        
    </div>
</section>