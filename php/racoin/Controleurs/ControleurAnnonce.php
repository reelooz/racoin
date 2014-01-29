<?php

namespace racoin\Controleurs;

use \racoin\Classe\Annonce;
use \racoin\Classe\Categorie;
use \racoin\Classe\Photo;
use \racoin\Classe\Utilisateur;
use racoin\Tools\tools;

class ControleurAnnonce {

    public function displayAllAnnonce($s) {
        $s->display('tpl/header.tpl');
        $categories = array();
        $resCateg = Categorie::all();
        foreach ($resCateg as $res) {
            $t = array();
            $t['idCateg'] = $res->idcateg;
            $t['titreCateg'] = $res->labelcateg;
            $categories[] = $t;
        }
        $s->assign('categories', $categories);
        $s->display('tpl/sideBar.tpl');

        $annonces = array();
        $resAnnonce = Annonce::with('categorie', 'utilisateur')->orderBy('dateannonce', 'DESC')->get();
        foreach ($resAnnonce as $res) {
            $tab = array();

            /*             * *************Partie de traitement des photos************** */
            $tab['miniature'] = null;
            $photos = Photo::where('idannonce', '=', $res->idannonce)->get();
            foreach ($photos as $photo) {
                $tab['miniature'] = $photo->cheminthum;
                break;
            }
            /*             * ********************************************************* */

            $tab['id'] = $res->idannonce;
            $tab['titre'] = $res->titreannonce;
            $tab['descriptif'] = $res->descriptifannonce;
            $tab['prix'] = $res->prixannonce;
            $tab['post'] = $res->codepostalannonce;
            $tab['ville'] = $res->villeannonce;
            $tab['idUtil'] = $res->idutil;
            $tab['idCateg'] = $res->idcateg;
            $annonces[] = $tab;
        }
        $s->assign('annonces', $annonces);
        $s->display('tpl/allAnnonce.tpl');
        $s->display('tpl/footer.tpl');
    }

    public function displayOneAnnonce($s, $id) {
        $s->display('tpl/header.tpl');
        $categories = array();
        $resCateg = Categorie::all();
        foreach ($resCateg as $res) {
            $t = array();
            $t['idCateg'] = $res->idcateg;
            $t['titreCateg'] = $res->labelcateg;
            $categories[] = $t;
        }
        $s->assign('categories', $categories);
        $s->display('tpl/sideBar.tpl');
        $annonces = array();
        $tab = array();

        /*         * *************Partie de traitement des photos************** */
        $tab['photo1'] = null;
        $tab['photo2'] = null;
        $tab['photo3'] = null;
        $tab['miniaturephoto1'] = null;
        $tab['miniaturephoto2'] = null;
        $tab['miniaturephoto3'] = null;

        $i = 1;
        $photos = Photo::where('idannonce', '=', $id)->get();
        foreach ($photos as $photo) {
            $tab['photo' . $i] = $photo->cheminfull;
            $tab['miniaturephoto' . $i] = $photo->cheminthum;
            $i++;
        }
        /*         * ********************************************************* */
        $res = Annonce::find($id);
        $resUtil = Utilisateur::find($res->idutil);
        $tab['id'] = $res->idannonce;
        $tab['titre'] = $res->titreannonce;
        $tab['descriptif'] = $res->descriptifannonce;
        $tab['prix'] = $res->prixannonce;
        $tab['post'] = $res->codepostalannonce;
        $tab['ville'] = $res->villeannonce;
        $tab['idUtil'] = $resUtil->idutil;
        $tab['nomUtil'] = $resUtil->nom;
        $tab['prenomUtil'] = $resUtil->prenom;
        $tab['villeUtil'] = $resUtil->ville;
        $tab['postUtil'] = $resUtil->codepost;
        $tab['deptUtil'] = $resUtil->departement;
        $tab['mailUtil'] = $resUtil->mail;
        $tab['mdpUtil'] = $resUtil->motdepasse;
        $tab['phoneUtil'] = $resUtil->telephone;
        $tab['idCateg'] = $res->idcateg;

        $s->assign('annonce', $tab);
        $s->display('tpl/OneAnnonce.tpl');
        $s->display('tpl/footer.tpl');
    }

    public function afficheCateg($s, $categ) {
        $t = new tools();
        $s->display('tpl/header.tpl');
        $categories = array();
        $resCateg = Categorie::all();
        foreach ($resCateg as $res) {
            $taa = array();
            $taa['idCateg'] = $res->idcateg;
            $taa['titreCateg'] = $res->labelcateg;
            $categories[] = $taa;
        }
        $s->assign('categories', $categories);
        $s->display('tpl/sideBar.tpl');
        if ($t->getRequestField('selectRecherche') != null) {
            if ($t->getRequestField('selectPrix') != null) {
                $rech = '%' . $_POST['selectRecherche'] . '%';
                $resRecherche = Annonce::where('descriptifannonce', 'like', $rech)->orWhere('titreannonce', 'like', $rech)->having('prixannonce', '<', $_POST['selectPrix'])->orderBy('dateannonce', 'DESC')->get();
                $recherche = array();
                foreach ($resRecherche as $res) {
                    $tab = array();
                    $tab['id'] = $res->idannonce;
                    $tab['titre'] = $res->titreannonce;
                    $tab['descriptif'] = $res->descriptifannonce;
                    $tab['prix'] = $res->prixannonce;
                    $tab['post'] = $res->codepostalannonce;
                    $tab['ville'] = $res->villeannonce;
                    $tab['idUtil'] = $res->idutil;
                    $tab['idCateg'] = $categ;
                    $recherche[] = $tab;
                }
                $s->assign('annonces', $recherche);
                $s->display('tpl/allAnnonce.tpl');
            } else {
                $rech = '%' . $_POST['selectRecherche'] . '%';
                $resRecherche = Annonce::where('titreannonce', 'like', $rech)->orWhere('descriptifannonce', 'like', $rech)->orderBy('dateannonce', 'DESC')->get();
                $recherche = array();
                foreach ($resRecherche as $res) {
                    $tab = array();
                    $tab['id'] = $res->idannonce;
                    $tab['titre'] = $res->titreannonce;
                    $tab['descriptif'] = $res->descriptifannonce;
                    $tab['prix'] = $res->prixannonce;
                    $tab['post'] = $res->codepostalannonce;
                    $tab['ville'] = $res->villeannonce;
                    $tab['idUtil'] = $res->idutil;
                    $tab['idCateg'] = $categ;
                    $recherche[] = $tab;
                }
                $s->assign('annonces', $recherche);
                $s->display('tpl/allAnnonce.tpl');
            }
        } elseif ($t->getRequestField('selectCateg') != null && $t->getRequestField('selectCateg') != -1) {
            $resRecherche = Annonce::where('idcateg', '=', $categ)->orderBy('dateannonce', 'DESC')->get();
            $recherche = array();
            foreach ($resRecherche as $res) {
                $tab = array();
                $tab['id'] = $res->idannonce;
                $tab['titre'] = $res->titreannonce;
                $tab['descriptif'] = $res->descriptifannonce;
                $tab['prix'] = $res->prixannonce;
                $tab['post'] = $res->codepostalannonce;
                $tab['ville'] = $res->villeannonce;
                $tab['idUtil'] = $res->idutil;
                $tab['idCateg'] = $categ;
                $recherche[] = $tab;
            }
            $s->assign('annonces', $recherche);
            $s->display('tpl/allAnnonce.tpl');
        } elseif ($t->getRequestField('selectPrix') != null) {
            $resRecherche = Annonce::where('prixannonce', '<', $_POST['selectPrix'])->orderBy('dateannonce', 'DESC')->get();
            $recherche = array();
            foreach ($resRecherche as $res) {
                $tab = array();
                $tab['id'] = $res->idannonce;
                $tab['titre'] = $res->titreannonce;
                $tab['descriptif'] = $res->descriptifannonce;
                $tab['prix'] = $res->prixannonce;
                $tab['post'] = $res->codepostalannonce;
                $tab['ville'] = $res->villeannonce;
                $tab['idUtil'] = $res->idutil;
                $tab['idCateg'] = $categ;
                $recherche[] = $tab;
            }
            $s->assign('annonces', $recherche);
            $s->display('tpl/allAnnonce.tpl');
        }
        $s->display('tpl/footer.tpl');
    }

    public function afficheCategUrl($s, $categ) {
        $s->display('tpl/header.tpl');
        $categories = array();
        $resCateg = Categorie::all();
        foreach ($resCateg as $res) {
            $t = array();
            $t['idCateg'] = $res->idcateg;
            $t['titreCateg'] = $res->labelcateg;
            $categories[] = $t;
        }
        $s->assign('categories', $categories);
        $s->display('tpl/sideBar.tpl');
        $resCategUrl = Categorie::where('labelcateg', '=', $categ)->get();
        foreach ($resCategUrl as $res) {
            $idCateg = $res->idcateg;
            $resAnnonce = Annonce::where('idcateg', '=', $res->idcateg)->get();
            $annonce = array();
            foreach ($resAnnonce as $res) {
                $tab = array();
                $tab['id'] = $res->idannonce;
                $tab['titre'] = $res->titreannonce;
                $tab['descriptif'] = $res->descriptifannonce;
                $tab['prix'] = $res->prixannonce;
                $tab['post'] = $res->codepostalannonce;
                $tab['ville'] = $res->villeannonce;
                $tab['idUtil'] = $res->idutil;
                $tab['idCateg'] = $categ;
                $annonce[] = $tab;
            }
            $s->assign('annonces', $annonce);
            $s->display('tpl/allAnnonce.tpl');
            $s->display('tpl/footer.tpl');
        }
    }

    public function addAnnonce($s, $app) {
        $url = $app->urlFor('ajout');
        $s->assign('url', $url);
        $date = date("Y-m-d G:i:s");
        $s->assign('date', $date);
        $categories = array();
        $resCateg = Categorie::all();
        foreach ($resCateg as $res) {
            $t = array();
            $t['idCateg'] = $res->idcateg;
            $t['titreCateg'] = $res->labelcateg;
            $categories[] = $t;
        }
        $s->assign('categories', $categories);
        $s->display('tpl/header.tpl');
        $s->display('tpl/ajoutAnnonce.tpl');
        $s->display('tpl/footer.tpl');
    }

    public function ajoutAnnonce($s) {
        $s->display('tpl/header.tpl');
        $t = new tools();

        $choix = $_POST['choixAjout'];
        if ($choix == "Ajouter l'annonce") {
            $res = false;
            if ($t->getRequestField('titreAnnonce') != NULL && $t->getRequestField('prixAnnonce') != NULL && $t->getRequestField('selectCateg') != NULL && $t->getRequestField('NomPosteurAnnonce') != NULL &&
                    $t->getRequestField('PrenomPosteurAnnonce') != NULL && $t->getRequestField('villeAnnonce') != NULL && $t->getRequestField('codePostAnnonce') != NULL &&
                    $t->getRequestField('MailPosteurAnnonce') != NULL && $t->getRequestField('TelPosteurAnnonce') != NULL) {
                $user = new Utilisateur();
                $user->nom = $_POST['NomPosteurAnnonce'];
                $user->prenom = $_POST['PrenomPosteurAnnonce'];
                $user->ville = $_POST['villeAnnonce'];
                $user->codepost = $_POST['codePostAnnonce'];
                $user->departement = '';
                $user->mail = $_POST['MailPosteurAnnonce'];
                $user->motdepasse = md5($_POST['PassAnnonce']);
                $user->telephone = $_POST['TelPosteurAnnonce'];
                $user->save();
                $userid = $user->idutil;
                //var_dump($user->toArray());
                $annonce = new Annonce();
                $annonce->titreannonce = $_POST['titreAnnonce'];
                $annonce->descriptifannonce = $_POST['descrAnnonce'];
                $annonce->prixannonce = $_POST['prixAnnonce'];
                $annonce->dateannonce = $_POST['dateAnnonce'];
                $annonce->villeannonce = $_POST['villeAnnonce'];
                $annonce->codepostalannonce = $_POST['codePostAnnonce'];
                $annonce->motdepasseannonce = md5($_POST['PassAnnonce']);
                $annonce->emailannonce = $_POST['MailPosteurAnnonce'];

                $annonce->idutil = $userid;
                $annonce->idcateg = $_POST['selectCateg'];
                //var_dump($annonce->toArray());
                $res = $annonce->save();
                $annonceId = $annonce->idannonce;

                $path = "files/";
                $paththumb = "files/thumb/";
                $i = 1;
                $files = array();
                while (isset($_FILES['file' . $i]['tmp_name'])) {
                    $photo = new Photo();
                    if ($_FILES['file' . $i]['tmp_name'] != "") {
                        $extension_upload = strtolower(substr(strrchr($_FILES['file' . $i]['name'], '.'), 1));
                        $files[$i]["nom"] = $_FILES['file' . $i]['name'];
                        $files[$i]["path"] = $path . md5(uniqid(rand(), true)) . "." . $extension_upload;
                        $files[$i]["paththumb"] = $paththumb . md5(uniqid(rand(), true)) . "." . $extension_upload;
                        echo $files[$i]["paththumb"];
                        $photo->nomphoto = $files[$i]["nom"];
                        $photo->cheminfull = $files[$i]["path"];
                        $photo->cheminthum = $files[$i]["paththumb"];
                        $photo->idannonce = $annonceId;
                        $photo->save();
                        while (file_exists($files[$i]["path"])) {
                            $files[$i]["path"] = $path . md5(uniqid(rand(), true)) . "." . $extension_upload;
                        }
                        move_uploaded_file($_FILES['file' . $i]['tmp_name'], $files[$i]["path"]);
                        $t->imagethumb($files[$i]["path"], $files[$i]["paththumb"], 150, FALSE, TRUE);
                    }
                    $i++;
                }
            } else {
                $res = false;
            }
            if ($res) {
                $s->assign('titre', "Votre annonce a correctement été ajoutée");
                $s->assign('message', "Vous pouvez consulter et modifier à tout moment cette dernière en vous rendant sur ");
                $s->assign('annonce', $annonceId);
                $s->display('tpl/Confirmation.tpl');
            } else {
                $s->assign('erreur', "Une erreur est survenue lors de l'ajout de votre annonce, vueillez vérifier que vous avez correctement rempli tous les champs de celle-ci");
                $s->display('tpl/Erreur.tpl');
            }
        } elseif ($choix == "Previsualiser l'annonce") {
            $annonce = array();
            $annonce['titre'] = $_POST['titreAnnonce'];
            $annonce['description'] = $_POST['descrAnnonce'];
            $annonce['prix'] = $_POST['prixAnnonce'];
            $annonce['date'] = $_POST['dateAnnonce'];
            $annonce['ville'] = $_POST['villeAnnonce'];
            $annonce['mail'] = $_POST['MailPosteurAnnonce'];
            $annonce['post'] = $_POST['codePostAnnonce'];
            $annonce['nom'] = $_POST['NomPosteurAnnonce'];
            $annonce['prenom'] = $_POST['PrenomPosteurAnnonce'];
            $annonce['phoneUser'] = $_POST['TelPosteurAnnonce'];

            $s->assign('annonce', $annonce);
            $s->display('tpl/PreviewOneAnnonce.tpl');
        }
        $s->display('tpl/footer.tpl');
    }

    public function modAnnonce($s, $app, $id) {

        $t = new tools();
        if ($t->getRequestField('mail') != null && $t->getRequestField('pass') != null) {
            $mail = $_POST['mail'];
            $pass = md5($_POST['pass']);
            $annonce = Annonce::find($id);
            $passRecup = $annonce->motdepasseannonce;
            $emailRecup = $annonce->emailannonce;
            if ($mail == $emailRecup && $pass == $passRecup) {
                $url = $app->urlFor('modif');
                $s->assign('url', $url);

                $util = Utilisateur::find($annonce->idutil);
                $s->display('tpl/header.tpl');
                $s->assign('annonce', $annonce);
                $s->assign('util', $util);
                $s->display('tpl/modifAnnonce.tpl');
                $s->display('tpl/footer.tpl');
            } else {
                echo 'Email ou mot de passe incorect';
            }
        } else {
            echo 'bad ass dude';
        }
    }

    public function modifAnnonce($s) {
        $annonce = Annonce::find($_POST['id']);
        $annonce->titreannonce = $_POST['titre'];
        $annonce->descriptifannonce = $_POST['descrAnnonce'];
        $annonce->prixannonce = $_POST['prix'];
        $annonce->villeannonce = $_POST['ville'];
        $annonce->codepostalannonce = $_POST['codePost'];
        $annonce->emailannonce = $_POST['mailUtil'];
        $annonce->idutil = $_POST['idUtil'];
        $annonce->idcateg = $_POST['idCat'];
        $annonce->save();

        $util = Utilisateur::find($_POST['idUtil']);
        $util->nom = $_POST['nomUtil'];
        $util->prenom = $_POST['prenomUtil'];
        $util->ville = $_POST['villeUtil'];
        $util->codepost = $_POST['postUtil'];
        $util->departement = "";
        $util->mail = $_POST['mailUtil'];
        $util->telephone = $_POST['phoneUtil'];
        $util->save();

        $this->displayOneAnnonce($s, $_POST['id']);
    }

    public function suppAnnonce($s, $app, $id) {
        $t = new tools();
        if ($t->getRequestField('mail') != null && $t->getRequestField('pass') != null) {
            $mail = $_POST['mail'];
            $pass = md5($_POST['pass']);
            $annonce = Annonce::find($id);
            $passRecup = $annonce->motdepasseannonce;
            $emailRecup = $annonce->emailannonce;
            if ($mail == $emailRecup && $pass == $passRecup) {
                $url = $app->urlFor('supp');
                $s->assign('url', $url);
                $photos = Photo::where('idannonce', '=', $id)->get();
                foreach ($photos as $photo) {
                    unlink($photo->cheminfull);
                    unlink($photo->cheminthum);
                    $photo->delete();
                }
                $annonce = Annonce::find($id);
                $annonce->delete();
                $s->display('tpl/header.tpl');
                $s->display('tpl/suppAnnonce.tpl');
                $s->display('tpl/footer.tpl');
            } else {
                echo 'Email ou mot de passe incorect';
            }
        } else {
            echo 'bad ass dude';
        }
    }

    public function suppAnnonceadmin($s, $app, $id) {
        $photos = Photo::where('idannonce', '=', $id)->get();
        foreach ($photos as $photo) {
            unlink($photo->cheminfull);
            unlink($photo->cheminthum);
            $photo->delete();
        }
        $annonce = Annonce::find($id);
        $annonce->delete();
        $s->display('tpl/header.tpl');
        $s->display('tpl/suppAnnonce.tpl');
        $s->display('tpl/footer.tpl');
    }

    public function mesAnnonces($s) {
        $annonces = Annonce::where('emailannonce', '=', $_POST['mail'])->orderBy('dateannonce', 'DESC')->get();
        $tabAnnonces = array();
        foreach ($annonces as $res) {
            $tab = array();
            $tab['miniature'] = null;
            $photos = Photo::where('idannonce', '=', $res->idannonce)->get();
            foreach ($photos as $photo) {
                $tab['miniature'] = $photo->cheminthum;
                break;
            }
            $tab['id'] = $res->idannonce;
            $tab['titre'] = $res->titreannonce;
            $tab['descriptif'] = $res->descriptifannonce;
            $tab['prix'] = $res->prixannonce;
            $tab['post'] = $res->codepostalannonce;
            $tab['ville'] = $res->villeannonce;
            $tab['idUtil'] = $res->idutil;
            $tab['idCateg'] = $res->idcateg;
            $tabAnnonces[] = $tab;
        }
        $s->assign('annonces', $tabAnnonces);
        $s->display('tpl/header.tpl');
        $categories = array();
        foreach (Categorie::all() as $res) {
            $t = array();
            $t['idCateg'] = $res->idcateg;
            $t['titreCateg'] = $res->labelcateg;
            $categories[] = $t;
        }
        $s->assign('categories', $categories);
        $s->display('tpl/sideBar.tpl');
        $s->display('tpl/allAnnonce.tpl');
        $s->display('tpl/footer.tpl');
    }

    public function connexionForm($s, $app) {
        $url = $app->UrlFor('connexion');
        $s->assign('url', $url);
        $s->display('tpl/header.tpl');

        $s->display('tpl/connexionForm.tpl');
        $s->display('tpl/footer.tpl');
    }

    public function connexionValid($s, $app) {
        $t = new tools();
        if ($t->getRequestField('log') != null && $t->getRequestField('pass') != null) {
            $identifiant = $_POST['log'];
            $pass = $_POST['pass'];
            $resUser = Utilisateur::where('mail', '=', $identifiant)->get();
            foreach ($resUser as $value) {
                $resPass = $value->motdepasse;
                if (md5($pass) == $resPass) {
                    $_SESSION['id'] = $value->idutil;
                    $_SESSION['nom'] = $value->nom;
                    $_SESSION['prenom'] = $value->prenom;
                    $_SESSION['ville'] = $value->ville;
                    $_SESSION['codepost'] = $value->codepost;
                    $_SESSION['departement'] = $value->departement;
                    $_SESSION['mail'] = $value->mail;
                    $_SESSION['telephone'] = $value->telephone;
                    $_SESSION['pass'] = $value->motdepasse;
                    $_SESSION['pro'] = $value->pro;
                    $_SESSION['admin'] = $value->admin;
                    $this->displayAllAnnonce($s);
                } else {
                    echo 'Identifiant ou mot de passe invalide : Try again';
                    $s->display('tpl/header.tpl');
                    $s->display('tpl/connexionForm.tpl');
                }
            }
            if (md5($pass) == $resPass) {
                
            } else {
                echo 'Identifiant ou mot de passe invalide : Try again';
                $s->display('tpl/header.tpl');
                $s->display('tpl/connexionForm.tpl');
            }
        } else {
            $s->display('tpl/header.tpl');
            echo 'Identifiant ou mot de passe manquant';
            $s->display('tpl/connexionForm.tpl');
        }
    }

    public function deconnexion($s, $app) {
        $_SESSION = array();
        session_destroy();
        $this->displayAllAnnonce($s);
    }

    public function pageGestionAdmin($s, $app) {
        $s->display('tpl/header.tpl');
        $s->display('tpl/AdminGestion.tpl');
    }

    public function ajoutAdmin($s, $app) {
        $s->display('tpl/header.tpl');
        $s->display('tpl/AjoutAdmin.tpl');
    }

    public function addAdmin($s, $app) {
        $t = new tools();
        if ($t->getRequestField('email') != null && $t->getRequestField('nom') != null && $t->getRequestField('prenom') != null && $t->getRequestField('pass1') != null && $t->getRequestField('pass2') != null) {
            if ($_POST['pass1'] == $_POST['pass2']) {
                $res = Utilisateur::where('mail', '=', $_POST['email'])->get()->toArray();
                if (empty($res)) {
                    $user = new Utilisateur();
                    $user->nom = $_POST['nom'];
                    $user->prenom = $_POST['prenom'];
                    $user->ville = '';
                    $user->codepost = '';
                    $user->departement = '';
                    $user->mail = $_POST['email'];
                    $user->motdepasse = md5($_POST['pass1']);
                    $user->telephone = '';
                    $user->admin = 1;
                    $user->pro = 0;
                    $resadd = $user->save();
                    $userid = $user->idutil;
                    if ($resadd == TRUE) {
                        $this->confirmaionAddAdmin($s, $userid);
                    } else {
                        echo 'Problème pour ajouter, recommencer pliiiiiiiiiiiz';
                        $this->ajoutAdmin($s, $app);
                    }
                } else {
                    echo 'Identifiant déjà existant';
                    $this->ajoutAdmin($s, $app);
                }
            } else {
                echo 'Les mots de passe sont différents';
                $this->ajoutAdmin($s, $app);
            }
        } else {
            echo 'Merci de remlir tous les champs bordel !';
            $this->ajoutAdmin($s, $app);
        }
    }

    public function confirmaionAddAdmin($s, $userid) {
        $resUtil = Utilisateur::find($userid);
        $s->display('tpl/header.tpl');
        $s->assign('resUtil', $resUtil);
        $s->display('tpl/ConfirmationAjoutAdmin.tpl');
    }

    public function ajoutCateg($s, $app) {
        $s->display('tpl/header.tpl');
        $s->display('tpl/AjoutCateg.tpl');
    }

    public function addCateg($s, $app) {
        $categ = new Categorie();
        $categ->labelcateg = $_POST['categ'];
        $res = $categ->save();
        if ($res == True) {
            $this->displayAllAnnonce($s);
        } else {
            $this->ajoutCateg($s, $app);
        }
    }

    public function ajoutComptePro($s, $app) {
        $url = $app->UrlFor('addPro');
        $s->assign('url', $url);
        $s->display('tpl/header.tpl');
        $s->display('tpl/AjoutPro.tpl');
    }

    public function addComptePro($s, $app) {
        $t = new tools();
        if ($t->getRequestField('email') != null && $t->getRequestField('nom') != null && $t->getRequestField('prenom') != null && $t->getRequestField('phone') != null && $t->getRequestField('adr') != null && $t->getRequestField('cp') != null && $t->getRequestField('city') != null && $t->getRequestField('pass1') != null && $t->getRequestField('pass2') != null) {
            if ($_POST['pass1'] == $_POST['pass2']) {
                $res = Utilisateur::where('mail', '=', $_POST['email'])->get()->toArray();
                if (empty($res)) {
                    $user = new Utilisateur();
                    $user->nom = $_POST['nom'];
                    $user->prenom = $_POST['prenom'];
                    $user->ville = $_POST['city'];
                    $user->codepost = $_POST['cp'];
                    $user->departement = '';
                    $user->mail = $_POST['email'];
                    $user->motdepasse = md5($_POST['pass1']);
                    $user->telephone = $_POST['phone'];
                    $user->admin = 0;
                    $user->pro = 1;
                    $resadd = $user->save();
                    $userid = $user->idutil;
                    if ($resadd == TRUE) {
                        $this->displayAllAnnonce($s);
                    } else {
                        echo 'Problème pour ajouter, recommencer pliiiiiiiiiiiz';
                        $this->ajoutComptePro($s, $app);
                    }
                } else {
                    echo 'Identifiant déjà existant';
                    $this->ajoutComptePro($s, $app);
                }
            } else {
                echo 'Les mots de passe sont différents';
                $this->ajoutComptePro($s, $app);
            }
        } else {
            echo 'Merci de remlir tous les champs bordel !';
            $this->ajoutComptePro($s, $app);
        }
    }

    public function ajoutAnnoncePro($s, $app) {
        $date = date("Y-m-d G:i:s");
        $s->assign('date', $date);
        $categories = array();
        $resCateg = Categorie::all();
        foreach ($resCateg as $res) {
            $t = array();
            $t['idCateg'] = $res->idcateg;
            $t['titreCateg'] = $res->labelcateg;
            $categories[] = $t;
        }
        $s->assign('categories', $categories);
        $s->display('tpl/header.tpl');
        $s->display('tpl/AjoutAnnoncePro.tpl');
    }

    public function addAnnoncePro($s, $app) {
        $s->display('tpl/header.tpl');
        $t = new tools();

        $choix = $_POST['choixAjout'];
        if ($choix == "Ajouter l'annonce") {
            $res = false;
            if ($t->getRequestField('titreAnnonce') != NULL && $t->getRequestField('prixAnnonce') != NULL && $t->getRequestField('selectCateg') != NULL && $t->getRequestField('NomPosteurAnnonce') != NULL &&
                    $t->getRequestField('PrenomPosteurAnnonce') != NULL && $t->getRequestField('villeAnnonce') != NULL && $t->getRequestField('codePostAnnonce') != NULL &&
                    $t->getRequestField('MailPosteurAnnonce') != NULL && $t->getRequestField('TelPosteurAnnonce') != NULL) {
                $annonce = new Annonce();
                $annonce->titreannonce = $_POST['titreAnnonce'];
                $annonce->descriptifannonce = $_POST['descrAnnonce'];
                $annonce->prixannonce = $_POST['prixAnnonce'];
                $annonce->dateannonce = $_POST['dateAnnonce'];
                $annonce->villeannonce = $_POST['villeAnnonce'];
                $annonce->codepostalannonce = $_POST['codePostAnnonce'];
                $annonce->motdepasseannonce = $_SESSION['pass'];
                $annonce->emailannonce = $_POST['MailPosteurAnnonce'];
                $annonce->idutil = $_SESSION['id'];
                $annonce->idcateg = $_POST['selectCateg'];
                $res = $annonce->save();
                $annonceId = $annonce->idannonce;

                $path = "files/";
                $paththumb = "files/thumb/";
                $i = 1;
                $files = array();
                while (isset($_FILES['file' . $i]['tmp_name'])) {
                    $photo = new Photo();
                    if ($_FILES['file' . $i]['tmp_name'] != "") {
                        $extension_upload = strtolower(substr(strrchr($_FILES['file' . $i]['name'], '.'), 1));
                        $files[$i]["nom"] = $_FILES['file' . $i]['name'];
                        $files[$i]["path"] = $path . md5(uniqid(rand(), true)) . "." . $extension_upload;
                        $files[$i]["paththumb"] = $paththumb . md5(uniqid(rand(), true)) . "." . $extension_upload;
                        echo $files[$i]["paththumb"];
                        $photo->nomphoto = $files[$i]["nom"];
                        $photo->cheminfull = $files[$i]["path"];
                        $photo->cheminthum = $files[$i]["paththumb"];
                        $photo->idannonce = $annonceId;
                        $photo->save();
                        while (file_exists($files[$i]["path"])) {
                            $files[$i]["path"] = $path . md5(uniqid(rand(), true)) . "." . $extension_upload;
                        }
                        move_uploaded_file($_FILES['file' . $i]['tmp_name'], $files[$i]["path"]);
                        $t->imagethumb($files[$i]["path"], $files[$i]["paththumb"], 150, FALSE, TRUE);
                    }
                    $i++;
                }
            } else {
                $res = false;
            }
            if ($res) {
                $s->assign('titre', "Votre annonce a correctement été ajoutée");
                $s->assign('message', "Vous pouvez consulter et modifier à tout moment cette dernière en vous rendant sur ");
                $s->assign('annonce', $annonceId);
                $s->display('tpl/Confirmation.tpl');
            } else {
                $s->assign('erreur', "Une erreur est survenue lors de l'ajout de votre annonce, vueillez vérifier que vous avez correctement rempli tous les champs de celle-ci");
                $s->display('tpl/Erreur.tpl');
            }
        } elseif ($choix == "Previsualiser l'annonce") {
            $annonce = array();
            $annonce['titre'] = $_POST['titreAnnonce'];
            $annonce['description'] = $_POST['descrAnnonce'];
            $annonce['prix'] = $_POST['prixAnnonce'];
            $annonce['date'] = $_POST['dateAnnonce'];
            $annonce['ville'] = $_POST['villeAnnonce'];
            $annonce['mail'] = $_POST['MailPosteurAnnonce'];
            $annonce['post'] = $_POST['codePostAnnonce'];
            $annonce['nom'] = $_POST['NomPosteurAnnonce'];
            $annonce['prenom'] = $_POST['PrenomPosteurAnnonce'];
            $annonce['phoneUser'] = $_POST['TelPosteurAnnonce'];

            $s->assign('annonce', $annonce);
            $s->display('tpl/PreviewOneAnnonce.tpl');
        }
        $s->display('tpl/footer.tpl');
    }
    
    public function afficherprofilPro($s,$app){
        $s->display('tpl/header.tpl');
        $s->display('tpl/infoPro.tpl');
        $resAnnonce = Annonce::where('idutil','=',$_SESSION['id'])->get();
        foreach ($resAnnonce as $res) {
            $tab = array();

            /*             * *************Partie de traitement des photos************** */
            $tab['miniature'] = null;
            $photos = Photo::where('idannonce', '=', $res->idannonce)->get();
            foreach ($photos as $photo) {
                $tab['miniature'] = $photo->cheminthum;
                break;
            }
            /*             * ********************************************************* */

            $tab['id'] = $res->idannonce;
            $tab['titre'] = $res->titreannonce;
            $tab['descriptif'] = $res->descriptifannonce;
            $tab['prix'] = $res->prixannonce;
            $tab['post'] = $res->codepostalannonce;
            $tab['ville'] = $res->villeannonce;
            $tab['idUtil'] = $res->idutil;
            $tab['idCateg'] = $res->idcateg;
            $annonces[] = $tab;
        }
        $s->assign('annonces', $annonces);
        $s->display('tpl/allAnnonce.tpl');
        $s->display('tpl/footer.tpl');
    }

}

?>
