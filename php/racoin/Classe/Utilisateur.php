<?php
namespace racoin\Classe;

/**
 * Description of Utilisateur
 *
 * @author Probook
 */
class Utilisateur extends \Illuminate\Database\Eloquent\Model {
    
    protected $table = 'utilisateur';
    protected $primaryKey = 'idutil';
    public $timestamps=false;
    
    
}
