<?php 
    session_start();
    include('../layouts/head.php');
?>
    <title>Newsletter</title>
</head>
    <?php 
        include('../layouts/navbar.php');
        deleteMessage();
    ?>
        <div id="baner" class="contact">
            <h1 class="tit_contactde">NEWSLETTER</h1>
            <h1 class="tit_contactmo">NEWLETTER</h1>
        </div>
    </header>
    <h3>
    <?php echo "<u>Your email :</u> ".$_POST['emailfooter'].'<br>'; ?>
    Thank you! You will now receive news from me via Email!
    </h3>
    <?php include('../layouts/footer.php');?>
</body>

</html>