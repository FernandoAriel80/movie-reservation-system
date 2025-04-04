<?php
$title = "Inicio"; //titulo de la vista
$page_style = "home"; //nombre del archivo .css que queres que se ejecute para esta vista

include __DIR__ . '/layouts/header.php';
?>

<div class="container">
  <!--   <section>
        
        <div class="carousel">
            <div class="carousel-track">
                <img src="https://cdn.pixabay.com/photo/2015/10/29/14/38/web-1012467_1280.jpg" alt="Image 1">
                <img src="https://plus.unsplash.com/premium_photo-1701590725747-ac131d4dcffd?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8d2Vic2l0ZSUyMGJhbm5lcnxlbnwwfHwwfHx8MA%3D%3D" alt="Image 2">
                <img src="https://plus.unsplash.com/premium_photo-1701767501250-fda0c8f7907f?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8YmFubmVyJTIwYmFja2dyb3VuZHxlbnwwfHwwfHx8MA%3D%3D" alt="Image 3">
                <img src="https://png.pngtree.com/thumb_back/fh260/back_pic/00/02/44/5056179b42b174f.jpg" alt="Image 4">
            </div>
        </div>
    </section> -->
    <section>
        <h3> HOLA SOY HOME</h3>
    </section>

    <section>
        <?php foreach ($users as $user): ?>
            <p><?= $user["name"] ?> <?= $user["last_name"] ?></p>

        <?php endforeach; ?>
    </section>
    <section>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore dolor sint enim vel consequatur iure aspernatur! Modi officiis aut sint debitis, vel inventore, quisquam hic repellendus soluta tempora nesciunt esse.</p>
    </section>
    <section>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore dolor sint enim vel consequatur iure aspernatur! Modi officiis aut sint debitis, vel inventore, quisquam hic repellendus soluta tempora nesciunt esse. quisquam hic repellendus soluta tempora nesciunt esse.quisquam hic repellendus soluta tempora nesciunt esse.</p>
    </section>
    <section>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore dolor sint enim vel consequatur iure aspernatur! Modi officiis aut sint debitis, vel inventore, quisquam hic repellendus soluta tempora nesciunt esse. quisquam hic repellendus soluta tempora nesciunt esse.quisquam hic repellendus soluta tempora nesciunt esse.</p>
    </section>
    <section>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore dolor sint enim vel consequatur iure aspernatur! Modi officiis aut sint debitis, vel inventore, quisquam hic repellendus soluta tempora nesciunt esse. quisquam hic repellendus soluta tempora nesciunt esse.quisquam hic repellendus soluta tempora nesciunt esse.</p>
    </section>
    <section>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore dolor sint enim vel consequatur iure aspernatur! Modi officiis aut sint debitis, vel inventore, quisquam hic repellendus soluta tempora nesciunt esse. quisquam hic repellendus soluta tempora nesciunt esse.quisquam hic repellendus soluta tempora nesciunt esse.</p>
    </section>
    <section>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore dolor sint enim vel consequatur iure aspernatur! Modi officiis aut sint debitis, vel inventore, quisquam hic repellendus soluta tempora nesciunt esse. quisquam hic repellendus soluta tempora nesciunt esse.quisquam hic repellendus soluta tempora nesciunt esse.</p>
    </section>
    <section>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore dolor sint enim vel consequatur iure aspernatur! Modi officiis aut sint debitis, vel inventore, quisquam hic repellendus soluta tempora nesciunt esse. quisquam hic repellendus soluta tempora nesciunt esse.quisquam hic repellendus soluta tempora nesciunt esse.</p>
    </section>
    <section>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore dolor sint enim vel consequatur iure aspernatur! Modi officiis aut sint debitis, vel inventore, quisquam hic repellendus soluta tempora nesciunt esse. quisquam hic repellendus soluta tempora nesciunt esse.quisquam hic repellendus soluta tempora nesciunt esse.</p>
    </section>

</div>

<!-- Para codigo js que se use en home -->
<script>
    //
</script>
<?php include __DIR__ . '/layouts/footer.php'; ?>