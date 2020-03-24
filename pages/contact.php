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
        if(empty($_POST['firstname'])){
            $error['firstname'] = "Le prénom est obligatoire";
        }if(empty($_POST['lastname'])){
            $error['lastname'] = "Le nom est obligatoire";
        }if(empty($_POST['email'])){
            $error['email'] = "L'email est obligatoire";
        }if(empty($_POST['message'])){
            $error['message'] = "Le message est obligatoire";
        }
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
                <code style="color: red"><?php if(isset($error['firstname'])) echo $error['firstname'];?></code>
                <br>
                <input type="text" name="lastname" id="lastname" class="form" placeholder="Last name">
                <br>
                <code style="color: red"><?php if(isset($error['lastname'])) echo $error['lastname'];?></code>
                <br>
                <input type="email" name="email" id="email" class="form" placeholder="Email">
                <br>
                <code style="color: red"><?php if(isset($error['email'])) echo $error['email'];?></code>
                <br>
                <textarea name="message" id="message" placeholder="Message"></textarea>
                <br>
                <code style="color: red"><?php if(isset($error['message'])) echo $error['message'];?></code>
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