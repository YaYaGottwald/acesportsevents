<?php
/**
 * Created by PhpStorm.
 * User: yayagottwald
 * Date: 2/1/19
 * Time: 3:07 PM
 */
?>
<!--
//saved for registration and contact page...

try
{
    $pdo = new PDO('mysql:host=localhost;dbname=yayawebh_pht_db', 'yayawebh_pht_user', 'myP4ssw0rd');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
    $error = 'Unable to connect to the database server.';
    //include 'includes/error.html.php';
    exit();
}
-->
<!DOCTYPE html>
<html lang="en">
<head>

    <!--smartphone code, do not delete-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta name="author" content="YaYa Gottwald">
    <title>Annual Ace in the Hole MultiSport Events Weekend</title>
    <!--google font linked Open Sans Condensed & Poppins - both sans-serif-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Poppins" rel="stylesheet">
    <!--font awesome, the clickable icons, linked-->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="../styles/reset.css" rel="stylesheet" type="text/css">
    <link href="../styles/helper.css" rel="stylesheet" type="text/css">
    <link href="../styles/grid.css" rel="stylesheet" type="text/css">
    <link href="../styles/style.css" rel="stylesheet" type="text/css">

</head>

<?php define('BASE_URL', '/CAS222/ace/'); ?>

<?php include 'includes/header.inc.html.php'; ?>

<?php include 'includes/nav.inc.html.php'; ?>

<body>
<main>
    <section>
        <article>
            <h2>H2 Title of Article</h2>
            <p>Paragraph Text or Data List</p>
            <p>Paragraph text Paragraph text Paragraph text Paragraph text Paragraph text</p>
            <dl>
                <dt>Data Title</dt>
                <dd>Data Data</dd>
                <dt>Data Title</dt>
                <dd>Data Data
                    <ul>(Possible) Sub list of information within data list
                        <li>list item</li>
                        <li>list item</li>
                    </ul>
                </dd>
                <dt>Data Title</dt>
                <dd>Data Data</dd>
            </dl>
        </article>
        <aside>
            <h2>H2 Title of Aside</h2>
            <p>Image or Feed or Paragraph Text - sidebar in larger views</p>
            <!--<img src="<?php echo BASE_URL; ?>images/bike_sunrise.jpg" alt="competitive cycling race at sunrise" title="Ace in the Hole MultiSports Events triathlon cycling event">-->
        </aside>
    </section>
    <section>
        <article>
            <h2> H2 Title of Article</h2>
            <p>Optional additional Article - Paragraph Text or Data List</p>

        </article>
        <aside>
            <h2>H2 Title of Aside</h2>
            <p>Optional additional Aside - social media feed or weather feed</p>
        </aside>
    </section>
</main>
</body>
<?php include 'includes/footer.inc.html.php'; ?>
<!--most recent jQuery library DO NOT DELETE-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!--the script folder needs to be linked DO NOT DELETE-->
<script src="../scripts/scripts.js"></script>
</html>