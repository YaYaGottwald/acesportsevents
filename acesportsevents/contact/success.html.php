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
            <h2>Thank You!</h2>
            <p><strong><?php echo htmlspecialchars($myCName, ENT_QUOTES, 'UTF-8');?></strong>, we appreciate that you contacted us.
                We'll email you back at: <strong><?php echo htmlspecialchars($myCEmail, ENT_QUOTES, 'UTF-8');?></strong>
                as soon as possible.</p>
        </article>
        <aside class="col span_5_of_12">
            <h2>FAQs</h2>
            <p>Be sure to check out our <a href="../faqs/">Frequently Asked Questions</a> page. </p>
            <h2>Athlete & Volunteer Registration</h2>
            <p>If you would like to register as an athlete or volunteer for the Annual Ace in the Hole Multisport Weekend,
                please fill out our <a href="../registration/">Registration Form</a>.</p>
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
