<section>
    <div id="content">
        <h1 style="border-bottom: solid black 1px;">Annonces</h1>

        {section name=annonces loop=$annonces}
            <a href="/ProjetRacoinNet/annonce/{$annonces[annonces].id}">
                <div class="Annonce">
                    <h3>Titre : {$annonces[annonces].titre}</h3>
                    <p>Descriptif : {$annonces[annonces].descriptif}</p>
                    <p>Prix : {$annonces[annonces].prix} euros</p>
                    <p>Code postal : {$annonces[annonces].post}</p>
                    <p>Ville : {$annonces[annonces].ville}</p>
                </div>
                <hr>
            </a>

        {/section}
    </div>
</section>