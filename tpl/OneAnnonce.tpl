<section>
    <div id="content">
        <h1 style="border-bottom: solid black 1px;">Annonces</h1>

        <h3>{$annonce.titre}</h3>
        {if isset($annonce.photo1) }
            <div id="galerie">
                <ul id="galerie_mini">
                    {if isset($annonce.photo1) }
                        <li><a href="/ProjetRacoinNet/{$annonce.photo1}"><img src="/ProjetRacoinNet/{$annonce.miniaturephoto1}"/></a></li>
                    {/if}
                    {if isset($annonce.photo2) }
                        <li><a href="/ProjetRacoinNet/{$annonce.photo2}"><img src="/ProjetRacoinNet/{$annonce.miniaturephoto2}"/></a></li>
                    {/if}
                    {if isset($annonce.photo3) }
                        <li><a href="/ProjetRacoinNet/{$annonce.photo3}"><img src="/ProjetRacoinNet/{$annonce.miniaturephoto3}"/></a></li>
                    {/if}
                </ul>
                <dl id="photo">
                    <dd><img id="big_pict" src="/ProjetRacoinNet/{$annonce.photo1}" alt="Photo 1 en taille normale" /></dd>
                </dl>
            </div>
        {/if}

        <div class="Annonce">
            <p>Descriptif : {$annonce.descriptif}</p>
            <p>Prix : {$annonce.prix} euros</p>
            <p>Code postal : {$annonce.postUtil}</p>
            <p>Ville : {$annonce.villeUtil}</p>
            <a id="aaffiche" href="#" >Contacter le vendeur<a/>
                <div id="contact" style="display:none;">
                    <p>Nom : {$annonce.nomUtil}</p>
                    <p>Prénom : {$annonce.prenomUtil}</p>
                    <p>Ville : {$annonce.villeUtil}</p>
                    <p>Code postal : {$annonce.postUtil}</p>
                    <p>Mail : {$annonce.mailUtil}</p>
                    <p>Téléphone : 0{$annonce.phoneUtil}</p>

                </div>
        </div>
        <hr>
        <a href="#" id="amodif"  > Modifier l'annonce</a>
        <a href="#" id="asuppr" > Supprimer l'annonce</a>
        <div id="validationSupp" style="display:none;">
            <p> Pour supprimer cette annonce, merci de rentrer l'email et le mot de passe associés à cette annonce</p>
            <form method="POST" action="/ProjetRacoinNet/annonces/suppAnnonce/{$annonce.id}">
                Email : <input type="email" name="mail" />
                Mot de passe : <input type="password" name="pass"/>
                <input type="submit" value="Valider pour supprimer"/>
            </form>

        </div>
        <div id="validation" style="display:none;">
            <p> Pour modifier cette annonce, merci de rentrer l'email et le mot de passe associés à cette annonce</p>
            <form method="POST" action="/ProjetRacoinNet/annonces/modifAnnonce/{$annonce.id}">
                Email : <input type="email" name="mail" />
                Mot de passe : <input type="password" name="pass"/>
                <input type="submit" value="Valider pour modifier"/>
            </form>
        </div>

    </div>
</section>