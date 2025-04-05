<?php
$title = "Inicio"; //titulo de la vista
$description = "Página principal de Tu Cine"; //descripcion de la pagina actual
$page_style = "home"; //nombre del archivo .css que queres que se ejecute para esta vista

include __DIR__ . '/layouts/header.php';
?>

<div class="container">
    <section>
        <div class="carousel-wrapper">
            <div class="carousel-container">
                <div class="carousel-slide">
                    <img class="carousel-image" src="https://salondelmal.com/wp-content/uploads/2011/12/the-avengers-movie-poster-banners-04.jpg" alt="Image 1">
                    <img class="carousel-image" src="https://plus.unsplash.com/premium_photo-1701590725747-ac131d4dcffd?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8d2Vic2l0ZSUyMGJhbm5lcnxlbnwwfHwwfHx8MA%3D%3D" alt="Image 2">
                    <img class="carousel-image" src="https://plus.unsplash.com/premium_photo-1701767501250-fda0c8f7907f?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8YmFubmVyJTIwYmFja2dyb3VuZHxlbnwwfHwwfHx8MA%3D%3D" alt="Image 3">
                </div>

                <button class="carousel-btn prev-btn">&#10094;</button>
                <button class="carousel-btn next-btn">&#10095;</button>

                <div class="carousel-dots">
                    <span class="dot active" data-slide="0"></span>
                    <span class="dot" data-slide="1"></span>
                    <span class="dot" data-slide="2"></span>
                </div>
            </div>
        </div>
    </section>

    <section>
        <h3> HOLA SOY HOME</h3>
    </section>

    <section>
        <?php foreach ($users as $user): ?>
            <p><?= $user["name"] ?> <?= $user["last_name"] ?></p>

        <?php endforeach; ?>
    </section>
    <section>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Dolore dolor sint enim vel consequatur iure aspernatur!
        Modi officiis aut sint debitis, vel inventore, quisquam
        hic repellendus soluta tempora nesciunt esse.</p>
    </section>
    <section>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Dolore dolor sint enim vel consequatur iure aspernatur!
        Modi officiis aut sint debitis, vel inventore, quisquam
        hic repellendus soluta tempora nesciunt esse.</p>
    </section>
    <section>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Dolore dolor sint enim vel consequatur iure aspernatur!
        Modi officiis aut sint debitis, vel inventore, quisquam
        hic repellendus soluta tempora nesciunt esse.</p>
    </section>
    <section>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Dolore dolor sint enim vel consequatur iure aspernatur!
        Modi officiis aut sint debitis, vel inventore, quisquam
        hic repellendus soluta tempora nesciunt esse.</p>
    </section>
    <section>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Dolore dolor sint enim vel consequatur iure aspernatur!
        Modi officiis aut sint debitis, vel inventore, quisquam
        hic repellendus soluta tempora nesciunt esse.</p>
    </section>
    <section>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Dolore dolor sint enim vel consequatur iure aspernatur!
        Modi officiis aut sint debitis, vel inventore, quisquam
        hic repellendus soluta tempora nesciunt esse.</p>
    </section>
    <section>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Dolore dolor sint enim vel consequatur iure aspernatur!
        Modi officiis aut sint debitis, vel inventore, quisquam
        hic repellendus soluta tempora nesciunt esse.</p>
    </section>
    <section>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Dolore dolor sint enim vel consequatur iure aspernatur!
        Modi officiis aut sint debitis, vel inventore, quisquam
        hic repellendus soluta tempora nesciunt esse.</p>
    </section>
</div>

<!-- Para codigo js que se use en home -->
<script src="/js/home.js"></script>
<script>

</script>
<?php include __DIR__ . '/layouts/footer.php'; ?>