<?php
    include('parts/header.php');
    $title = "Yan Events | About us";
?>
<body>
    <header>
        
    </header>
    <!-- <div class="background"></div> -->

    <main>
        <section class="about-image">
            <div class="read-more">
                <a href="index.php">Back to the main page</a>
            </div>
            <img src="img/fond-about.png" class="about" alt="">
        </section>
        <section class="uno">
            <div class="texte">
                <p>Art is a fundamental elementin every society which gives us the opportunity to express ourselves in various forms, to create something new and to touch people.</p>
                <p>We are confronted with different challenges in our societies preventing us from living in peace and that every person has equal opportunities to develop their skills and thrive. Looking at our region of East Africa, people have faced various conflicts and war, different forms of violence, oppression, division and people have been forced to flee their home countries.</p>
            </div>
            <div class="texte-image">
                <img src="img/img12.png" class="none" alt="">
            </div>
        </section>
        <section class="uno">
        <div class="texte-image">
                <img src="img/img11.png" class="" alt="">
            </div>
            <div class="texte">
                <p>Arts can make a way in empowering young people to discover their talents and making use of them to promote social cohesion and peaceful existence in our societies. Art brings people together and can give voices to voiceless and can make the unheard be heard. </p>
                <p>Yan Events would like to promote the empowerment of children and youth in supporting diverse projects and arts events to contribute to the creation of a peaceful and inclusive society. The social enterprise was initiated in October 2018 by Yannick Niyonzima who is the spokesperson and coach of Himbaza Cultural Club and the founder and executive director of ITEKAYouth Organization.</p>
            </div>
        </section>
        <section class="dos">
            <div class="organisation">
                <p><b>Himbaza Cultural Club</b> is performing traditional drums and dance originating from Burundi and is well known in the East Africa Region. </p>
            </div>
            <div class="organisation">
                <p><b>ITEKAYouth Organization</b> is a local non-governmental organization registered in Rwanda with the aim to support young people through educational, socio-economical, arts and sports projects to discover and use their potentialsfor a peaceful society.</p>
            </div>
            <div class="organisation">
                <p><b>Yan Events</b> builds the foundation of and supports Himbaza Cultural Club and ITEKAYouth Organization in initiating and managing various arts events from cultural drumming and dancing performances,to music concerts and sports events.</p>
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

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>  
    <script src="js/app.js"></script>


    <script>
    
    $(document).ready(function() {
    $('.js-scrollTo').on('click', function() { // Au clic sur un élément
        var page = $(this).attr('href'); // Page cible
        var speed = 750; // Durée de l'animation (en ms)
        $('html, body').animate( { scrollTop: $(page).offset().top }, speed ); // Go
        return false;
     });
    });

</script>

</body>
</html>