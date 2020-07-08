<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.typekit.net/ywq3gmf.css">
    <link rel="stylesheet" href="style/style.css">
    <title>Yan Events | Light up your events</title>
</head>

<body>
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
        <section class="firstvieuw">
            <div class="logo">
                <img src="img/logo.png" alt="logo">
            </div>
            <div class="phone">
                <i class="fas fa-tty fa-2x"></i>
                <a href="tel:00250627888899">00250 - 6 27 88 88 99</a>
            </div>
            <div class="animation">
                <img src="img/anim1.png" alt="">
            </div>
            <div class="title">
                <h1>Lightup<span>your events</span></h1>
                <img src="img/light.svg" alt="">
            </div>
            <div class="liste-services">
                <h2>What we offer</h2>
                <div class="liste-container">
                    <div class="list1">Drums</div>
                    <div class="list2">Dances</div>
                    <div class="list3">Sound</div>
                    <div class="list4">Bands</div>
                    <div class="list5">Handcrafts</div>
                    <div class="list6">Pottery</div>
                </div>
            </div>
            <div class="reseaux">
                <a href="https://www.facebook.com/Himbaza-Club-1750416818584080/" target="blank"><i class="fab fa-facebook-f fa-3x"></i></a>
                <a href="https://www.instagram.com/himbazaclub/?hl=fr" target="blank"> <i class="fab fa-instagram fa-3x"></i></a>
                <a href="https://www.facebook.com/Himbaza-Club-1750416818584080/" target="blank"><i class="fab fa-twitter fa-3x"></i></a>
            </div>
            <div class="book">
                <button>Book us</button>
            </div>
            <div class="address">
                <p><b>Adress :</b><br>
                    KG 20 St, Kimironko<br>
                    Kigali - Rwanda</p>
            </div>
        </section>

        <section class="about" id="about">
            <h2>When art goes social</h2>
            <p class="about">Yan Events pursues the mission to promote peace, humanity and
                unity through arts. Organizing and managing diverse cultural arts performances,
                music concerts, arts exhibitions, markets and sports events in collaboration
                with various artists shall supportsocial projects and organizations including
                ITEKA Youth Organization with the aim to empower young
                people to use their skills for a positive transformation of society.</p>
            <div class="read-more">
                <a href="about.php">Read more</a>
            </div>
            <img src="img/fond-about.png" class="about" alt="">
        </section>
        <section class="services" id="services">
            <h2>Our services</h2>
            <div class="container-services">
                <div class="service-content">
                    <h3>Event Planning</h3>
                    <span></span>
                    <div class="description">
                        <p>We organize, participate and offers various services for different events like festivals, Concert, Weddings, Conferences, Inaugurations, Anniversaries, Crusades, and more.
                        </p>
                    </div>
                </div>
                <div class="service-content">
                    <h3>Entertainment</h3>
                    <span></span>
                    <div class="description">
                        <p>We provide performing arts such as Burundian drums, Traditional dances, Poetry, Musical band (African style), Sound system, MCs and Traditional dresses.
                        </p>
                    </div>
                </div>
                <div class="service-content">
                    <h3>Handcrafting</h3>
                    <span></span>
                    <div class="description">
                        <p>Different artistic and cultural goods are found at Yan Events such as Canvas, Sculpture, handcraft and poetry products. </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="gallery">
            <div class="gallery-container">
                <div class="img">
                    <img src="img/img7.jpeg" />
                </div>
                <div class="img">
                    <img src="img/img2.jpeg" />
                </div>
                <div class="img">
                    <img src="img/img1.jpeg" />
                </div>
                <div class="img">
                    <img src="img/img4.jpeg" />
                </div>
                <div class="img">
                    <img src="img/img10.jpg" />
                </div>
                <div class="img">
                    <img src="img/img3.jpeg" />
                </div>
                <div class="img">
                    <img src="img/img9.jpeg" />
                </div>
                <div class="img">
                    <img src="img/img15.jpeg" />
                </div>
                <div class="img">
                    <img src="img/img14.jpg" />
                </div>
                <div class="img">
                    <img src="img/img17.jpeg" />
                </div>
                <div class="img">
                    <img src="img/img16.jpeg" />
                </div>
            </div>
        </section>

        <section class="contact" id="contact">
            <h2>Contact us</h2>
            <div class="form">
                <?php if (array_key_exists('errors', $_SESSION)) : ?>
                    <div class="alert alert-danger">
                        <?= implode('<br>', $_SESSION['errors']); ?>
                    </div>
                <?php unset($_SESSION['errors']);
                endif; ?>

                <?php if (array_key_exists('success', $_SESSION)) : ?>
                    <div class="alert alert-success">
                        Votre mail nous est bien parvenu !
                    </div>
                <?php unset($_SESSION['errors']);
                endif; ?>

                <form action="contact-form.php" class="contact-form" method="POST">
                    <div class="block">
                        <div class="inputBx">
                            <input type="text" name="name" placeholder="Full name" value="<?= isset($_SESSION['inputs']['name']) ? $_SESSION['inputs']['name'] : ''; ?>">
                        </div>
                        <div class="inputBx">
                            <input type="email" name="email" placeholder="Email Address" value="<?= isset($_SESSION['inputs']['email']) ? $_SESSION['inputs']['email'] : ''; ?>">
                        </div>
                        <div class="inputBx">
                            <input type="number" name="phone" placeholder="Mobile No" value="<?= isset($_SESSION['inputs']['phone']) ? $_SESSION['inputs']['phone'] : ''; ?>">
                        </div>
                        <div class="inputBx">
                            <input type="text" name="subject" placeholder="Subject" value="<?= isset($_SESSION['inputs']['subject']) ? $_SESSION['inputs']['subject'] : ''; ?>">
                        </div>
                    </div>
                    <div class="block">
                        <div class="inputBx">
                            <textarea name="message" placeholder="Write your message..." value="<?= isset($_SESSION['inputs']['message']) ? $_SESSION['inputs']['message'] : ''; ?>"></textarea>
                        </div>
                        <div class="inputBx">
                            <button type="submit" name="submit">Send</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="contact-fond">

            </div>
        </section>
    </main>
    <footer>
        <div class="blanc">
            <img src="img/logo-blanc.png" alt="">
        </div>
        <div class="designer">
            <p>Designed by <span>Yves Ininahazwe</span></p>
        </div>
    </footer>

    <script src="https://unpkg.com/colcade@0/colcade.js"></script>
    <script src="js/app.js"></script>
    <script src="js/gallery.js"></script>

</body>

</html>

<?php
unset($_SESSION['inputs']);
unset($_SESSION['success']);
unset($_SESSION['errors']);
?>