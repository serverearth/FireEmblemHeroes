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
</head>    

<body>
    <div id='title_container' class='container'>
        <!-- http://fireemblemheroeshack.com/img/logo.png -->
        <img src="images/title.jpg">
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
                        <option value='any'>Any Attribute</option>
                        <option value='red'>Red</option>
                        <option value='blue'>Blue</option>
                        <option value='green'>Green</option>
                        <option value='gray'>Gray</option>
                    </select>
                    <select name='class'>
                        <option value='any'>Any Class</option>
                        <option value='sword'>Sword</option>
                        <option value='lance'>Lance</option>
                        <option value='axe'>Axe</option>
                        <option value='mage'>Mage</option>
                        <option value='beast'>Beast</option>
                        <option value='staff'>Staff</option>
                        <option value='bow'>Bow</option>
                        <option value='shuriken'>Shuriken</option>
                    </select>
                    <select name='gender'>
                        <option value='any'>Any Gender</option>
                        <option value='male'>Male</option>
                        <option value='female'>Female</option>
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
                        <option value='red'>Red</option>
                        <option value='blue'>Blue</option>
                        <option value='green'>Green</option>
                        <option value='gray'>Gray</option>
                    </select>
                    <select name='class'>
                        <option value='sword'>Sword</option>
                        <option value='lance'>Lance</option>
                        <option value='axe'>Axe</option>
                        <option value='mage'>Mage</option>
                        <option value='beast'>Beast</option>
                        <option value='staff'>Staff</option>
                        <option value='bow'>Bow</option>
                        <option value='shuriken'>Shuriken</option>
                    </select>
                    <select name='gender'>
                        <option value='male'>Male</option>
                        <option value='female'>Female</option>
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
        <button type='button'>View The Heroes Below!</button>
    </div>

    <div id='heroes_container' class='container'>
        
    </div>
</body>
</html>