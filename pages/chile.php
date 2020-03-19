<!DOCTYPE html>
<html lang="en">
    <?php
        $kilometerChile = 455;
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/gallery.css">
    <link rel="stylesheet" href="/assets/css/headers.css">
    <link rel="stylesheet" href="/assets/css/nav-index.css">
    <link rel="stylesheet" href="/assets/css/footer.css">
    <title>Chile</title>
</head>

    <?php include('../layouts/navbar.php');?>
        <div id="baner" class="chile">
            <h1>CHILE</h1>
        </div>
    </header>
    <main>
        <h2 class="title-country"><?php echo $kilometerChile?> Kilometers spent in Chile !</h2>
        <div class="text">
            <h2 id="text1" class="title-country">Quick story</h2>
            <p id="text2" class="text-country">This Latin country is situated next to Bolivia and Peru, as an old Spanish colony, cultural diversity is really present to in this place. It’s an old dictatorship like Cuba and is now one of the most stable economy and social nations in South
                America.
            </p>
            <h2 id="text3" class="title-country">My personal throughts</h2>
            <p id="text4" class="text-country">I never felt safer in any country that I visited before, so for me, one of the best experience I’ve had. Also the people are really nice, a colorful country by his diversity and variety. Taking pictures of it was a real pleasure for a photographer
                like me. I hope i’ll come back one day !</p>
        </div>
        <div class="container">
            <figure class="container1">
                <img src="/assets/ImagesPages/chile_resizied/image01.jpg" alt="..." onclick="onClick(this)" class="modal-hover-opacity img-gallery" />
            </figure>
            <figure class="container1">
                <img src="/assets/ImagesPages/chile_resizied/image02.jpg" alt="..." onclick="onClick(this)" class="modal-hover-opacity img-gallery" />
            </figure>
            <figure class="container1">
                <img src="/assets/ImagesPages/chile_resizied/image03.jpg" alt="..." onclick="onClick(this)" class="modal-hover-opacity img-gallery" />
            </figure>
            <figure class="container1">
                <img src="/assets/ImagesPages/chile_resizied/image04.jpg" alt="..." onclick="onClick(this)" class="modal-hover-opacity img-gallery" />
            </figure>
            <figure class="container1">
                <img src="/assets/ImagesPages/chile_resizied/image05.jpg" alt="..." onclick="onClick(this)" class="modal-hover-opacity img-gallery" />
            </figure>
            <figure class="container1">
                <img src="/assets/ImagesPages/chile_resizied/image06.jpg" alt="..." onclick="onClick(this)" class="modal-hover-opacity img-gallery" />
            </figure>
            <figure class="container1">
                <img src="/assets/ImagesPages/chile_resizied/image07.jpg" alt="..." onclick="onClick(this)" class="modal-hover-opacity img-gallery" />
            </figure>
            <figure class="container1">
                <img src="/assets/ImagesPages/chile_resizied/image08.jpg" alt="..." onclick="onClick(this)" class="modal-hover-opacity img-gallery" />
            </figure>
            <figure class="container1">
                <img src="/assets/ImagesPages/chile_resizied/image09.jpg" alt="..." onclick="onClick(this)" class="modal-hover-opacity img-gallery" />
            </figure>
            <figure class="container1">
                <img src="/assets/ImagesPages/chile_resizied/image10.jpg" alt="..." onclick="onClick(this)" class="modal-hover-opacity img-gallery" />
            </figure>
            <figure class="container1">
                <img src="/assets/ImagesPages/chile_resizied/image11.jpg" alt="..." onclick="onClick(this)" class="modal-hover-opacity img-gallery" />
            </figure>
            <figure class="container1">
                <img src="/assets/ImagesPages/chile_resizied/image12.jpg" alt="..." onclick="onClick(this)" class="modal-hover-opacity img-gallery" />
            </figure>
            <div id="modal01" class="modal" onclick="this.style.display='none'">
                <span class="close">&times;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <div class="modal-content">
                    <img id="img01">
                </div>
    </main>
        <?php include('../layouts/footer.php');?>
    <script>
        function onClick(element) {
            document.getElementById("img01").src = element.src;
            document.getElementById("modal01").style.display = "block";
        }
    </script>
</body>

</html>