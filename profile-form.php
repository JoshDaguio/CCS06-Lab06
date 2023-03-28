<?php

if (isset($_POST['complete_name'])):
    echo "<hr />";
    echo "<h1>Your Profile</h1>";
    echo "Full name: " . $_POST['complete_name'];
    echo "<hr />";
    // Debug
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
else:
?>

<html>
    <head><link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abel&family=Alfa+Slab+One&family=Anton&display=swap" rel="stylesheet"></head>
<style>
body{
    background: #1E1E24;
}

.header{
    color: #FF9505;
    font-family: 'Alfa Slab One';
    font-size: 50px
}
.fullname {
    position: absolute;
    color: #FF9505;
    font-family: 'Alfa Slab One';
    font-size: 32px;
    left: 50x;
    top: 20px;
}

.bday {
    position: absolute;
    color: #FF9505;
    font-family: 'Alfa Slab One';
    font-size: 32px;
    left: 50x;
    top: 85px;
}

.mail {
    position: absolute;
    color: #FF9505;
    font-family: 'Alfa Slab One';
    font-size: 32px;
    left: 10px;
    top: 150px;
}

.course {
    position: absolute;
    color: #FF9505;
    font-family: 'Alfa Slab One';
    font-size: 32px;
    left: 10px;
    top: 215px;
}

.favc {
    position: absolute;
    color: #FF9505;
    font-family: 'Alfa Slab One';
    font-size: 32px;
    left: 10px;
    top: 280px;
}

.pwr {
    position: absolute;
    color: #FF9505;
    font-family: 'Alfa Slab One';
    font-size: 32px;
    left: 10px;
    top: 345px;
}

.submit{
    position: absolute;
    left: 10px;
    top: 435px;
    height: 20px;
    width: 100px;
}


</style>

<h1 class ="header"><center>Your Data</center></h1>
<form method="POST" action="profile-form.php">
<p class = "fullname"> Name: <input type="text" name="complete_name" class = "n_in" /> </p> <br /> 
<p class = "bday"> Birthdate: <input type="date" name="birthdate" class = "bir_in"/> </p> <br />
<p class = "mail"> Email Address: <input type="email" name="email" size="30" required class ="em_in" /> </p> <br />
<p class = "course"> Program:
<select name="program" class ="pro_in">
<option value="BSCS">B.S. Computer Science</option>
<option value="BSIT">B.S. Information Technology</option>
</p> </select>

<br />

<p class = "favc"> Favorite Color: <input type="color" name="favorite_color" class = "col_in" /> </p> <br />
<p class = "pwr"> Superpower Level: <input type="range" name="superpower_level" min="1" max="1000000" step="5000" class = "pow_in"/> </p> <br />
<button class = "submit" >Submit</button>
</form>

</html>
<?php
endif;
?>