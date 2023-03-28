<!DOCTYPE html>
<head>
<title>Thank You!</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abel&family=Alfa+Slab+One&family=Anton&display=swap" rel="stylesheet">
</head>

<body>
<style>
    body{
    background: #1E1E24;
}
h1{
    color: #FF9505;
    font-family: 'Alfa Slab One';
    font-size: 50px
}
</style>
<h1> Thank You! </h1>
<p style = "font-size:30px; color: #FF9505;
    font-family: 'Alfa Slab One'">
Received <?php echo $_POST["type"]; ?> message from <u> <?php echo $_POST["complete_name"]; ?> </u> ( <u> <?php echo $_POST["email"]; ?> </u>) <br> <br>

<b> <?php echo $_POST["message"]; ?> </b> <br> <br>

Satisfaction level: <u> <?php echo $_POST["satisfaction_level"]; ?> </u>

</p>
</body>