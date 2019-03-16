<?php
/**
 * Created by PhpStorm.
 * User: yayagottwald
 * Date: 2/20/19
 * Time: 9:40 AM
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
    <comment>Success</comment>
    <section class="section group">
        <article class="col span_7_of_12">
            <h2>Congratulations!</h2>
            <p>You successfully registered your minor for the Splash n' Dash!<br>
                <strong>Name:</strong><?php echo htmlspecialchars($mySplashFName, ENT_QUOTES, 'UTF-8') . ' ' . htmlspecialchars($mySplashLName, ENT_QUOTES, 'UTF-8');?><br>
                <strong>Age:</strong><?php echo htmlspecialchars($mySAge, ENT_QUOTES, 'UTF-8');?><br>
                <strong>Shirt Size:</strong><?php echo htmlspecialchars($mySplashShirt, ENT_QUOTES, 'UTF-8');?><br>
            </p>
            <h2>Packet Pickup March </h2>
            <p>All packet pick up will occur at Why Worry Racing, 123 NW Everett, Portland OR.</p>
            <p>Packet pick up hours: Thursday 8-5, Friday 9-noon. No day of event packet pick up.</p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2795.226672585848!2d-122.67420994913232!
            3d45.52564393726033!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5495a0aa74a759fd%3A0x54517259a8f0e3b
            3!2s123+NW+Everett+St%2C+Portland%2C+OR+97209!5e0!3m2!1sen!2sus!4v1551147837723" width=100% height=100% frameborder="0" style="border:0" allowfullscreen></iframe>
        </article>
        <aside class="col span_5_of_12">
            <p><?php echo htmlspecialchars($mySplashFName, ENT_QUOTES, 'UTF-8');?> will have loads of fun!</p>
            <p>Don't forget to check our website, especially for up to the minute day-of event information!</p>
            <h2>Splash n' Dash Registration</h2>
            <p>If you want to register another for the Splash n' Dash: <a href='../splash/'>Click Here!</a></p>

        </aside>
    </section>
</main>
<?php include '../includes/footer.inc.html.php'; ?>

<!--most recent jQuery library DO NOT DELETE-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!--the script folder needs to be linked DO NOT DELETE-->
<script src="../scripts/scripts.js"></script>

