<?php
    $title = "Inicio"; //titulo de la vista
    $page_style = "home"; //nombre del archivo .css que queres que se ejecute para esta vista
    
    include __DIR__ . '/layouts/header.php';
?>

<div class="container">
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
    
</div>

<!-- Para codigo js que se use en home -->
<script>
   //
</script>
<?php include __DIR__ . '/layouts/footer.php'; ?>