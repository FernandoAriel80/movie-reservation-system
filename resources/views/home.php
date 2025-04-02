<head>
   <!--  <link rel="stylesheet" href="/css/home.css">
    <title>Home</title> -->
</head>

<body>
    <?php include __DIR__ . '/templates/header.php' ?>

    <!--  <h1>Home</h1> -->

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

        <!--  <section>
            <img src="https://imgs.search.brave.com/PyVOgZz8liNvOjKAXJMsPe_Sp5vODw7GPz5yTiRXB4E/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly93d3cu/ZWxncmFmaWNvLmNv/bS5hci9tZWRpYS9j/YWNoZS9wdWJfbmV3/c19kZXRhaWxzX2xh/cmdlL21lZGlhL2kv/ZWMvZGIvZWNkYjA3/MmFiZThhNTk2YWUz/ZWQyNTA0MDU3NTM3/YzI3N2E0NGQ5Ny5q/cGc" alt="">
        </section> -->
    </div>
    <?php include __DIR__ . '/templates/footer.php' ?>