<?php
include('parts/header.php');
?>

<body>
    <section class="overlay">
        <div class="overlay">
            <h1>YAN</h1>
            <span>Events</span>
        </div>
    </section>

    <header>
        <nav class="menu">
            <ul class="navigation">
                <li><a class="js-scrollTo" href="#about">About us</a></li>
                <li><a class="js-scrollTo" href="#services">Our offer</a></li>
                <li>
                    <a href="tel:00250627888899"><i class="fas fa-tty fa-1x"></i></a>
                </li>
                <li><a class="bookus" href="#contact">Booking</a></li>
            </ul>
        </nav>
    </header>

    <div class="background"></div>
    <div class="background2"></div>

    <main>
        <?php
        include('parts/firstview.php');
        include('parts/about-section.php');
        include('parts/services.php');
        include('parts/gallery.php');
        include('parts/contact-section.php');
        ?>


    </main>

    <?php
    include('parts/footer.php');
    ?>

    <script src="https://unpkg.com/colcade@0/colcade.js"></script>
    <script src="js/app.js"></script>
    <script src="js/gallery.js"></script>
    <script src="js/tweenmax.js"></script>

</body>

</html>

<?php
unset($_SESSION['inputs']);
unset($_SESSION['success']);
unset($_SESSION['errors']);
?>