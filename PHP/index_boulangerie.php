<!DOCTYPE html>

<?php
date_default_timezone_set('Europe/Paris');

    if( date("l") == 'Monday') {
        $jour = "Lundi : 6:30 - 20:00";
    } else if ( date("l") == 'Tuesday') {
        $jour = "Mardi : 6:30 - 15:00";
    } else if ( date("l") == 'Wednesday') {
        $jour = "Mercredi : Fermé";
    } else if ( date("l") == 'Thursday') {
        $jour = "Jeudi : 6:30 - 20:00";
    } else if ( date("l") == 'Friday') {
        $jour = "Vendredi : 6:30 - 20:00";
    } else if ( date("l") == 'Saturday') {
        $jour = "Samedi : 6:30 - 20:00";
    } else if ( date("l") == 'Sunday') {
        $jour = "Dimanche : 6:30 - 20:00";
    }

?>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script type="text/javascript" src="../Js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="../Js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../CSS/bootstrap.min.css">
    <link rel="stylesheet" href="../CSS/boulangerie.css">
    <link rel="stylesheet" href="../CSS/animate.css">

    <title>Boulangerie</title>
</head>
<body>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12 enseigne">
            <h1>Boulangerie Bassignani</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2">
            <nav class="nav flex-column" id="navbar">
                <a class="nav-link active" href="#intro">Introduction</a> <br>
                <a class="nav-link" href="#produits">Produits</a> <br>
                <a class="nav-link disabled" href="#contact">Contacts</a>
            </nav>
        </div>
        <div class="col-md-10" style="padding: 2%;">
            <article>
                <header> <h1><a href="#" id="intro">#</a> Introduction </h1></header><hr>
                <p>
                    <span>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id non ducimus commodi atque illum maiores soluta iure unde saepe, eveniet nesciunt aliquam corrupti numquam natus necessitatibus similique culpa, sint deserunt.</span>
                    <span>Officiis, veritatis. Incidunt quos temporibus necessitatibus et repudiandae harum architecto consequatur id fuga pariatur, vel minus distinctio repellendus, ducimus autem facilis non, veniam deserunt. Eligendi modi rerum cumque quo libero.</span>
                    <span>Nobis iste quisquam labore magnam odio dignissimos recusandae veritatis amet autem aut ipsa inventore doloremque modi voluptates tenetur magni est cum impedit asperiores, perspiciatis totam dolorem minima qui? Earum, totam.</span>
                    <span>Quisquam nemo rerum nihil error commodi nulla quam sunt vitae totam delectus ipsam placeat nostrum cumque, praesentium velit possimus minima consequatur repellat cupiditate, omnis eaque. Aut eveniet ullam quas est?</span>
                    <span>Commodi vel iste adipisci, officiis porro deserunt. Hic quidem velit recusandae tempore commodi quod ipsam sed quisquam beatae porro! Quidem enim rem officiis praesentium! Perferendis quisquam molestias consectetur fugiat velit.</span>
                </p>
            </article> <br>
            <article>
                <header> <h1><a href="#" id="produits">#</a> Produits</h1></header> <hr>
                <p>
                    <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium animi debitis laboriosam cumque! Excepturi obcaecati, beatae, iste tenetur et nemo blanditiis ut odio minus eligendi libero laborum necessitatibus ab porro?</span>
                    <span>Distinctio sit nam perferendis, minus voluptate magni, dolores pariatur possimus expedita fugit ut non quos corporis molestiae voluptatibus cumque et repellendus, quidem assumenda quas quaerat vero! Qui in sint suscipit.</span>
                    <span>Aliquid, porro, nobis beatae exercitationem similique fugiat, veniam error dolores magnam maiores quae aliquam consequuntur dolor itaque ex quisquam rem esse aperiam id sapiente? Totam possimus rerum nobis explicabo magnam.</span>
                    <span>Error qui asperiores quos vitae sapiente earum, eveniet alias dolorum accusamus ullam at ducimus voluptates voluptatibus delectus totam! Blanditiis vitae nulla cupiditate, repudiandae eos molestiae enim at sapiente quisquam repellendus?</span>
                    <span>Eveniet quas sunt deleniti enim repudiandae tempora. Nostrum odio tempora voluptates, eius natus ratione ut deserunt cum veniam doloremque officiis aperiam dignissimos explicabo praesentium sapiente facilis, facere, ipsam quasi fuga!</span>
                </p>
            </article> <br>
            <article>
                <header> <h1><a href="#" id="contact">#</a> Contacts </h1> </header> <hr>
                <div class="row">
                    <div class="col">
                        <div class="card" style="width: 20rem;">
                            <img class="card-img-top" src="../IMG/enseigne.png" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Boulangerie Bassignani</h5>
                                <p class="card-text"><u>Adresse :</u> 6 Rue de Paris, 91100 Corbeil-Essonnes</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"> <u> Téléphone :</u> 01 64 96 28 58</li>
                                <li class="list-group-item"><u>Horaire :</u> <?php echo $jour ?></li>
                            </ul>
                            <!-- <div class="card-body">
                                <a href="#" class="card-link">Card link</a>
                                <a href="#" class="card-link">Another link</a>
                            </div> -->
                        </div>
                    </div>
                    <div class="col">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d697.168229227168!2d2.4668797276682577!3d48.60515263154661!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e5e7304bd142c5%3A0x77011e314fd3a031!2sBoulangerie+Bassignani!5e0!3m2!1sfr!2sfr!4v1544459764518" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </article>



    </div>

</div>

<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>
</body>
</html>