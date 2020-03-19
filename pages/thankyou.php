<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="/assets/css/maincontact.css">
    <link rel="stylesheet" href="/assets/css/nav-index.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank you!</title>
</head>

    <?php include('../layouts/navbar.php');?>
    </header>
    <h3>
        <?php echo "<u>Your firstname :</u> ".$_GET['firstname'].'<br>'; ?>
        <?php echo "<u>Your lastname :</u> ".$_GET['lastname'].'<br>'; ?>
        <?php echo "<u>Your email :</u> ".$_GET['email'].'<br>'; ?>
        <?php echo "<u>Your message :</u> ".$_GET['message'].'<br>'.'<br>'; ?>
        <?php echo "<em>Thank you, your message was successfully sent !</em>"; ?>
    </h3>
</body>

</html>