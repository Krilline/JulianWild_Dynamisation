<!DOCTYPE html>
<html lang="en">
    <?php
        $sisters = 80;
        $brothers = 124;
        function totalFamily($sisters, $brothers){
            return ($brothers + $sisters);
        }
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/headers.css">
    <link rel="stylesheet" href="/assets/css/main-biography.css">
    <link rel="stylesheet" href="/assets/css/nav-index.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/footer.css">
    <title>Biography</title>
</head>

    <?php include('../layouts/navbar.php');?>
        <div id="baner" class="bio">
            <div id="julspace"></div>
            <img class="biocircle"
                src="https://fr.chatelaine.com/wp-content/uploads/2011/11/4708f8a94728bd0da8c059f9961f-441x660.jpg"
                alt="">
            <h1 class="tit_biode">BIOGRAPHY</h1>
            <h1 class="tit_biomo">JULIAN WILD</h1>
        </div>

    </header>
    <main>
        <h2 class="skills">A total of <?php echo totalFamily($sisters, $brothers);?> brothers and sisters in my family !</h2>
        <div class="responsive">
            <h2 class="skills">Photographer</h2>
            <p>Hey, like you can see I’m not the typical type of guy you see with a camera!
                I love to travel in America, especially in the South. Born and raised by all my brothers and sisters, a
                tourist left his camera near our stash. Since that day I developed
                a real passion for photography and now I want to share it with people !
            </p>

            <h2 class="skills">Passionate</h2>
            <p> love to travel and discover new places, meet new people, habitat and cities. That was my dream when I
                was younger and now it became reality. It’s a pleasure to have
                this opportunity and to share it with you. Have fun browsing my site, made with all my little heart !
            </p>
            <h2 class="skills">Professional</h2>
            <p>Special thanks to Lola, Emilie, Sten, Aurelien, Aristide Taegyung and Loukman !
            </p>
        </div>
        <div class="ipad">
            <div class="conteneur">
                <img src="/assets/main-biography/Lémurien1.jpg" alt="Lémurien">
                <div class="skills">
                    Photographer
                </div>
                <p class="p1">Hey, like you can see I’m not the typical type of guy you see with a camera! I love to
                    travel in America, especially in the South. Born and raised by all my brothers and sisters, a
                    tourist left his camera near our stash. Since that day
                    I developed a real passion for photography and now I want to share it with people !</p>
            </div>
            <div class="conteneur">
                <img src="/assets/main-biography/Lémurien3.jpg" alt="Lémurien">
                <div class="skills">
                    Passionate
                </div>
                <p class="p2"> I love to travel and discover new places, meet new people, habitat and cities. That was
                    my dream when I was younger and now it became reality. It’s a pleasure to have this opportunity and
                    to share it with you. Have fun browsing my site,
                    made with all my little hear!
                </p>

            </div>
            <div class="conteneur">
                <img src="/assets/main-biography/Lémurien2.jpg" alt="Lémurien">
                <div class="skills">
                    Professional
                </div>
                <p class="p1">
                    </br>
                    </br>
                    Special thanks to Lola, Emilie, Sten, Aurelien, Aristide Taegyung and Loukman !
                </p>
            </div>
        </div>
        <div class="Prez">
            <div class="conteneur">
                <div class="skills">
                    Photographer
                </div>
                <img src="/assets/main-biography/Lémurien1.jpg" alt="Lémurien">
                <p class="p1">Hey, like you can see I’m not the typical type of guy you see with a camera! I love to
                    travel in America, especially in the South. Born and raised by all my brothers and sisters, a
                    tourist left his camera near our stash. Since that day
                    I developed a real passion for photography and now I want to share it with people !</p>
            </div>
            <div class="conteneur">
                <p class="p2"> I love to travel and discover new places, meet new people, habitat and cities. That was
                    my dream when I was younger and now it became reality. It’s a pleasure to have this opportunity and
                    to share it with you.
                </p>
                <img src="/assets/main-biography/Lémurien3.jpg" alt="Lémurien">
                <div class="skills">
                    Passionate
                </div>
            </div>
            <div class="conteneur">
                <div class="skills">
                    Professional
                </div>
                <img src="/assets/main-biography/Lémurien2.jpg" alt="Lémurien">
                <p class="p1">Have fun browsing my site, made with all my little hear!
                </p>
            </div>
        </div>
    </main>

        <?php include('../layouts/footer.php');?>

</body>



</html>