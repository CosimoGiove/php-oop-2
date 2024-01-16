<?php
require_once __DIR__ . "/arraycards.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>proditti animali</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <div>
            <?php foreach ($card_animali as $animali) : ?>
                <div>
                    <h5> <?= $animali->mangiare ?></h5>
                    <h5> <?= $animali->cuccia ?></h5>
                    <h5> <?= $animali->giochi ?></h5>
                    <h5> <?= $animali->razza_animale ?></h5>
                    <h5> <?= $animali->dimensione_animale . " " . "kg" ?></h5>
                </div>
            <?php endforeach; ?>
        </div>
    </main>
</body>

</html>