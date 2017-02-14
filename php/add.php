<?php 
		
	function add_hero($hero_data) {
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
	}

    add_hero($_POST);
?>
