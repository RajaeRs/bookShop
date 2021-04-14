<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>single book</title>
    <link rel="stylesheet" href="index.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="./css/bootstrap.css">
</head>
<body>

    <?php require_once 'process.php';?>

    <!-- <?php require_once 'books.php';?> -->


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">BOOKS LIBRARY</a>
        <div class="collapse navbar-collapse" id="navbar">
            <div class="navbar-nav">
            <a class="nav-item nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="books.php">Books</a>
            <a class="nav-item nav-link" href="contact.php">Contact us</a>
            </div>
        </div>
    </nav>
    
    <?php 
        $id = $_GET['id'];

        $booksDb = new mysqli('localhost', 'RajaeRs', 'ibtihal@RRR2001', 'crud-php') or die(mysqli_error($booksDb));
        $result = $booksDb->query("SELECT * FROM books_shop WHERE id=$id") or die($booksDb->error);
    ?>

        <?php 
            while($dataArray = $result->fetch_assoc()): ?>

    <div class="bookContainer">
        <div class="details">
            <div class="nameatt">
                <h1>Name: </h1>
                <p> <?php echo $dataArray['Title']?> </p>
            </div>

            <div class="authoratt">
                <h1>Author: </h1>
                <p><?php echo $dataArray['Author']?></p>
            </div>

            <div class="priceatt">
                <h1>Price: </h1>
                <p><?php echo $dataArray['Price']?>$</p>
            </div>

            <div class="stockatt">
                <h1>in-stock: </h1>
                <p><?php echo $dataArray['Quantity']?></p>
            </div>

            <div class="publishatt">
                <h1>publish date: </h1>
                <p><?php echo $dataArray['publishedat']?></p>        
            </div>

        </div>

        <div class="image">
            <img id="bimage" src="/img/<?php echo $dataArray['Image']?>" alt="">
        </div>
    </div>
    <?php endwhile?>
    
</body>
</html>