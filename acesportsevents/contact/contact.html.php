<?php
/**
 * Created by PhpStorm.
 * User: yayagottwald
 * Date: 2/9/19
 * Time: 9:40 PM
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
    <comment>Contact</comment>
    <section class="section group">
        <article class="col span_7_of_12">
            <h2>Questions? We would love to hear from you!</h2>
            <form method="post" action=" " id="inquiryForm">
                <!--<input type="text" name="honeypot" id="honeypot" value="" alt="if you fill this field out then your email will not be sent"/>-->
                <label for="myCName">Name:</label>
                    <input type="text" name="myCName" id="myCName" placeholder="Name" required><br>
                <label for="myCEmail">E-mail:</label>
                    <input type="text" name="myCEmail" id="myCEmail" placeholder="E-mail" required><br>
                <label for="myParticipant">Contacting as:</label>
                    <select name="myParticipant">
                        <option value="athlete">Athlete</option>
                        <option value="volunteer">Volunteer</option>
                        <option value="interested">Interested Party</option>
                    </select><br>
                <label for="myQuestion">Question:</label><br>
                    <textarea form="inquiryForm" rows="10" name="myQuestion" id="myQuestion"></textarea><br>
                <input id="mySubmit" type="submit" value="Submit">
            </form>
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
