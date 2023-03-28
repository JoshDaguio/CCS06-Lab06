<!DOCTYPE html>
<html>
    <head>
    <title>Feedback Form</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abel&family=Alfa+Slab+One&family=Anton&display=swap" rel="stylesheet">
    </head>

<h1 class ="fontstyle"><center>Feedback Form</center></h1>

<style>
    body{
    background: #1E1E24;
}

.fontstyle{
    color: #FF9505;
    font-family: 'Alfa Slab One';
    font-size: 25px
}
.submit {
    position: absolute;
    left: 30px;
    top: 670px;
    height: 25px;
    width: 100px;
}
</style>
<form method="POST" action="thankyou.php">

<p class = "fontstyle">Name:</p> <input type="text" name="complete_name" class = "n_in" /> <br /> 

<p class = "fontstyle">Email Address:</p> <input type="email" name="email" size="30" required class ="em_in" /> <br />
<p class = "fontstyle">Type:</p>
<select name = "type" >
<option value = "Inquiry"> Inquiry </option>
<option value = "Feedback"> Feedback </option>
<option value = "Other"> Other/s </option>
</select>
<br />

<p class = "fontstyle"> Level of Satisfaction (between 0 to 10): </p><input type="range" name="satisfaction_level" min="0" max="10" step = "1" /><br /><br />
<p class = "fontstyle"> Feedback message:</p> <textarea rows="5" cols="50" name="message" class ="box" > </textarea> <br />
<button class ="submit" >Submit</button>
</form>

</html>