<form method="POST" action="ajoutAnnonce">
    
    Titre du ticket : <input type="text" name="titreAnnonce" placeholder="Titre de l'annonce" size="150"/><br><br>
    Descriptif de l'annonce : <br><br><textarea  id="objet" name="descrAnnonce" cols="150" rows="10" ></textarea><br><br>
                <script type=\'text/javascript\'>
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
      Prix de l'annonce : <input type="number" name="prixAnnonce" placeholder="Prix de l'annonce"/> Euros <br><br>
      Date de l'annonce : <input type="date" name="dateAnnonce" placeholder="Prix de l'annonce" size="150"/> <br><br>
      Ville: <input type="text" name="villeAnnonce" placeholder="Ville"/><br><br>
      Code Postal: <input type="text" name="codePostAnnonce" placeholder="Code Postal"/><br><br>
     
    
    <input type="submit" value="Ajouter l'annonce"/>
    
</form>