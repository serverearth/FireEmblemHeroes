<?php
     
    /* Validates the name and title of a custom hero
     * Returns 0 if the name is not valid
     * Returns 1 if the title is not valid
     * Returns 2 if the name already exists in the data
     * Returns 3 if the title already exists in the data
     * Returns 4 otherwise 
     */
    function validate_add($hero_data, $heroes) {
        $name = $hero_data['name'];
        $title = $hero_data['title'];
        if(!preg_match('/^[a-zA-Z\s]+$/', $name)) {
           return 0; // contains characters other than letters and spaces
        } 
        else if(!preg_match('/^[a-zA-Z\s]+$/', $title)) {
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

    /* Adds a custom hero to the data with the parameter properties and default
     * image roy.jpg
     * Returns an array containing the custom hero 
     */
    function add_hero($hero_data) {
        $add_result = array();
        $file_pointer = fopen('data.txt', 'a');
        if(!$file_pointer) {
            echo 'data.txt file could not be found!';
            exit;
        }
        $hero_string = implode('|', $hero_data);
        $hero_string = "\n".$hero_string;
        $hero_string = preg_replace('/Add/', 'roy.jpg', $hero_string);
        fputs($file_pointer, $hero_string);
        fclose($file_pointer);
        $hero_data = explode('|', $hero_string);
        $hero = new Hero($hero_data[0], $hero_data[1], $hero_data[2], 
            $hero_data[3], $hero_data[4], $hero_data[5], $hero_data[6], 
            $hero_data[7], $hero_data[8], $hero_data[9], $hero_data[10]);
        array_push($add_result, $hero);
        return $add_result;
    }

    $hero_data = array_map('trim', $_POST);
    $error_code = validate_add($hero_data, $heroes);
    if($error_code === 0) { // name is not valid
        $heroes = array();
        echo '<p>Please Enter a Valid Name!</p>';
    }
    elseif($error_code === 1) { // title is not valid
        $heroes = array();
        echo '<p>Please Enter a Valid Title!</p>';
    }
    elseif($error_code === 2) { // name already exists in data
        $heroes = array();
        echo '<p>The Name You Have Entered Already Exists!</p>';
    }
    elseif($error_code === 3) { // title already exists in data
        $heroes = array();
        echo '<p>The Title You Have Entered Already Exists!</p>';
    }
    else { // name and title are valid and do not already exist in data
        $heroes = add_hero($hero_data);
        echo '<p>Here Is Your Custom Hero!</p>';
    }

?>
