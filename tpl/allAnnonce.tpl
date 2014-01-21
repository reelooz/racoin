<section>
    <div id="content">
        <h1 style="border-bottom: solid black 1px;">Annonces</h1>

        {section name=annonces loop=$annonces}
            <a href="/ProjetRacoinNet/annonce/{$annonces[annonces].id}">
                <div class="Annonce">
                    {if isset($annonces[annonces].miniature) }
                        <img src="/ProjetRacoinNet/{$annonces[annonces].miniature}">
                    {/if}
                    <div class="text">
                        <h3>Titre : {$annonces[annonces].titre}</h3>
                        <p>Descriptif : {$annonces[annonces].descriptif}</p>
                    </div>
                    <div class="prixpos">
                        <p>Prix : {$annonces[annonces].prix} euros</p>
                        <p>Code postal : {$annonces[annonces].post}</p>
                        <p>Ville : {$annonces[annonces].ville}</p>
                    </div>
                </div>
                <hr>
            </a>

        {/section}
        {if !isset($annonces[0]) }
            <p>Pas d'annonce</p>
        {/if}
    </div>
</section>