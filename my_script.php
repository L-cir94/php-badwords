<?php
var_dump($_GET);

$paragraph = $_GET['paragraph'];
$word = $_GET['word'];
var_dump($paragraph, $word);
$censored_paragraph = str_ireplace($word, '***', $paragraph);
var_dump($censored_paragraph);
var_dump(strlen($paragraph));
var_dump(strlen($censored_paragraph));

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>response</title>
</head>

<body>
    <div class="container">
        <div class="card">
            <p><strong>Paragrafo originale </strong><span>parole totali: </strong><strong><?= strlen($paragraph) ?></span> </strong><?= $paragraph ?></p>
            <p><strong>Paragrafo censurato </strong><span>parole totali: </strong><strong><?= strlen($censored_paragraph) ?> </strong><?= $paragraph ?></p>

        </div>
    </div>
    <div class="div"></div>
</body>

</html>