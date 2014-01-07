<nav>
    <form method="POST" action="afficheCateg">
        <ul>
            <li><input type="text"  placeholder="Votre recherche" autofocus /></li>
            <li>
                <select name="selectCateg">
                    {section name=categ loop=$categories}
                        <option value="{$categories[categ].titreCateg}">{$categories[categ].titreCateg}</option>
                    {/section}
                </select>
            </li>
            <li> <select name="thelist">
                    <option>Région</option>
                    <option>Alsace</option>
                    <option>Lorraine</option>
                </select></li>
            <li> <select name="thelist">
                    <option>Département</option>
                    <option>Vosges</option>
                    <option>Meuthe-et-Moselle</option>
                </select></li>
            <li><input type="text" placeholder="Code postal ex:54000"/></li>
            <li><input type="submit" name="Rechercher" value="Rechercher"/></li>
        </ul>
    </form>
</nav>
<a id="but" href="creation.html">Ajouter annonce</a>
<a id="but" href=#>Gérer mes annonces</a>
