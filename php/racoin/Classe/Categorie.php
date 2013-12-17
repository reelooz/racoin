<?php
namespace \racoin\Classe;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Categorie
 *
 * @author Probook
 */
class Categorie extends \Illuminate\Database\Eloquent\Model {
    
    protected $table = 'categorie';
    protected $primaryKey = 'idcateg';
    public $timestamps=false;

    public function tva() {
        return $this->belongsTo( 'TVA', 'id_tva' ) ;
    }
    
    public function marque() {
        return $this->belongsTo( 'Marque', 'id' ) ;
    }
}
