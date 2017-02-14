<?php

    // reperesents a hero with properties that describe him or her
    class Hero {

        public $name, $title, $attribute, $class, $gender, $hp, $atk, $spd, 
            $def, $res, $image;

        function __construct($name, $title, $attribute, $class, $gender, 
            $hp, $atk, $spd, $def, $res, $image) {
            $this->name = $name;
            $this->title = $title;
            $this->attribute = $attribute;
            $this->class = $class;
            $this->gender = $gender;
            $this->hp = $hp;
            $this->atk = $atk;
            $this->spd = $spd;
            $this->def = $def;
            $this->res = $res;
            $this->image = $image;
        }

    }

    // populates the heroes array with hero objects representing each hero in the data
    function get_heroes_data() {
        $file_pointer = fopen('data.txt', 'r');
        if(!$file_pointer) {
            die('data.txt could not be found!');           
        }
        $heroes = array();
        while(!feof($file_pointer)) {
            $hero_string = fgets($file_pointer);
            $hero_data = explode('|', $hero_string);
            $hero = new Hero($hero_data[0], $hero_data[1], $hero_data[2], 
                $hero_data[3], $hero_data[4], $hero_data[5], $hero_data[6], 
                $hero_data[7], $hero_data[8], $hero_data[9], $hero_data[10]);
            array_push($heroes, $hero);
        }
        fclose($file_pointer);
        return $heroes;
    }

    // generates html to display the heroes in the heroes array
    function display_heroes($heroes) {
        foreach($heroes as $hero) {
            $name = $hero->name;
            $title = $hero->title;
            $attribute = $hero->attribute;
            $class = $hero->class;
            $gender = $hero->gender;
            $hp = $hero->hp;
            $atk = $hero->atk;
            $spd = $hero->spd;
            $def = $hero->def;
            $res = $hero->res;
            $image = 'images/' . $hero->image;

            echo "<div class='hero_container'>
                    <img src='$image'>
                    <div class='hero_profile_container'>
                        <p>Name: $name</p>
                        <p>Title: $title</p>
                        <p>Attribute: $attribute</p>
                        <p>Class: $class</p>
                        <p>Gender: $gender</p>
                        <p>Hp: $hp</p>
                        <p>Atk: $atk</p>
                        <p>Spd: $spd</p>
                        <p>Def: $def</p>
                        <p>Res: $res</p>
                    </div>
                </div>";
        }
    }

    // an array containing Hero objects that represent each hero in the data
    $heroes = get_heroes_data();

?>