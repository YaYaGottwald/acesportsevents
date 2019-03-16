<?php
/**
 * Created by PhpStorm.
 * User: yayagottwald
 * Date: 2/1/19
 * Time: 3:12 PM
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
    <link href="styles/reset.css" rel="stylesheet" type="text/css">
    <link href="styles/helper.css" rel="stylesheet" type="text/css">
    <link href="styles/grid.css" rel="stylesheet" type="text/css">
    <link href="styles/style.css" rel="stylesheet" type="text/css">

</head>
<body class="bg">

<?php include 'includes/header.inc.html.php'; ?>

<?php include 'includes/nav.inc.html.php'; ?>

<main>
    <!--display:hidden used for "active page" bar <span> in navigation bar -->
    <comment>Home</comment>
    <section class="section group">
        <article class="col span_7_of_12">
            <h2>H2 Title of Article</h2>
            <p>Paragraph Text or Data List</p>
            <p>Paragraph text Paragraph text Paragraph text Paragraph text Paragraph text</p>
            <dl>
                <dt>Data Title</dt>
                <dd>Data Data</dd>
                <dt>Data Title</dt>
                <dd>Data Data
                    <ul>Unordered List of information within Data List
                        <li>List Item</li>
                        <li>List Item</li>
                    </ul>
                </dd>
                <dt>Data Title</dt>
                <dd>Data Data</dd>
            </dl>
            <h2> H2 Title of Article</h2>
            <p>Optional additional Article - Paragraph Text or Data List</p>
        </article>
        <aside class="col span_5_of_12">
            <h2>H2 Title of Aside</h2>
            <p>Image or Feed or Paragraph Text - sidebar in larger views</p>
            <!--<img src="<?php echo BASE_URL; ?>images/bike_sunrise.jpg" alt="competitive cycling race at sunrise" title="Ace in the Hole Multisports Events triathlon cycling event">-->
            <h2>H2 Title of Aside</h2>
            <p>Optional additional Aside - social media feed or weather feed</p>
        </aside>
    </section>
</main>

<?php include 'includes/footer.inc.html.php'; ?>

<!--most recent jQuery library DO NOT DELETE-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!--the script folder needs to be linked DO NOT DELETE-->
<script src="scripts/scripts.js"></script>
</body>
</html>