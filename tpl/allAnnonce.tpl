<section>
    <div id="annonce">
        <h1 style="border-bottom: solid black 1px;">Annonces</h1>

        {section name=annonces loop=$annonces}
            <a href="/ProjetRacoinNet/annonce/{$annonces[annonces].id}">
                <div class="Annonce">
                    <h3>{$annonces[annonces].titre}</h3>
                    {if isset($annonces[annonces].miniature) }
                        <img src="/ProjetRacoinNet/{$annonces[annonces].miniature}">
                    {/if}
                    <div class="desc">
                        
                        <p class="objet"> {$annonces[annonces].descriptif}</p>                    
                        <p>Prix : {$annonces[annonces].prix} euros</p>
                        <p>Code postal : {$annonces[annonces].post}</p>
                        <p>Ville : {$annonces[annonces].ville}</p>
                    </div>
                </div>
                
            </a>
<hr>
        {/section}
        {if !isset($annonces[0]) }
            <p>Pas d'annonce</p>
        {/if}
    </div>
</section>