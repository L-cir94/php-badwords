<?php
/* var_dump($_GET); */

$paragraph = $_GET['paragraph'];
$word = $_GET['word'];
/* var_dump($paragraph, $word); */
$censored_paragraph = str_ireplace($word, '***', $paragraph);
/* var_dump($censored_paragraph);
var_dump(strlen($paragraph));
var_dump(strlen($censored_paragraph)); */

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link defer href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/brands.min.css" integrity="sha512-9YHSK59/rjvhtDcY/b+4rdnl0V4LPDWdkKceBl8ZLF5TB6745ml1AfluEU6dFWqwDw9lPvnauxFgpKvJqp7jiQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>response</title>
</head>

<body>
    <main>
        <div class="container">
            <div class="card shadow p-3">
                <p><strong>Paragrafo originale </strong><span>parole totali: </strong><strong><?= strlen($paragraph) ?></span> </strong><?= $paragraph ?></p>
                <p><strong>Paragrafo censurato </strong><span>parole totali: </strong><strong><?= strlen($censored_paragraph) ?> </strong><?= $censored_paragraph ?></p>

            </div>
        </div>
    </main>
</body>

</html>