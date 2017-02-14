<?php
     
    // validates the name and title of a custom hero
    function validate_add($hero_data) {
        $name = $hero_data['name'];
        $title = $hero_data['title'];
        if(!preg_match('/[a-zA-Z\s]+/', $name)) {
           return 0; // contains characters other than letters and spaces
        } 
        else if(!preg_match('/[a-zA-Z\s]+/', $title)) {
            return 1; // contains characters other than letters and spaces
        }
        else {
            foreach ($heroes as $hero) {
                if($hero->name === $name) {
                    return 2; // name already exists in data
                }
                elseif ($hero->title === $title){
                    return 3; // title already exists in data
                }
            }
        }
        return 4; // valid name and title
    } 

    // adds a custom hero to the data if the name and title are valid
    function add_hero($hero_data) {
        if(validate_add($hero_data) === 4) {
            $file_pointer = fopen('data.txt', 'a');
            if(!$file_pointer) {
                echo('data.txt file could not be found!');
                exit;
            }
            $string = implode('|', $hero_data);
            $string = "\n".$string;
            $string = preg_replace('/Add/', 'roy.jpg', $string);
            fputs($file_pointer, $string);
            $fclose($file_pointer);
            return $string;
        }
        return '';
    }

    $hero_string = add_hero($_POST);
    if($hero_string) !== '') {
        $hero_data = explode('|', $hero_string);
        $hero = new Hero($hero_data[0], $hero_data[1], $hero_data[2], 
            $hero_data[3], $hero_data[4], $hero_data[5], $hero_data[6], 
            $hero_data[7], $hero_data[8], $hero_data[9], $hero_data[10]);
        $heroes = array();
        array_push($heroes, $hero);
    }

?>
