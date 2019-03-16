<?php
/**
 * Created by PhpStorm.
 * User: yayagottwald
 * Date: 2/18/19
 * Time: 9:24 PM
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <!--smartphone code, do not delete-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta name="author" content="YaYa Gottwald">
    <title>Annual Ace in the Hole Multisport Events Weekend</title>
    <!--google font linked Open Sans Condensed & Poppins - both sans-serif-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Poppins" rel="stylesheet">
    <!--font awesome, the clickable icons, linked-->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="../styles/reset.css" rel="stylesheet" type="text/css">
    <link href="../styles/helper.css" rel="stylesheet" type="text/css">
    <link href="../styles/grid.css" rel="stylesheet" type="text/css">
    <link href="../styles/style.css" rel="stylesheet" type="text/css">

</head>
<body class="bg">

<?php include '../includes/header.inc.html.php'; ?>

<?php include '../includes/nav.inc.html.php'; ?>

<main>
    <!--display:hidden used for "active page" bar <span> in navigation bar -->
    <comment>Event Registration</comment>
    <section class="section group">
        <article class="col span_7_of_12">
            <h2>Registration Form</h2>
            <form method="post" action=" " id="registrationForm">
                <!--<input type="text" name="honeypot" id="honeypot" value="" alt="if you fill this field out then your email will not be sent"/>-->
                <label for="myFirstName">First Name:</label>
                    <input type="text" name="myFirstName" id="myFirstName" required><br>
                <label for="myLastName">Last Name:</label>
                    <input type="text" name="myLastName" id="myLastName" required><br>
                <label for="myREmail">E-mail:</label>
                    <input type="text" name="myREmail" id="myEmail" required><br>
                <label for="optIn">Would you like to hear about future events?</label><br>
                    <input type="radio" name="optIn" value="yes">Yes!
                    <input type="radio" name="optIn" value="no">No thanks.<br>
                <label for="validateAge">Are you over 16? (must be 16+ to participate in main athletic events)</label><br>
                    <input type="radio" name="validateAge" value="yes">Yes
                    <input type="radio" name="validateAge" value="no">No<br>
                <label for="myAge">Year of Birth:</label>
                    <input type="number" name="myAge" id="myAge" placeholder="YYYY" required><br>
                <label for="myGender">Gender Identification:</label><br>
                    <select name="myGender">
                        <option value="Female">Female</option>
                        <option value="Male">Male</option>
                        <option value="Non-Binary">Non-Binary</option>
                    </select><br>
                <label for="myShirt">Tech-shirt Size (universal):</label>
                    <select name="myShirt">
                        <option value="4x">4x</option>
                        <option value="3x">3x</option>
                        <option value="2x">2x</option>
                        <option value="x-large">x-large</option>
                        <option value="large">large</option>
                        <option value="medium">medium</option>
                        <option value="small">small</option>
                        <option value="x-small">x-small</option>
                    </select>
                <fieldset>
                    <label><strong>Emergency Contact Information:</strong></label><br>
                    <label for="myEName">EC Name</label>
                        <input type="text" name="myEName" id="myEName" placeholder="First Last" required><br>
                    <label for="myENumber">EC Phone Number</label>
                        <input type="text" name="myENumber" id="myENUmber" placeholder="(xxx) xxx-xxxxx" required>
                </fieldset>
                <label><strong>Event:</strong></label><br>
                <label for="Saturday">Saturday:</label>
                    <select name="Saturday">
                        <option value=" "></option>
                        <option value="Long Triathlon">Long Course Triathlon</option>
                        <option value="Olympic Triathlon">Olympic Course Triathlon</option>
                        <option value="10k">10K</option>
                        <option value="Half Marathon">Half Marathon</option>
                        <option value="Saturday Volunteer">Volunteer</option>
                    </select><br>
                <label for="Sunday">Sunday:</label>
                    <select name="Sunday">
                        <option value=" "></option>
                        <option value="Sprint Triathlon">Sprint Triathlon</option>
                        <option value="Try-a-Tri">Try a Tri</option>
                        <option value="Sunday Volunteer">Volunteer</option>
                    </select><br>
                <label for="splashOptIn">Would you like to register your minor for the Splash n' Dash?</label><br>
                    <input type="radio" name="splashOptIn" value="yes">Yes
                    <input type="radio" name="splashOptIn" value="no">No<br>
                <input id="mySubmit" type="submit" value="Submit">
            </form>
        </article>
        <aside class="col span_5_of_12">
            <h2>Splash n' Dash Registration</h2>
            <p>If you want to register your minor for the Splash n' Dash: <a href='../splash/'>Click Here!</a></p>
        </aside>
    </section>
</main>

<?php include '../includes/footer.inc.html.php'; ?>

<!--most recent jQuery library DO NOT DELETE-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!--the script folder needs to be linked DO NOT DELETE-->
<script src="../scripts/scripts.js"></script>
</body>
</html>