<?php 
    session_start();
    include('../layouts/head.php');
?>
    <title>Message</title>
</head>
    <?php
        include('../layouts/navbar.php');
        deleteMessage();
    ?>
        <div id="baner" class="contact">
            <h1 class="tit_contactde">YOUR MESSAGE</h1>
            <h1 class="tit_contactmo">MESSAGE</h1>
        </div>
    
    </header>
    <h3>
        <?php echo "<u>Your firstname :</u> ".$_SESSION['firstname'].'<br>'; ?>
        <?php echo "<u>Your lastname :</u> ".$_SESSION['lastname'].'<br>'; ?>
        <?php echo "<u>Your email :</u> ".$_SESSION['email'].'<br>'; ?>
        <?php echo "<u>Your message :</u> ".$_SESSION['message'].'<br>'.'<br>'; ?>
        <?php echo "<em>Thank you, your message was successfully sent !</em>"; ?>
    </h3>
    <?php include('../layouts/footer.php');?>
</body>

</html>