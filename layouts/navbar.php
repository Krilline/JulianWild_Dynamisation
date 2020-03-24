<body>
    <header class="bloc-menu">
        <nav class="menu-burger">
            <div class="topbar">
                <input type="checkbox" />
                <span></span>
                <span></span>
                <span></span>
                <ul class="topbar-menu">
                    <li><a href="/index.php" class="photograph">Julian Wild</a></li>
                    <li><a href="/pages/contact.php">Contact Me</a></li>
                    <?php if(isset($_SESSION['alreadyMessaged']) && $_SESSION['alreadyMessaged'] === true){ 
                        ?>
                        <li><a href="/pages/message.php">Your Message</a></li>
                        <?php } else { echo "";}?>
                        <?php 
                        if (isset($_SESSION['alreadyMessaged']) && $_SESSION['alreadyMessaged'] === true){
                    ?>
                        <li>
                            <form method="POST">
                                <button class="button-delete" type="submit" name="delete">Delete</button>
                            </form>
                        </li>
                    <?php } else { echo "";} ?>
                </ul>
            </div>
            <div class="julian">
                <a href="/index.php">JW</a>
            </div>
            <div class="social">
                <a href="https://www.instagram.com/" title="Instagram"><img src="/assets/Logos/instagram.svg" width="25px" height="25px"></a>
                <a href="https://www.pinterest.com/" title="Pinterest"><img src="/assets/Logos/pinterest.svg" width="25px" height="25px"></a>
            </div>
        </nav>
        <nav class="nav-bar">
            <a href="/index.php" class="photograph">Julian Wild</a>
                <a href="/pages/contact.php">Contact Me</a>
            <?php if(isset($_SESSION['alreadyMessaged']) && $_SESSION['alreadyMessaged'] === true){ 
                ?>
            <a href="/pages/message.php">Your Message</a>
            <?php } else { echo "";}?>
            <?php 
                        if (isset($_SESSION['alreadyMessaged']) && $_SESSION['alreadyMessaged'] === true){
                    ?>
                        <a>
                            <form method="POST">
                                <button class="button-delete" type="submit" name="delete">Delete</button>
                            </form>
                        </a>
                    <?php } else { echo "";} ?>
            <div class="social">
                <a href="https://www.instagram.com/" title="Instagram"><img src="/assets/Logos/instagram.svg" width="25px" height="25px"></a>
                <a href="https://www.pinterest.com/" title="Pinterest"><img src="/assets/Logos/pinterest.svg" width="25px" height="25px"></a>
            </div>
        </nav>