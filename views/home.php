<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Home</h1>

    <section>
        <div> HOLA SOY HOME</div>


    </section>

    <section>
        <?php foreach($users as $user):?>
            <p><?= $user["name"] ?> <?= $user["last_name"] ?></p>

        <?php endforeach; ?>
    </section>

</body>

</html>