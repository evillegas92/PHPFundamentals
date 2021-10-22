<?php
    include 'assets/include.php';
    
    require 'assets/dbinfo.php';

    $query = "SELECT id, first_name, last_name, pen_name FROM authors ORDER BY first_name";
    $resultObject = $connection->query($query);
    $authors = array();
?>

<!doctype html>
<html lang="en">
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
                <div class="col-12">
                    <h1>PHP Fundamentals</h1>
                </div>
                <div class="row">
                    <div class="col">
                        <form method="post" action="final.php">
                            <div class="mb-3">
                                <label for="authorsSelect" class="form-label">Favorite Author</label>
                                <select id="authorsSelect" name="author" class="form-select" aria-label="Default select example">                                
                                    <option selected>Select author...</option>
                                    <?php
                                        while ($row = $resultObject->fetch_assoc()) : 
                                            $author = new Author($row['id'], $row['first_name'], $row['last_name'], $row['pen_name']);
                                            array_push($authors, $author);
                                    ?>
                                            <option value="<?= $author->id ?>"><?= $author->firstName ?> <?= $author->lastName ?></option>
                                    <?php
                                        endwhile;
                                        $_SESSION['authors'] = $authors;
                                    ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" required>
                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                            </div>
                            <button type="submit" class="btn btn-primary">Subscribe</button>
                        </form>
                    </div>
                    <div class="col">
                    </div>
                </div>
            </div>
        </div>

        <!-- Optional JavaScript; choose one of the two! -->
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>