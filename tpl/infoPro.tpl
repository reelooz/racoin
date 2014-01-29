<h1> Localisation </h1>
Ville* : <input type="text" name="villeAnnonce" value="{$smarty.session.ville}"/><br>      
Code Postal* : <input type="text" name="codePostAnnonce" value="{$smarty.session.codepost}"/><br><br>

<h1> Vos information </h1>
Nom* : <input type="text" name="NomPosteurAnnonce" value="{$smarty.session.nom}"/><br>
Prénom* : <input type="text" name="PrenomPosteurAnnonce"  value="{$smarty.session.prenom}"/><br>
Mail* : <input type="email" name="MailPosteurAnnonce" value="{$smarty.session.mail}"/><br>
Téléphone* : <input type="tel" name="TelPosteurAnnonce" value="0{$smarty.session.telephone}" /><br><br>