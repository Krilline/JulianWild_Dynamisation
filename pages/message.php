<?php include('../layouts/head.php');?>
    <title>Message</title>
</head>
    <?php include('../layouts/navbar.php');?>
        <div id="baner" class="contact">
            <h1 class="tit_contactde">YOUR MESSAGE</h1>
            <h1 class="tit_contactmo">MESSAGE</h1>
        </div>
    
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