<?php
require 'vendor/autoload.php' ;
require 'php/modele/Article.php';
require 'php/Base/App.php';
use Illuminate\Database\Capsule\Manager as Capsule;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
echo "Master ! Gratin carotte
coucou deathpote thomashjkhjk";  
App::EloConfig();
$resAnnonce = Annonce::all();
var_dump($resAnnonce->toArray());