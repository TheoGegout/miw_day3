<?php
// Boilerplate for exercice DAY 3 at university MIW 05
// Code is bad and poor... but just enough for skills students :-) 

// Redirect to script to send email
if (!empty($_POST['email'])) {

    // Sending invitation by email
    header('Location: send_email.php?email=' . $_POST['email']);
    exit;
}

$body_class = "";

// Display delivery status, (tips anti-refreshing) 
if (!empty($_GET['delivery']) and $_GET['delivery'] === "sent") {

    // Sending invitation by email
    // echo "OK c'est envoyé..";
    $body_class = "delivery_sent";
}



?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="containere <?php echo $body_class ?>">
        <form action="#" method="post">
            <div class="container_formulaire">
                <input type="email" name="email" placeholder="Ton email de star..." required />
                <input type="submit" value="" id="submit" />
                <label for="submit">
                    <span>Inscris-toi !</span>
                    <img src="img/vip.svg" alt="Icone vip">
                </label>
            </div>

        </form>
        <div class="envoyer <?php echo $body_class ?>">
            <div>
                <img src="img/mail.svg" alt="Icone mail envoyé">
            </div>
        </div>
    </div>

</body>

</html>