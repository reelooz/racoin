<form method="POST" action="/ProjetRacoinNet/pro/addAnnonce" enctype="multipart/form-data">
        
    <h1> Votre annonce PRO </h1>
    <p style="color:red;"> Certains champs vont être automatiquement complétés.<p>
    Catégorie* : <select name="selectCateg">
            {section name=categ loop=$categories}
                <option value="{$categories[categ].idCateg}">{$categories[categ].titreCateg}</option>
            {/section}
        </select><br><br>
    Titre de l'annonce* : <input type="text" name="titreAnnonce" placeholder="Titre de l'annonce" size="150"/><br><br>
    Descriptif de l'annonce : <br><br><textarea  id="objet" name="descrAnnonce" cols="150" rows="10" ></textarea><br><br>
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
      Prix* : <input type="number" name="prixAnnonce" placeholder="Prix de l'annonce" min="0"/> Euros <br><br>
      <input type="hidden" name="dateAnnonce" value="{$date}"/>
      Photo n°1 :   <INPUT name="file1" type=file size=50><br>
                    <span id="leschamps_2"><a class=bouton href="javascript:create_champ(2)">Ajouter une photo</a></span></br></br>
      
      <h1> Localisation </h1>
      Ville* : <input type="text" name="villeAnnonce" value="{$smarty.session.ville}"/><br>      
      Code Postal* : <input type="text" name="codePostAnnonce" value="{$smarty.session.codepost}"/><br><br>
      
      <h1> Vos information </h1>
      Nom* : <input type="text" name="NomPosteurAnnonce" value="{$smarty.session.nom}"/><br>
     Prénom* : <input type="text" name="PrenomPosteurAnnonce"  value="{$smarty.session.prenom}"/><br>
     Mail* : <input type="email" name="MailPosteurAnnonce" value="{$smarty.session.mail}"/><br>
     Téléphone* : <input type="tel" name="TelPosteurAnnonce" value="0{$smarty.session.telephone}" /><br><br>
      
    
    <input type="submit" value="Ajouter l'annonce" name="choixAjout"/>
    <input type="submit" value="Previsualiser l'annonce" name="choixAjout"/>
    
</form>
