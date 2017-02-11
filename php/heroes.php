<?php
    
    class Hero {
        public $name;
        public $title;
        public $attribute;
        public $class;
        public $gender;
        public $hp;
        public $atk;
        public $spd;
        public $def;
        public $res;
        public $image

        function__construct($name, $title, $attribute, $class, $gender, $hp, $atk, $spd, $def, $res, $image) {
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

    function display_heroes() {
        // $file_pointer = fopen('data.txt', 'r');
        // if(!$file_pointer) {
        //     echo('data.txt file could not be found!');
        //     exit;           
        // }
        // $heroes = array();
        // while(!feor($file_pointer)) {
        //     $line = fgets($file_pointer);
        //     $data = explode('|', $line);
        //     echo($data[0]);
        // }
        // fclose($file_pointer);
        echo 'hello';
    }

    display_heroes();
?>