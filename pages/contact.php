<?php
    session_start();
    include('../layouts/head.php');
    contact();
 ?>
    <title>Contact</title>
</head>
    <?php 
        include('../layouts/navbar.php');
        deleteMessage();
    ?>
        <div id="baner" class="contact">
            <h1 class="tit_contactde">CONTACT</h1>
            <h1 class="tit_contactmo">CONTACT ME</h1>
        </div>
    </header>

    <!-- FORMULAIRE -->
    <main>
        <div class="formulairediv">
            <form method="POST">
                <input type="text" name="firstname" id="firstname" class="form" placeholder="First name">
                <br>
                <input type="text" name="lastname" id="lastname" class="form" placeholder="Last name">
                <br>
                <input type="email" name="email" id="email" class="form" placeholder="Email">
                <br>
                <textarea name="message" id="message" placeholder="Message"></textarea>
                <br>
                <button class="button-contact" type="submit" name="send">Send</button>
                <br>
                <label for="checkbox"><input type="checkbox" name="checkbox" id="checkbox">Sign up to the newsletter</label>
            </form>
        </div>
    </main>
    <!-- FIN DU FORMULAIRE -->

        <?php include('../layouts/footer.php');?>
</body>




</html>