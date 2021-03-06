<!DOCTYPE html>
<html lang="en">
    <?php
        session_start();
        require('controller/controller.php');
    ?> 

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/main-index.css">
    <link rel="stylesheet" href="assets/css/nav-index.css">
    <title>Julian Wild</title>
</head>

    <?php 
        include('layouts/navbar.php');
        deleteMessage();
    ?>
        <div id="slider">
            <figure>
                <img src="/assets/ImagesPages/landing_resized/image01.jpg" alt="...">
                <img src="/assets/ImagesPages/landing_resized/image02.jpg" alt="...">
                <img src="/assets/ImagesPages/landing_resized/image03.jpg" alt="...">
                <img src="/assets/ImagesPages/landing_resized/image04.jpg" alt="...">
                <img src="/assets/ImagesPages/landing_resized/image05.jpg" alt="...">
            </figure>
        </div>
    </header>

    <main>
        <h1 class="featured-galleries">currently featured <strong>galleries</strong> on 
        <?php echo getTodayDate().'<br>'.'<br>'; ?>
        <?php echo getKilometerRandom($randomNumber); ?>
        </h1>
        <div class="container">
            <div class="container-country brasil">
                <img src="/assets/ImagesPages/brazil_resized/image07.jpg" alt="Brasil" class="image">
                <div class="overlay">
                    <div class="text-country">BRASIL</div>
                <p>Visited: <?php echo getRandomDateBrasil(); ?></p>
                </div>
            </div>
          
            <div class="container-country chile">
                <img src="/assets/ImagesPages/chile_resizied/image10.jpg" alt="Chile" class="image">
                <div class="overlay">
                    <div class="text-country">CHILE</div>
                <p>Visited: <?php echo getRandomDateChile(); ?></p>
                </div>
            </div>

            <div class="container-country">
                <img src="/assets/ImagesPages/mexico_resized/image07.jpg" alt="Mexique" class="image">
                <div class="overlay">
                    <div class="text-country">MEXICO</div>
                <p>Visited: <?php echo getRandomDateMexico(); ?></p>
                </div>
            </div>

            <div class="container-country">
                <img src="/assets/ImagesPages/peru_resized/image11.jpg" alt="Peru" class="image">
                <div class="overlay">
                    <div class="text-country">PERU</div>
                <p>Visited: <?php echo getRandomDatePeru(); ?></p>
                </div>
            </div>
    </main>

    <footer>
        <div class="icon-footer">
            <a class="pinterest-footer" href="https://www.pinterest.com/" target="_blank"><img src="/assets/Logos/pinterest.svg" width="25px" height="25px"></a>
            <a class="instagram-footer" href="https://www.instagram.com/" target="_blank"><img src="/assets/Logos/instagram.svg" width="25px" height="25px"></a>
        </div>
        <div class="contact-footer">
            <p class="newsletter-footer">Newsletter</p>
            <form method="POST" action="pages/newsletter.php">
                <input class="email-footer" type="email" name="emailfooter" placeholder="email@contact.com" required>
                <button class="button-footer" name="button">Send</button>
            </form>
        </div>
        <a class="top-footer" href="#top"><img class="arrow-footer" src="data:image/svg+xml;base64,
PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjEiIGlkPSJMYXllcl8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTI7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiI+PGc+PGc+Cgk8Zz4KCQk8Zz4KCQkJPHBhdGggZD0iTTI1NiwwQzExNC44NDQsMCwwLDExNC44MzMsMCwyNTZzMTE0Ljg0NCwyNTYsMjU2LDI1NnMyNTYtMTE0LjgzMywyNTYtMjU2UzM5Ny4xNTYsMCwyNTYsMHogTTI1Niw0OTAuNjY3ICAgICBDMTI2LjYwNCw0OTAuNjY3LDIxLjMzMywzODUuMzk2LDIxLjMzMywyNTZTMTI2LjYwNCwyMS4zMzMsMjU2LDIxLjMzM1M0OTAuNjY3LDEyNi42MDQsNDkwLjY2NywyNTZTMzg1LjM5Niw0OTAuNjY3LDI1Niw0OTAuNjY3ICAgICB6IiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBjbGFzcz0iYWN0aXZlLXBhdGgiIHN0eWxlPSJmaWxsOiNGRkZGRkYiIGRhdGEtb2xkX2NvbG9yPSIjMDAwMDAwIj48L3BhdGg+CgkJCTxwYXRoIGQ9Ik0yNjMuNTQyLDE3My43OTJjLTQuMTY3LTQuMTY3LTEwLjkxNy00LjE2Ny0xNS4wODMsMEwxMzEuMTI1LDI5MS4xMjVjLTQuMTY3LDQuMTY3LTQuMTY3LDEwLjkxNywwLDE1LjA4MyAgICAgYzQuMTY3LDQuMTY3LDEwLjkxNyw0LjE2NywxNS4wODMsMEwyNTYsMTk2LjQxN2wxMDkuNzkyLDEwOS43OTJjMi4wODMsMi4wODMsNC44MTMsMy4xMjUsNy41NDIsMy4xMjUgICAgIGMyLjcyOSwwLDUuNDU4LTEuMDQyLDcuNTQyLTMuMTI1YzQuMTY3LTQuMTY3LDQuMTY3LTEwLjkxNywwLTE1LjA4M0wyNjMuNTQyLDE3My43OTJ6IiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBjbGFzcz0iYWN0aXZlLXBhdGgiIHN0eWxlPSJmaWxsOiNGRkZGRkYiIGRhdGEtb2xkX2NvbG9yPSIjMDAwMDAwIj48L3BhdGg+CgkJPC9nPgoJPC9nPgo8L2c+PC9nPiA8L3N2Zz4="
            /></a>
    </footer>
</body>

</html>