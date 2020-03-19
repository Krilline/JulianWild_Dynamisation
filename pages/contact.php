<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contact</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/headers.css">
    <link rel="stylesheet" href="/assets/css/maincontact.css">
    <link rel="stylesheet" href="/assets/css/nav-index.css">
    <link rel="stylesheet" href="/assets/css/footer.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <title>Contact</title>
</head>
    <?php include('../layouts/navbar.php');?>
        <div id="baner" class="contact">
            <h1 class="tit_contactde">CONTACT</h1>
            <h1 class="tit_contactmo">CONTACT ME</h1>
        </div>
    </header>

    <!-- FORMULAIRE -->
    <main>
        <div class="formulairediv">
            <form method="GET" action="thankyou.html">
                <input type="text" name="first" id="first" class="form" placeholder="First name" required>
                <br>
                <input type="text" name="last" id="last" class="form" placeholder="Last name" required>
                <br>
                <input type="email" name="email" id="email" class="form" placeholder="Email" required>
                <br>
                <textarea name="message" id="message" placeholder="Message" required></textarea>
                <br>
                <button class="button-contact">Send</button>
                <br>
                <label for="checkbox"><input type="checkbox" name="checkbox" id="checkbox">Sign up to the newsletter</label>
            </form>
        </div>
    </main>
    <!-- FIN DU FORMULAIRE -->
        <?php include('../layouts/footer.php');?>

</body>




</html>