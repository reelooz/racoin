<?php
namespace racoin\Tools;
class tools {
    function dateEntoFr ($date){
        if ( preg_match( "/([0-9]{4})-([0-9]{1,2})-([0-9]{1,2})/", $date, $regs ) ) {
            $date = "$regs[3]-$regs[2]-$regs[1] ";                           
            return $date;
        } else {
            return;
        }
    }
    // Fonction qui permet d'extraire une heure sous la forme HH:MM:SS d'un dateTime
    public function recuperHeure ($date){
        if ( preg_match( "/([0-9]{2}):([0-9]{2}):([0-9]{2})/", $date, $regs ) ){
            $date = "$regs[1]:$regs[2]:$regs[3] ";
            return $date;
        } else {
            return;
        }
    }
}
