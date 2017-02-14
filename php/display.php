<?php
    
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

    display_heroes($heroes);
    
?>