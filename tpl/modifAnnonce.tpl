<section>
    <div id="content">
        <h1 style="border-bottom: solid black 1px;">Annonces</h1>

                <div class="Annonce">
                    <form method="POST" action="/ProjetRacoinNet/annonces/modifAnnonce" >
                        <h1>Votre annonce</h1>
                        <p>Titre : <input type="text" value='{$annonce['titreannonce']}' name="titre" size="150"></p>                        
                        <p>Descriptif de l'annonce : <br><br><textarea  id="objet" name="descrAnnonce" value='' cols="150" rows="10" >{$annonce['descriptifannonce']}</textarea><br><br>
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
                        </script></p>
                        <p>Prix : <input type="number" value='{$annonce['prixannonce']}' name="prix" min="0"></p>
                        <p>Ville : <input type="text" value='{$annonce['villeannonce']}' name="ville"></p>
                        <p>Code postal : <input type="text" value='{$annonce['codepostalannonce']}' name="codePost"></p>
                        <h1> Vos informations</h1>
                            <p>Nom : <input type="text" value='{$util['nom']}' name="nomUtil"></p>
                            <p>Prénom : <input type="text" value='{$util['prenom']}' name="prenomUtil"></p>
                            <p>Ville : <input type="text" value='{$annonce['villeannonce']}' name="villeUtil"></p>
                            <p>Code postal : <input type="text" value='{$util['codepost']}' name="postUtil"></p>
                            <p>Mail : <input type="email" value='{$util['mail']}' name="mailUtil"></p>
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