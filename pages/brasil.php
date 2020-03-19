<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/ImagesPages/css/style.css">
    <link rel="stylesheet" href="/assets/ImagesPages/css/gallery.css">
    <link rel="stylesheet" href="/assets/ImagesPages/css/headers.css">
    <link rel="stylesheet" href="/assets/ImagesPages/css/nav-index.css">
    <link rel="stylesheet" href="/assets/ImagesPages/css/footer.css">
    <title>Brasil</title>
</head>

<body>
    <header>
        <nav class="menu-burger">
            <div class="topbar">
                <input type="checkbox" />
                <span></span>
                <span></span>
                <span></span>
                <ul class="topbar-menu">
                    <li><a href="index.html" class="photograph">Julian Wild</a></li>
                    <li class="country"><a href="#">Country ></a>
                        <ul>
                            <li><a href="brasil.html">Brasil</a></li>
                            <hr>
                            <li><a href="chile.html">Chile</a></li>
                            <hr>
                            <li><a href="mexico.html">Mexico</a></li>
                            <hr>
                            <li><a href="peru.html">Peru</a></li>
                        </ul>
                    </li>
                    <li><a href="biography.html">Biography</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>
            <div class="julian">
                <a href="index.html">JW</a>
            </div>
            <div class="social">
                <a href="#" title="Instagram"><img src="Logos/instagram.svg" width="25px" height="25px"></a>
                <a href="#" title="Pinterest"><img src="Logos/pinterest.svg" width="25px" height="25px"></a>
            </div>
        </nav>
        <nav class="nav-bar">
            <a href="index.html" class="photograph">Julian Wild</a>
            <div class="scrol">
                <li class="country"><a href="#">Country</a>
                    <ul>
                        <li><a href="brasil.html">Brasil</a></li>
                        <hr>
                        <li><a href="chile.html">Chile</a></li>
                        <hr>
                        <li><a href="mexico.html">Mexico</a></li>
                        <hr>
                        <li><a href="peru.html">Peru</a></li>
                    </ul>
                </li>
            </div>
            <a href="biography.html">Biography</a>
            <a href="contact.html">Contact</a>
            <div class="social">
                <a href="#" title="Instagram"><img src="Logos/instagram.svg" width="25px" height="25px"></a>
                <a href="#" title="Pinterest"><img src="Logos/pinterest.svg" width="25px" height="25px"></a>
            </div>
        </nav>
        <div id="baner" class="brasil">
            <h1>BRASIL</h1>
        </div>
    </header>
    <main>
        <div class="text">
            <h2 id="text1" class="title-country">Quick story</h2>
            <p id="text2" class="text-country">An old Portuguese colony in the middle of South America, located next to Venezuela and Colombia, Brazil is considered an advanced emerging economy. Well known for his famous carnival at Rio, it got a lot of cultural diversity, mixing a lot
                of ethnicity together in one place.</p>
            <h2 id="text3" class="title-country">My personal throughts</h2>
            <p id="text4" class="text-country">As a photographer it was a real opportunity of capturing colorful images. I had the chance to assist at Rio carnival so I took a lot of pictures of that event. Like I said for the other Latin countries, the people there are extremely nice
                with strangers and love to be photographed.</p>
        </div>
        <div class="container">
            <figure class="container1">
                <img src="ImagesPages/brazil-resized/image01.jpg" alt="beautiful parrot yellow red and blue" onclick="onClick(this)" class="modal-hover-opacity img-gallery" />
            </figure>
            <figure class="container1">
                <img src="ImagesPages/brazil-resized/image02.jpg" alt="a beach at the sunset" onclick="onClick(this)" class="modal-hover-opacity img-gallery" />
            </figure>
            <figure class="container1">
                <img src="ImagesPages/brazil-resized/image03.jpg" alt="ancient street" onclick="onClick(this)" class="modal-hover-opacity img-gallery" />
            </figure>
            <figure class="container1">
                <img src="ImagesPages/brazil-resized/image04.jpg" alt="ancient street with colored houses" onclick="onClick(this)" class="modal-hover-opacity img-gallery" />
            </figure>
            <figure class="container1">
                <img src="ImagesPages/brazil-resized/image05.jpg" alt="green lizard" onclick="onClick(this)" class="modal-hover-opacity img-gallery" />
            </figure>
            <figure class="container1">
                <img src="ImagesPages/brazil-resized/image06.jpg" alt="three boys who are playing foorball" onclick="onClick(this)" class="modal-hover-opacity img-gallery" />
            </figure>
            <figure class="container1">
                <img src="ImagesPages/brazil-resized/image07.jpg" alt="beach with orange sky" onclick="onClick(this)" class="modal-hover-opacity img-gallery" />
            </figure>
            <figure class="container1">
                <img src="ImagesPages/brazil-resized/image08.jpg" alt="green parrot into a tree" onclick="onClick(this)" class="modal-hover-opacity img-gallery" />
            </figure>
            <figure class="container1">
                <img src="ImagesPages/brazil-resized/image09.jpg" alt="parrot blue and yellow" onclick="onClick(this)" class="modal-hover-opacity img-gallery" />
            </figure>
            <figure class="container1">
                <img src="ImagesPages/brazil-resized/image10.jpg" alt="Corcovado with the statue" onclick="onClick(this)" class="modal-hover-opacity img-gallery" />
            </figure>
            <figure class="container1">
                <img src="ImagesPages/brazil-resized/image11.jpg" alt="Corcovado with the sea" onclick="onClick(this)" class="modal-hover-opacity img-gallery" />
            </figure>
            <figure class="container1">
                <img src="ImagesPages/brazil-resized/image12.jpg" alt="dancer to the Rio's carnival" onclick="onClick(this)" class="modal-hover-opacity img-gallery" />
            </figure>
            <div id="modal01" class="modal" onclick="this.style.display='none'">
                <span class="close">&times;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <div class="modal-content">
                    <img id="img01">
                </div>
            </div>
    </main>
    <footer>
        <div class="icon-footer">
            <a class="pinterest-footer" href="https://www.pinterest.com.au/" target="_blank"><img src="Logos/pinterest.svg" width="25px" height="25px"></a>
            <a class="instagram-footer" href="https://www.instagram.com/" target="_blank"><img src="Logos/instagram.svg" width="25px" height="25px"></a>
        </div>
        <div class="contact-footer">
            <p class="newsletter-footer">Newsletter</p>
            <input class="email-footer" type="text" name="email" value="" placeholder="email@contact.com">
            <a href="newsletter.html" target="_blank"><button class="button-footer" type="button" name="button">Send</button></a>
        </div>
        <a class="top-footer" href="#top"><img class="arrow-footer" src="data:image/svg+xml;base64,
  PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjEiIGlkPSJMYXllcl8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTI7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiI+PGc+PGc+Cgk8Zz4KCQk8Zz4KCQkJPHBhdGggZD0iTTI1NiwwQzExNC44NDQsMCwwLDExNC44MzMsMCwyNTZzMTE0Ljg0NCwyNTYsMjU2LDI1NnMyNTYtMTE0LjgzMywyNTYtMjU2UzM5Ny4xNTYsMCwyNTYsMHogTTI1Niw0OTAuNjY3ICAgICBDMTI2LjYwNCw0OTAuNjY3LDIxLjMzMywzODUuMzk2LDIxLjMzMywyNTZTMTI2LjYwNCwyMS4zMzMsMjU2LDIxLjMzM1M0OTAuNjY3LDEyNi42MDQsNDkwLjY2NywyNTZTMzg1LjM5Niw0OTAuNjY3LDI1Niw0OTAuNjY3ICAgICB6IiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBjbGFzcz0iYWN0aXZlLXBhdGgiIHN0eWxlPSJmaWxsOiNGRkZGRkYiIGRhdGEtb2xkX2NvbG9yPSIjMDAwMDAwIj48L3BhdGg+CgkJCTxwYXRoIGQ9Ik0yNjMuNTQyLDE3My43OTJjLTQuMTY3LTQuMTY3LTEwLjkxNy00LjE2Ny0xNS4wODMsMEwxMzEuMTI1LDI5MS4xMjVjLTQuMTY3LDQuMTY3LTQuMTY3LDEwLjkxNywwLDE1LjA4MyAgICAgYzQuMTY3LDQuMTY3LDEwLjkxNyw0LjE2NywxNS4wODMsMEwyNTYsMTk2LjQxN2wxMDkuNzkyLDEwOS43OTJjMi4wODMsMi4wODMsNC44MTMsMy4xMjUsNy41NDIsMy4xMjUgICAgIGMyLjcyOSwwLDUuNDU4LTEuMDQyLDcuNTQyLTMuMTI1YzQuMTY3LTQuMTY3LDQuMTY3LTEwLjkxNywwLTE1LjA4M0wyNjMuNTQyLDE3My43OTJ6IiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBjbGFzcz0iYWN0aXZlLXBhdGgiIHN0eWxlPSJmaWxsOiNGRkZGRkYiIGRhdGEtb2xkX2NvbG9yPSIjMDAwMDAwIj48L3BhdGg+CgkJPC9nPgoJPC9nPgo8L2c+PC9nPiA8L3N2Zz4="
            /></a>
    </footer>
    <script>
        function onClick(element) {
            document.getElementById("img01").src = element.src;
            document.getElementById("modal01").style.display = "block";
        }
    </script>
</body>

</html>