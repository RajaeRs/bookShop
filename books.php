<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
    <link rel="stylesheet" href="index.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="./css/bootstrap.css">

</head>
<body>

    <?php require_once 'process.php';?>

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

    <div class="head">
        <h1>LIST OF BOOKS</h1>
        <a href="newBookForm.php" class="add btn" id="btns">ADD</a>
    </div>
    
    <?php 
        if(isset($_SESSION['message'])):
    ?>

    <div class="alert alert-<?=$_SESSION['msg_type']?>" role="alert" id="feedback">
            <?php 
                echo $_SESSION['message'];
                unset ($_SESSION['message']);
            ?>
    </div>
    <?php endif?>
    
    <div class="tableContainer">
     
            <?php 
                $booksDb = new mysqli('localhost', 'root', '', 'books') or die(mysqli_error($booksDb));
                $result = $booksDb->query("SELECT * FROM data") or die($booksDb->error);
                ?>

            <?php 
            while($dataArray = $result->fetch_assoc()): ?>

            

            <div class="book">
                    <a href="/BooksLibrary/book.php?id=<?php echo $dataArray['id'];?>" method="GET" name="book">
                        <img src="assets/<?php echo $dataArray['Image']?>" alt="">
                    </a>
                    <p  id="title"><?php echo $dataArray['Title']?></p>
                    <p id="date"><?php echo $dataArray['publishedat']?></p>

            </div>
            <?php endwhile?>



            
    </div>



</body>
</html>