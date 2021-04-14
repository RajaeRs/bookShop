<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="./css/bootstrap.css">
</head>
<body>
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
        $booksDb = new mysqli('localhost', 'RajaeRs', 'ibtihal@RRR2001', 'crud-php') or die(mysqli_error($booksDb));

        if(isset($_POST['search'])){
            $searchQ = $_POST['searchQ'];

            $query = $booksDb->query("SELECT * from books_shop WHERE Title LIKE '%$searchQ%' OR Author LIKE '%$searchQ%'");
            $count = $query->num_rows;
    ?>

    <?php if($count == 0){ ?>

            <h1>no matches</h1>;

    <?php }
            else{
    ?>

    <?php
            
                while($row= $query->fetch_array()){
                    $id = $row['id'];
                    $image = $row['Image'];
                    $title = $row['Title'];
                    $pd = $row['publishedat'];
    ?>
                    
                    <div class="book" style="padding-left:2rem">
                        <a href="/BooksLibrary/book.php?id=<?php echo $id;?>" method="GET" name="book">
                            <img src="/img/<?php echo $image?>" alt="">
                        </a>
                        <p  id="title"><?php echo $title?></p>
                        <p id="date"><?php echo $pd?></p>

                    </div>
    <?php } ?>
    <?php } ?>
    <?php } ?>

</body>
</html>

