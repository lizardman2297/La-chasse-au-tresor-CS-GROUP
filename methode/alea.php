<?php

    function nbAlea(){
        $nb = array();
        for ($i = 1; $i <= 2 ; $i++) { 
            $nbAlea = rand(0,9);
            if(in_array($nbAlea, $nb) != FALSE){
                $nbAlea = rand(0,9);
            }
            $nb[$i] = $nbAlea;
        }
        return $nb;
    }

?>