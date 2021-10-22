<?php
    include 'assets/include.php';
    
    $authorValue = $_POST['author'];
    $emailValue = $_POST['email'];
    
    if (!isset($_SESSION['authors']))
    {
        header('Location: index.php');
    }
    
    $author = null;
    foreach ($_SESSION['authors'] as $authorIterator)
    {
        if ($authorIterator->id == $authorValue)
        {
            $author = $authorIterator;
            break;
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <title>PHP Fundamentals</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2>Submitted information</h2>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="authorInput" class="form-label">Favorite author</label>
                    <input type="text" id="authorInput" class="form-control" value="<?=$author->firstName." ".$author->lastName?>" disabled>
                </div>
                <div class="col">
                    <label for="emailInput" class="form-label">Email</label>
                    <input type="text" id="emailInput" class="form-control" value="<?=$emailValue?>" disabled>
                </div>
            </div>
        </div>
    </body>
</html>
