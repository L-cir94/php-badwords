<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link defer href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/brands.min.css" integrity="sha512-9YHSK59/rjvhtDcY/b+4rdnl0V4LPDWdkKceBl8ZLF5TB6745ml1AfluEU6dFWqwDw9lPvnauxFgpKvJqp7jiQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>php-bad-words</title>
</head>

<body>
    <div class="container">
    <form action="./my_script.php" method="get" class="mt-5">
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
    </div>
</body>

</html>