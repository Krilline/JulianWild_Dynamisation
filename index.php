<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Julian Wild</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/main-index.css">
    <link rel="stylesheet" href="assets/css/nav-index.css">
</head>

    <?php include('layouts/navbar.php');?>
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
        <h1 class="featured-galleries">currently featured <strong>galleries</strong></h1>
        <div class="container">
            <div class="container-country brasil">
                <a href="/pages/brasil.php">
                    <img src="/assets/ImagesPages/brazil-resized/image07.jpg" alt="Brasil" class="image">
                    <div class="overlay">
                        <div class="text-country">BRASIL</div>
                </a>
                </div>
            </div>
          
            <div class="container-country chile">
                <a href="/pages/chile.php">
                    <img src="/assets/ImagesPages/chile_resizied/image10.jpg" alt="Chile" class="image">
                    <div class="overlay">
                        <div class="text-country">CHILE</div>
                </a>
                </div>
            </div>

            <div class="container-country">
                <a href="/pages/mexico.php">
                    <img src="/assets/ImagesPages/mexico_resized/image07.jpg" alt="Mexique" class="image">
                    <div class="overlay">
                        <div class="text-country">MEXICO</div>
                </a>
                </div>
            </div>

            <div class="container-country">
                <a href="/pages/peru.php">
                    <img src="/assets/ImagesPages/peru_resized/image11.jpg" alt="Peru" class="image">
                    <div class="overlay">
                        <div class="text-country">PERU</div>
                </a>
                </div>
            </div>
    </main>

    <?php include('layouts/footer.php');?>
</body>

</html>