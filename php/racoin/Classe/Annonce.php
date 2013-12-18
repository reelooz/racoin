<?php
namespace racoin\Classe;
class Annonce extends \Illuminate\Database\Eloquent\Model {
    protected $table = 'annonce';
    protected $primaryKey = 'idannonce';
    public $timestamps=false;
    
    public function categorie() {
        return $this->belongsTo( 'racoin\Classe\Categorie', 'idcateg' ) ;
    }
    public function utilisateur() {
        return $this->belongsTo( 'racoin\Classe\Utilisateur', 'idutil' ) ;
    }
    
    
   
}
