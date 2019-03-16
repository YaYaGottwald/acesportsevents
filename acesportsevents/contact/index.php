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
if (($_POST) AND isset($_POST['myCName'])) {
    //echo ('this is working');
    // If the if statement is true, save each form field value as a variable. These variable values will be used in the thank you page.
    $myCName = $_POST['myCName'];
    $myCEmail = $_POST['myCEmail'];
    $myParticipant = $_POST['myParticipant'];
    $myQuestion = $_POST['myQuestion'];

    // And run the try/catch to attempt to insert data in the database. Modify the INSERT statement to write all the form filed values (except the honeypot) to the database.
    try {
        $sql = 'INSERT INTO contact SET
          myCName = :myCName,
          myCEmail = :myCEmail,
          myParticipant = :myParticipant,
          myQuestion = :myQuestion';
        $s = $pdo->prepare($sql);
        $s->bindValue(':myCName', $myCName);
        $s->bindValue(':myCEmail', $myCEmail);
        $s->bindValue(':myParticipant', $myParticipant);
        $s->bindValue(':myQuestion', $myQuestion);
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
    include 'contact.html.php';
}