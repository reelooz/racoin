<section>
    <div id="content">
        <h1 style="border-bottom: solid black 1px;">Annonces</h1>

        {section name=annonces loop=$annonces}
            <a href="#">
                <div class="Annonce">
                    <h3>{$annonces[annonces].titre}</h3>
                    <p>{$annonces[annonces].descriptif}</p>
                    <p>{$annonces[annonces].prix}</p>
                    <p>{$annonces[annonces].post}</p>
                    <p>{$annonces[annonces].ville}</p>
                </div>
                <hr>
            </a>

        {/section}
    </div>
</section>