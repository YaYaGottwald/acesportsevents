<?php
/**
 * Created by PhpStorm.
 * User: yayagottwald
 * Date: 2/20/19
 * Time: 9:57 AM
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
    <comment>Splash n' Dash Registration</comment>
    <section class="section group">
        <article class="col span_7_of_12">
            <h2>Splash n' Dash Registration Form - Parent/Guardian must complete</h2>
            <form method="post" action=" " id="splashForm">
                <label for="mySplashFName">First Name:</label>
                    <input type="text" name="mySplashFName" id="mySplashFName" required><br>
                <label for="mySplashLName">Last Name:</label>
                    <input type="text" name="mySplashLName" id="mySplashLName" required><br>
                <label for="mySAge">Age (the event is for ages 4-15):</label>
                    <input type="text" name="mySAge" id="mySAge" placeholder="xx" required><br>
                <label for="mySplashShirt">Tech-shirt Size (universal sizing):</label>
                <select name="mySplashShirt">
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
                    <label><strong>Parent/Guardian Contact Information:</strong></label><br>
                    <label for="myPName">Name</label>
                        <input type="text" name="myPName" id="myPName" placeholder="first last" required><br>
                    <label for="myPEmail">E-mail:</label>
                        <input type="text" name="myPEmail" id="myPEmail" required><br>
                    <label for="myPNumber">Phone Number</label>
                        <input type="text" name="myPNumber" id="myPNUmber" placeholder="(xxx) xxx-xxxxx" required><br>
                    <label for="myPEvent">Have you registered for an adult event on Saturday or Sunday?</label><br>
                        <input type="radio" name="myPEvent" value="yes">Yes
                        <input type="radio" name="myPEvent" value="no">No<br>
                </fieldset>
                <input id="mySubmit" type="submit" value="Submit">
            </form>
        </article>
        <aside class="col span_5_of_12">
            <h2>Athlete & Volunteer Registration</h2>
            <p>If you would like to register as an athlete or volunteer for the Annual Ace in the Hole Multisport Weekend,
                please fill out our <a href="../registration/">Registration Form</a>.</p>
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