<form method="POST" action="{$url}" enctype="multipart/form-data">
        
    <h1> Votre annonce </h1>
    Catégorie : <select name="selectCateg">
            {section name=categ loop=$categories}
                <option value="{$categories[categ].idCateg}">{$categories[categ].titreCateg}</option>
            {/section}
        </select><br><br>
    Titre de l'annonce : <input type="text" name="titreAnnonce" placeholder="Titre de l'annonce" size="150"/><br><br>
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
      Prix: <input type="number" name="prixAnnonce" placeholder="Prix de l'annonce" min="0"/> Euros <br><br>
      <input type="hidden" name="dateAnnonce" value="{$date}"/>
      Photo n°1 :   <INPUT name="file1" type=file size=50><br>
                    <span id="leschamps_2"><a class=bouton href="javascript:create_champ(2)">Ajouter une photo</a></span></br></br>
      
      <h1> Localisation </h1>
      Ville: <input type="text" name="villeAnnonce" placeholder="Ville"/><br>      
      Code Postal: <input type="text" name="codePostAnnonce" placeholder="Code Postal"/><br><br>
      
      <h1> Vos information </h1>
     Nom: <input type="text" name="NomPosteurAnnonce" placeholder="Votre nom"/><br>
     Prénom: <input type="text" name="PrenomPosteurAnnonce" placeholder="Votre prénom"/><br>
     Mail: <input type="email" name="MailPosteurAnnonce" placeholder="Votre mail de contact"/><br>
     Téléphone: <input type="tel" name="TelPosteurAnnonce" placeholder="Votre téléphone de contact"/><br>
     Mot de passe: <input type="password" name="PassAnnonce" placeholder="Mot de passe de votre annonce"/><br><br>
      
    
    <input type="submit" value="Ajouter l'annonce" name="choixAjout"/>
    <input type="submit" value="Previsualiser l'annonce" name="choixAjout"/>
    
</form>
