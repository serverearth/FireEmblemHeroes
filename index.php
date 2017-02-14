<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='utf-8'>
    <meta name='description' content='Fire Emblem Heroes Catalog'>
    <meta name='keywords' content='Fire, Emblem, Heroes, Catalog'>
    <meta name='author' content='Ryan Yoon'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>FE Heroes</title>
    <link rel='stylesheet' type='text/css' href='styles/styles.css'>
    <script src="https://code.jquery.com/jquery.min.js"></script>
    <script type='text/javascript' src='scripts/main.js'></script>
</head>    

<body>
    <div id='title_container' class='container'>
        <!-- http://fireemblemheroeshack.com/img/logo.png -->
        <a href='index.php'><img src='images/title.jpg'></a>
    </div>

    <div id='add_search_container' class='container'>
        <div id='search_container'>
            <p>Search For Your Favorite Heroes!</p>
            <form action='index.php' method='POST'>
                <div class='input_container'>
                    <input type='text' name='name' placeholder='Name' maxlength='40'>
                    <input type='text' name='title' placeholder='Title' maxlength='40'>
                </div>
                <div class='input_container'>
                    <select name='attribute'>
                        <option value=''>Any Attribute</option>
                        <option value='Red'>Red</option>
                        <option value='Blue'>Blue</option>
                        <option value='Green'>Green</option>
                        <option value='Gray'>Gray</option>
                    </select>
                    <select name='class'>
                        <option value=''>Any Class</option>
                        <option value='Sword'>Sword</option>
                        <option value='Lance'>Lance</option>
                        <option value='Axe'>Axe</option>
                        <option value='Mage'>Mage</option>
                        <option value='Beast'>Beast</option>
                        <option value='Staff'>Staff</option>
                        <option value='Bow'>Bow</option>
                        <option value='Shuriken'>Shuriken</option>
                    </select>
                    <select name='gender'>
                        <option value=''>Any Gender</option>
                        <option value='Male'>Male</option>
                        <option value='Female'>Female</option>
                    </select>
                </div>
                <div class='input_container'>
                    <input type="number" name="hp" min='0' max='99' placeholder='Hp'>
                    <input type="number" name="atk" min='0' max='99' placeholder='Atk'>
                    <input type="number" name="spd" min='0' max='99' placeholder='Spd'>
                    <input type="number" name="def" min='0' max='99' placeholder='Def'>
                    <input type="number" name="res" min='0' max='99' placeholder='Res'>
                </div>
                <div class='input_container'>
                    <input type='submit' name='search' value='Search'>
                </div>
            </form>
        </div>

        <div id='add_container'>
            <p>Add Your Own Custom Hero!</p>
            <form action='index.php' method='POST'>
                <div class='input_container'>
                    <input type='text' name='name' placeholder='Name' maxlength='40' required>
                    <input type='text' name='title' placeholder='Title' maxlength='40' required>
                </div>
                <div class='input_container'>
                    <select name='attribute'>
                        <option value='Red'>Red</option>
                        <option value='Blue'>Blue</option>
                        <option value='Green'>Green</option>
                        <option value='Gray'>Gray</option>
                    </select>
                    <select name='class'>
                        <option value='Sword'>Sword</option>
                        <option value='Lance'>Lance</option>
                        <option value='Axe'>Axe</option>
                        <option value='Mage'>Mage</option>
                        <option value='Beast'>Beast</option>
                        <option value='Staff'>Staff</option>
                        <option value='Bow'>Bow</option>
                        <option value='Shuriken'>Shuriken</option>
                    </select>
                    <select name='gender'>
                        <option value='Male'>Male</option>
                        <option value='Female'>Female</option>
                    </select>
                </div>
                <div class='input_container'>
                    <input type="number" name="hp" min='0' max='99' placeholder='Hp' required>
                    <input type="number" name="atk" min='0' max='99' placeholder='Atk' required>
                    <input type="number" name="spd" min='0' max='99' placeholder='Spd' required>
                    <input type="number" name="def" min='0' max='99' placeholder='Def' required>
                    <input type="number" name="res" min='0' max='99' placeholder='Res' required>
                </div>
                <div class='input_container'>
                    <input type='submit' name='add' value='Add'>
                </div>
            </form>
        </div>
    </div>

    <div id='button_container' class='container'>
        <a href='#heroes_container'>View The Heroes Below!</a>
    </div>

    <!-- https://thenounproject.com/term/up-caret/196766/ -->
    <div id='caret_container'>
        <a href='#title_container'><img src='images/caret.jpg'></a>
    </div>

    <div id='heroes_container' class='container'>
        <?php 
            include 'php/heroes.php';
            if(isset($_POST['search'])) {
                include 'php/search.php';
            }
            elseif(isset($_POST['add'])) {
                include 'php/add.php';
            }
            display_heroes($heroes);
        ?>
    </div>

    <div id='footer'>
        All credits go to https://fireemblem.gamepress.gg/ for providing the images used in this website
    </div>
</body>
</html>