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
if (($_POST) AND isset($_POST['myFirstName'])) {
    //echo ('this is working');
    $myFirstName = $_POST['myFirstName'];
    $myLastName = $_POST['myLastName'];
    $myREmail = $_POST['myREmail'];
    $optIn = $_POST['optIn'];
    $validateAge = $_POST['validateAge'];
    $myAge = $_POST['myAge'];
    $myGender = $_POST['myGender'];
    $myShirt = $_POST['myShirt'];
    $myEName = $_POST['myEName'];
    $myENumber = $_POST['myENumber'];
    $splashOptIn = $_POST['splashOptIn'];
    $Saturday = $_POST['Saturday'];
    $Sunday = $_POST['Sunday'];

    if (($Saturday == ' ') && ($Sunday == ' ') ) {
        $noEvent = true;
        include 'validate-form.html.php';
        exit();
    }

    if ($validateAge == 'no') {
        include 'validate-age.html.php';
        exit();
    }

    // And run the try/catch to attempt to insert data in the database. Modify the INSERT statement to write all the form filed values (except the honeypot) to the database.
    try {
        $sql = 'INSERT INTO registration SET
          myFirstName = :myFirstName,
          myLastName = :myLastName,
          myREmail = :myREmail,
          optIn = :optIn,
          validateAge = :validateAge,
          myAge = :myAge,
          myGender = :myGender,
          myShirt = :myShirt,
          myEName = :myEName,
          myENUmber = :myENumber,
          Saturday = :Saturday,
          Sunday = :Sunday,
          splashOptIn = :splashOptIn';
        $s = $pdo->prepare($sql);
        $s->bindValue(':myFirstName', $myFirstName);
        $s->bindValue(':myLastName', $myLastName);
        $s->bindValue(':myREmail', $myREmail);
        $s->bindValue(':optIn', $optIn);
        $s->bindValue(':validateAge', $validateAge);
        $s->bindValue(':myAge', $myAge);
        $s->bindValue(':myGender', $myGender);
        $s->bindValue(':myShirt', $myShirt);
        $s->bindValue(':myEName', $myEName);
        $s->bindValue(':myENumber', $myENumber);
        $s->bindValue(':Saturday', $Saturday);
        $s->bindValue(':Sunday', $Sunday);
        $s->bindValue(':splashOptIn', $splashOptIn);
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
    include 'registration.html.php';
}
