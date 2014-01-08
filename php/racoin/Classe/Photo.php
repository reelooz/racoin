<?php
namespace racoin\Classe;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Photos
 *
 * @author Probook
 */
class Photo extends \Illuminate\Database\Eloquent\Model {
    
    protected $table = 'photo';
    protected $primaryKey = 'idphoto';
    public $timestamps=false;

   public function annonce() {
        return $this->belongsTo( 'Annonce', 'idannonce' ) ;
    }
}
