<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Annonce extends Illuminate\Database\Eloquent\Model {
    
    protected $table = 'annonce';
    protected $primaryKey = 'idAnnonce';
    public $timestamps=false;

    public function tva() {
        return $this->belongsTo( 'TVA', 'id_tva' ) ;
    }
    
    public function marque() {
        return $this->belongsTo( 'Marque', 'id' ) ;
    }
}