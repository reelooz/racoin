
<nav>
    <form method="POST" action="/ProjetRacoinNet/annonces/afficheCateg">
        <ul>
            <li>
                <input type="text" name="selectRecherche" placeholder="Votre recherche" autofocus />
            </li>
            <li>
                <select name="selectCateg">
                    <option value="-1">Selectionner la catégorie</option>
                    {section name=categ loop=$categories}
                        <option value="{$categories[categ].idCateg}">{$categories[categ].titreCateg}</option>
                    {/section}
                </select>
            </li>
            <li> 
                Prix : <input type="number" name="selectPrix" min="" </input>
            </li>
            <li>
                <input type="submit" name="Rechercher" value="Rechercher"/>
            </li>
        </ul>
    </form>
</nav>
{if isset($smarty.session.id) }
    {if ($smarty.session.pro eq 1)}
        <a class="but" href="/ProjetRacoinNet/pro/addAnnonce">Ajouter annonce PRO</a>
    {else}
        <a class="but" href="/ProjetRacoinNet/annonces/addAnnonce">Ajouter annonce</a>
    {/if}
{else}
    <a class="but" href="/ProjetRacoinNet/annonces/addAnnonce">Ajouter annonce</a>
{/if}


{if isset($smarty.session.id) }
    {if ($smarty.session.pro eq 1)}
        <a class="but" href="/ProjetRacoinNet/pro/afficherProfilPro">Mon profil</a>
    {else}
        <a class="but" id="mesAnnonces" onClick="validationMesAnnonces()">Gérer mes annonces
            <div id="validationMesAnnonces" style="display:none;">
                <form method="POST" action="/ProjetRacoinNet/annonces/mesAnnonces">
                    <input type="email" name="mail" placeholder="Votre email" autofocus/>
                    <input type="submit" value="Rechercher"/>
                </form>
            </div>
        {/if}
    {else}
        <a class="but" id="mesAnnonces" onClick="validationMesAnnonces()">Gérer mes annonces
            <div id="validationMesAnnonces" style="display:none;">
                <form method="POST" action="/ProjetRacoinNet/annonces/mesAnnonces">
                    <input type="email" name="mail" placeholder="Votre email" autofocus/>
                    <input type="submit" value="Rechercher"/>
                </form>
            {/if}

        </div></a>
