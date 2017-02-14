<?php
    
    function validate_add($hero_data) {
        $name = $hero_data[0];
        $title = $hero_data[1];
        if(!preg_match('/[a-zA-Z ]+/', $name) {
           return 0;
        } 
        else if(!preg_match('/[a-zA-Z]+/', $title)) {
            return 1;
        }
        else {
            foreach ($heroes as $hero) {
                if($hero->name === $name) {
                    return 2;
                }
                elseif ($hero->title === $title){
                    return 3;
                }
            }
        }
        return 4;
    }

?>
