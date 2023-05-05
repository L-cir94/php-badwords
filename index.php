<?php
$paragraph = 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nostrum, accusamus quibusdam ex ad pariatur aliquam! Atque voluptate magnam excepturi ab quisquam recusandae aliquam, quos reprehenderit in ad consequuntur, consectetur hic!'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>php-bad-words</title>
</head>

<body>
    <form action="./my_script.php" method="get">
        <div class="mb-3">
            <label for="paragraph" class="form-label">paragraph:</label>
            <input type="text" class="form-control" name="paragraph" id="paragraph" aria-describedby="paragraphHelper" placeholder="write here" value="<?=$paragraph ?>">
            <small id="paragraphHelper" class="form-text text-muted">write a paragraph</small>
        </div>
        <div class="mb-3">
            <label for="word" class="form-label">word to censor</label>
            <input type="text" class="form-control" name="word" id="word" aria-describedby="wordHelper" placeholder="write here">
            <small id="wordHelper" class="form-text text-muted">write a word</small>
        </div>
        <button type="submit">click</button>
    </form>
</body>

</html>