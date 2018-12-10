<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
                <a class="nav-link active" href="#">Active</a>
                <a class="nav-link" href="#">Link</a>
                <a class="nav-link" href="#">Link</a>
                <a class="nav-link disabled" href="#">Disabled</a>
            </nav>
        </div>
        <div class="col-md-10" style="padding: 2%;">
            <article>
                <header> <h1><a href="#">#</a> Introduction </h1></header><hr>
                <p>
                    <span>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id non ducimus commodi atque illum maiores soluta iure unde saepe, eveniet nesciunt aliquam corrupti numquam natus necessitatibus similique culpa, sint deserunt.</span>
                    <span>Officiis, veritatis. Incidunt quos temporibus necessitatibus et repudiandae harum architecto consequatur id fuga pariatur, vel minus distinctio repellendus, ducimus autem facilis non, veniam deserunt. Eligendi modi rerum cumque quo libero.</span>
                    <span>Nobis iste quisquam labore magnam odio dignissimos recusandae veritatis amet autem aut ipsa inventore doloremque modi voluptates tenetur magni est cum impedit asperiores, perspiciatis totam dolorem minima qui? Earum, totam.</span>
                    <span>Quisquam nemo rerum nihil error commodi nulla quam sunt vitae totam delectus ipsam placeat nostrum cumque, praesentium velit possimus minima consequatur repellat cupiditate, omnis eaque. Aut eveniet ullam quas est?</span>
                    <span>Commodi vel iste adipisci, officiis porro deserunt. Hic quidem velit recusandae tempore commodi quod ipsam sed quisquam beatae porro! Quidem enim rem officiis praesentium! Perferendis quisquam molestias consectetur fugiat velit.</span>
                </p>
            </article>
            <article>
                <header><h1>Produits</h1></header> <hr>
                <p>
                    <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium animi debitis laboriosam cumque! Excepturi obcaecati, beatae, iste tenetur et nemo blanditiis ut odio minus eligendi libero laborum necessitatibus ab porro?</span>
                    <span>Distinctio sit nam perferendis, minus voluptate magni, dolores pariatur possimus expedita fugit ut non quos corporis molestiae voluptatibus cumque et repellendus, quidem assumenda quas quaerat vero! Qui in sint suscipit.</span>
                    <span>Aliquid, porro, nobis beatae exercitationem similique fugiat, veniam error dolores magnam maiores quae aliquam consequuntur dolor itaque ex quisquam rem esse aperiam id sapiente? Totam possimus rerum nobis explicabo magnam.</span>
                    <span>Error qui asperiores quos vitae sapiente earum, eveniet alias dolorum accusamus ullam at ducimus voluptates voluptatibus delectus totam! Blanditiis vitae nulla cupiditate, repudiandae eos molestiae enim at sapiente quisquam repellendus?</span>
                    <span>Eveniet quas sunt deleniti enim repudiandae tempora. Nostrum odio tempora voluptates, eius natus ratione ut deserunt cum veniam doloremque officiis aperiam dignissimos explicabo praesentium sapiente facilis, facere, ipsam quasi fuga!</span>
                </p>
            </article>
            <article>
                <header> <h1>Contacts </h1> </header> <hr>
                <p>
                    <span>Ipsum facilis laudantium fuga odit cupiditate libero impedit mollitia totam vero dolores ipsa recusandae reiciendis similique ratione nisi, corporis nam repudiandae voluptates sapiente. Quos beatae nemo dolorum, praesentium iste id!</span>
                    <span>Alias tempora quasi dolorum fugiat repellendus modi consequatur dolores velit! Quo ipsa laboriosam rerum veritatis maxime quos perspiciatis ex omnis pariatur, eos blanditiis. Aliquam accusamus repellendus ut obcaecati architecto expedita.</span>
                    <span>Omnis soluta enim, non neque dolores quaerat! Aspernatur harum quisquam, vero eaque, iure officia ab commodi perspiciatis reiciendis fugit illum optio. Quae veniam amet, repellendus repellat ducimus inventore nisi? Quibusdam.</span>
                    <span>Similique, placeat dolore? Earum necessitatibus error pariatur nihil nesciunt amet dolorem iusto, quas, enim dolores corporis saepe nostrum eius asperiores perferendis molestiae ipsa odio voluptatum, natus molestias non. Nostrum, aliquid.</span>
                    <span>Placeat voluptatibus natus provident magnam eum officiis sunt eos rerum voluptates beatae deleniti ullam ratione, culpa nostrum esse neque qui laboriosam earum et eaque perferendis fugit explicabo! Commodi, debitis architecto!</span>
                </p>
            </article>  
        </div>


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