<!DOCTYPE html>
<html lang="en">
    <?php
        $kilometerMexico = 1568;
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/gallery.css">
    <link rel="stylesheet" href="../assets/css/headers.css">
    <link rel="stylesheet" href="../assets/css/nav-index.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/footer.css">
    <title>Mexico</title>
</head>

    <?php include('../layouts/navbar.php');?>
        <div id="baner" class="mexico">
            <h1>MEXICO</h1>
        </div>
    </header>

    <main>
        <h2 class="title-country"><?php echo $kilometerMexico?> Kilometers spent in Mexico !</h2>
        <div class="text">
            <h2 id="text1" class="title-country">Quick story</h2>
            <p id="text2" class="text-country">This other country is located near the US border, it’s the fifth largest country in the Americas covering almost 2,000,000 square kilometers. Comprising 31 states plus Mexico city, it is a federation, similar to the united states with their
                different states. It was home of the Aztec and Mayan Empires before first contact with Europeans.</p>
            <h2 id="text3" class="title-country">My personal throughts</h2>
            <p id="text4" class="text-country">By far, one of my best experience, even though some scary moments with the drug dealing problems. The people there are really nice to talk to and welcoming. This country got a nice luminosity and is nice to work with to take photos, so pretty
                good experience for my part !</p>
        </div>
        <div class="container">
            <figure class="container1">
                <img src="/assets/ImagesPages/mexico_resized/image01.jpg" alt="..." onclick="onClick(this)" class="modal-hover-opacity img-gallery" />
            </figure>
            <figure class="container1">
                <img src="/assets/ImagesPages/mexico_resized/image02.jpg" alt="..." onclick="onClick(this)" class="modal-hover-opacity img-gallery" />
            </figure>
            <figure class="container1">
                <img src="/assets/ImagesPages/mexico_resized/image03.jpg" alt="..." onclick="onClick(this)" class="modal-hover-opacity img-gallery" />
            </figure>
            <figure class="container1">
                <img src="/assets/ImagesPages/mexico_resized/image04.jpg" alt="..." onclick="onClick(this)" class="modal-hover-opacity img-gallery" />
            </figure>
            <figure class="container1">
                <img src="/assets/ImagesPages/mexico_resized/image05.jpg" alt="..." onclick="onClick(this)" class="modal-hover-opacity img-gallery" />
            </figure>
            <figure class="container1">
                <img src="/assets/ImagesPages/mexico_resized/image06.jpg" alt="..." onclick="onClick(this)" class="modal-hover-opacity img-gallery" />
            </figure>
            <figure class="container1">
                <img src="/assets/ImagesPages/mexico_resized/image07.jpg" alt="..." onclick="onClick(this)" class="modal-hover-opacity img-gallery" />
            </figure>
            <figure class="container1">
                <img src="/assets/ImagesPages/mexico_resized/image08.jpg" alt="..." onclick="onClick(this)" class="modal-hover-opacity img-gallery" />
            </figure>
            <figure class="container1">
                <img src="/assets/ImagesPages/mexico_resized/image09.jpg" alt="..." onclick="onClick(this)" class="modal-hover-opacity img-gallery" />
            </figure>
            <figure class="container1">
                <img src="/assets/ImagesPages/mexico_resized/image10.jpg" alt="..." onclick="onClick(this)" class="modal-hover-opacity img-gallery" />
            </figure>
            <figure class="container1">
                <img src="/assets/ImagesPages/mexico_resized/image11.jpg" alt="..." onclick="onClick(this)" class="modal-hover-opacity img-gallery" />
            </figure>
            <figure class="container1">
                <img src="/assets/ImagesPages/mexico_resized/image12.jpg" alt="..." onclick="onClick(this)" class="modal-hover-opacity img-gallery" />
            </figure>
            <div id="modal01" class="modal" onclick="this.style.display='none'">
                <span class="close">&times;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <div class="modal-content">
                    <img id="img01">
                </div>
            </div>
        </div>
    </main>
        <?php include('../layouts/footer.php');?>
    <script>
        onClick = (element) => {
            document.getElementById("img01").src = element.src;
            document.getElementById("modal01").style.display = "block";
        }
    </script>
</body>

</html>