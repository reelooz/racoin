<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Annonce
 *
 * @author Probook
 */
class Annonce extends \Illuminate\Database\Eloquent\Model {
    protected $table = 'article';
    protected $primaryKey = 'id';
    public $timestamps=false;

    /*public function tva(){
 		return $this->belongsTo ('Tva', 'id_tva');*/
}
