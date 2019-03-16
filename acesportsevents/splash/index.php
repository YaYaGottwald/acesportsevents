<?php
/**
 * Created by PhpStorm.
 * User: yayagottwald
 * Date: 2/9/19
 * Time: 9:40 PM
 */


// try/catch checks for connection to database //
try
{
    $pdo = new PDO('mysql:host=localhost;dbname=yayawebh_ace_events_db', 'yayawebh_ace_events_user', 'Ace in the Hole');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
    $error = 'Unable to connect to the database server.';
    include '../includes/error.html.php';
    exit();
}


if (($_POST) AND isset($_POST['mySplashFName'])) {
    //echo('this is working');
    // If the if statement is true, save each form field value as a variable. These variable values will be used in the thank you page.
    $mySplashFName = $_POST['mySplashFName'];
    $mySplashLName = $_POST['mySplashLName'];
    $mySAge = $_POST['mySAge'];
    $mySplashShirt = $_POST['mySplashShirt'];
    $myPName = $_POST['myPName'];
    $myPEmail = $_POST['myPEmail'];
    $myPNumber = $_POST['myPNumber'];
    $myPEvent = $_POST['myPEvent'];

    try {
        $sql = 'INSERT INTO splash SET
              mySplashFName = :mySplashFName,
              mySplashLName = :mySplashLName,
              mySAge = :mySAge,
              mySplashShirt = :mySplashShirt,
              myPName = :myPName,
              myPEmail = :myPEmail,
              myPNumber = :myPNumber,
              myPEvent = :myPEvent';
        $s = $pdo->prepare($sql);
        $s->bindValue(':mySplashFName', $mySplashFName);
        $s->bindValue(':mySplashLName', $mySplashLName);
        $s->bindValue(':mySAge', $mySAge);
        $s->bindValue(':mySplashShirt', $mySplashShirt);
        $s->bindValue(':myPName', $myPName);
        $s->bindValue(':myPEmail', $myPEmail);
        $s->bindValue(':myPNumber', $myPNumber);
        $s->bindValue(':myPEvent', $myPEvent);
        $s->execute();
    }

    catch (PDOException $e)
    {
        $error = 'Error submitting form' . $e->getMessage();
        include '../includes/error.html.php';
        exit();
    }

    include 'success.html.php';

} else {

    //echo ('not workin');
    include 'splash.html.php';
}