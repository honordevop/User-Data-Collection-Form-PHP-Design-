<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Form</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <main>
        <h1>SIDE HUSTLE INTENSHIP 2.0</h1>
        <br>
        <b><p>
            Ensure your enter your data correctly because once submitted, you can't edit it.
        </p></b>
        <form action="general.php" method="post">
            <div>
                <label for="fullname">Full Name: </label><input type="text" class="nameinput" name="fullname" >
            </div>
            <div>
                <label for="age">Age: </label><input type="text" class="ageinput" name="age">
            </div>
            <div>
                <label for="occupation">Occupation: </label><input type="text" class="occinput" name="occupation">
            </div>
            <div>
                <label for="maritalstatus">Marital status: </label><input type="text" class="Mstatusinput" name="marital">
            </div>
            <div>
                <label for="skill">Rate your Codding Skill: </label><input type="text" class="skillinput" name="skill">
            </div>
            <input type="submit" name="Submit">
        </form>
    </main>
</body>

</html>

<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<?php

if(isset($_POST['submit']))
$fullname = $_POST ['fullname'];
$age = $_POST ['age'];
$occupation = $_POST ['occupation'];
$marital = $_POST ['marital'];
$skill = $_POST ['skill'];
{
if(is_string($_POST['fullname']) && is_numeric($_POST['age']) && is_string($_POST['occupation']) && is_string($_POST['marital']) && is_string($_POST['skill']))
{
echo "<h2> Fullname: {$_POST['fullname']} <br> Age: {$_POST['age']} <br> Occupation: {$_POST['occupation']} <br> Marital Status: {$_POST['marital']} <br> Skill Level: {$_POST['skill']}</h2>";
} else {
    echo ('Please enter your details above Correctly');
}
}