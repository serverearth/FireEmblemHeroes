<?php
    
    /* Validates the name and title of a search
     * Returns 0 if the name is not valid
     * Returns 1 if the title is not valid
     * Returns 2 if both the name and title are valid
     */
    function validate_search($hero_data) {
        $name = $hero_data['name'];
        $title = $hero_data['title'];
        if(!preg_match('/^[a-zA-Z\s]*$/', $name)) {
           return 0; // contains characters other than letters and spaces
        } 
        else if(!preg_match('/^[a-zA-Z\s]*$/', $title)) {
            return 1; // contains characters other than letters and spaces
        }
        return 2;
    }

    /* Returns true if the two parameter properties are identical 
     * Returns false otherwise 
     */
    function compare_property($property, $hero_property) {
        if($property === '' || $property === $hero_property) {
            return true;
        }
        return false;
    }

    /* Filters the heroes based on the parameter search specifications
     * Returns an array containing the heroes that satisfy the search conditions 
     */
    function search($hero_data, $heroes) {
        $search_results = array();
        $name = $hero_data['name'];
        $title = $hero_data['title'];
        $attribute = $hero_data['attribute'];
        $class = $hero_data['class'];
        $gender = $hero_data['gender'];
        $hp = $hero_data['hp'];
        $atk = $hero_data['atk'];
        $spd = $hero_data['spd'];
        $def = $hero_data['def'];
        $res = $hero_data['res'];
        foreach($heroes as $hero) {
            if(compare_property($name, $hero->name)) {
                if(compare_property($title, $hero->title)) {
                    if(compare_property($attribute, $hero->attribute)) {
                        if(compare_property($class, $hero->class)) {
                            if(compare_property($gender, $hero->gender)) {
                                if(compare_property($hp, $hero->hp)) {
                                    if(compare_property($atk, $hero->atk)) {
                                        if(compare_property($spd, $hero->spd)) {
                                            if(compare_property($def, $hero->def)) {
                                                if(compare_property($res, $hero->res)) {
                                                    array_push($search_results, $hero);
                                                }   
                                            }    
                                        }          
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        return $search_results;
    }

    $hero_data = array_map('trim', $_POST);
    $error_code = validate_search($hero_data);
    if($error_code === 0) { // name is not valid
        $heroes = array();
        echo '<p>Please Enter a Valid Name!</p>';
    }
    elseif($error_code === 1) { // title is not valid
        $heroes = array();
        echo '<p>Please Enter a Valid Title!</p>';
    }
    else { // name and title are valid
        $heroes = search($hero_data, $heroes);
        if(sizeof($heroes) === 0) {
            echo '<p>No Heroes Matched Your Specifications!</p>';
        }
        else {
            echo '<p>Here Are Your Search Results!</p>';
        }
    }

?>