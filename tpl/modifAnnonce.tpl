<section>
    <div id="content">
        <h1 style="border-bottom: solid black 1px;">Annonces</h1>

                <div class="Annonce">
                    <form method="POST" action="../../annonces/modifAnnonce" >
                        <p>Titre : <input type="text" value='{$annonce['titreannonce']}' name="titre"></p>
                        <p>Descriptif : <input type="text" value='{$annonce['descriptifannonce']}' name="description"></p>
                        Descriptif de l'annonce : <br><br><textarea  id="objet" name="descrAnnonce" value='' cols="150" rows="10" >{$annonce['descriptifannonce']}</textarea><br><br>
                        <script type='text/javascript'>
                            //<![CDATA[
                                var editor=CKEDITOR.replace( 'descrAnnonce',
                                    {
                                     toolbar :
                                            [
                                                ['Cut','Copy','Paste','PasteText','PasteFromWord'],
                                                ['Undo','Redo'],['TextColor','BGColor'],
                                                ['Bold','Italic','Underline','Strike'],
                                                ['NumberedList','BulletedList','-','Outdent','Indent','Blockquote'],
                                                ['JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],
                                                ['Link','Unlink'],
                                                ['Table','HorizontalRule','SpecialChar'],
                                                ['Format','Font','FontSize'],
                                            ],
                                    enterMode: 2,
                                    shiftEnterMode	: 1
                                    } );
                                    CKEDITOR.config.contentsCss = '../web/css/screen.css' ; 
                            //]]>
                        </script>
                        <p>Prix : <input type="text" value='{$annonce['prixannonce']}' name="prix"></p>
                        <p>Code postal : <input type="text" value='{$annonce['codePost']}' name="codePost"></p>
                        <p>Ville : <input type="text" value='{$annonce['ville']}' name="ville"></p>
                            <p>Nom : <input type="text" value='{$util['nom']}' name="nomUtil"></p>
                            <p>Prénom : <input type="text" value='{$util['prenom']}' name="prenomUtil"></p>
                            <p>Ville : <input type="text" value='{$util['ville']}' name="villeUtil"></p>
                            <p>Code postal : <input type="text" value='{$util['codepost']}' name="postUtil"></p>
                            <p>Departement : <input type="text" value='{$util['departement']}' name="deptUtil"></p>
                            <p>Mail : <input type="text" value='{$util['mail']}' name="mailUtil"></p>
                            <p>Téléphone : <input type="text" value='0{$util['telephone']}' name="phoneUtil"></p>
                            <input type="hidden" value='{$annonce['idannonce']}' name="id">
                            <input type="hidden" value='{$annonce['idcateg']}' name="idCat">
                            <input type="hidden" value='{$annonce['idutil']}' name="idUtil">
                        </div>
                        <input type="submit" value="Valider">
                    </form> 
                </div>
                <hr>
            
        
    </div>
</section>