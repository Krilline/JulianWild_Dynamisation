<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/maincontact.css">
    <link rel="stylesheet" href="/assets/css/nav-index.css">
    <title>Thank you!</title>
</head>

    <?php include('../layouts/navbar.php');?>
    </header>
    <h3>
        <?php echo "<u>Your firstname :</u> ".$_POST['firstname'].'<br>'; ?>
        <?php echo "<u>Your lastname :</u> ".$_POST['lastname'].'<br>'; ?>
        <?php echo "<u>Your email :</u> ".$_POST['email'].'<br>'; ?>
        <?php echo "<u>Your message :</u> ".$_POST['message'].'<br>'.'<br>'; ?>
        <?php echo "<em>Thank you, your message was successfully sent !</em>"; ?>
    </h3>
</body>

</html>