<?php
/*********************************************************************
 * A faire
 * 
 */
class ControllerAnnonce {
      
    static $tab = array(
                    "affiche"=>"afficheAnnonce", 
                    "contact"=>"afficheContact",
                    "ajout"=>"afficheAjout"
                  );
                    
      
    public function afficheAnnonce($id){
        return "afficheAnnonce(".$id.")";
    }
      
    public function afficheContact($id){
        return "afficheContact(".$id.")";
    }
      
    public function afficheAjout(){
        return "afficheAjout()";
    }
      
    public function callAction($nom, $array){
        $retour = "La fonction demandee n'existe pas";
          
        if(array_key_exists($nom, static::$tab)){
            $methode = static::$tab[$nom]."(";
              
            $i = 0;
            foreach($array as $v){
                if($i==0){
                    $methode.=$v;
                }else{
                    $methode.=",".$v;
                }
                $i++;
            }
              
            $methode.=")";
            $retour = $methode;
        }
          
        return $retour;
    }
}
?>
