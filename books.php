<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
    <link rel="stylesheet" href="index.css">
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
        <table>
            <?php 
                $booksDb = new mysqli('localhost', 'root', '', 'books') or die(mysqli_error($booksDb));
                $result = $booksDb->query("SELECT * FROM data") or die($booksDb->error);
                ?>

            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Image</th>
                <th>Published at</th>
                <th colspan="2">Actions</th>
            </tr>
    

            <?php 
                while($dataArray = $result->fetch_assoc()): ?>

            <tr>
                <td> <?php echo $dataArray['Title'] ?> </td>
                <td> <?php echo $dataArray['Author'] ?> </td>
                <td> <?php echo $dataArray['Image'] ?> </td>
                <td> <?php echo $dataArray['publishedat'] ?> </td>
                <td colspan="2" class="action">
                    <a href="newBookForm.php?edit=<?php echo $dataArray['id'];?>" class="edit btn" method="GET" name="edit" id="btnEDIT">EDIT</a>
                    <a href="process.php?delete=<?php echo $dataArray['id'];?>" class="delete btn" method="GET" name="delete" id="btnDELETE">DELETE</a>
                </td>
            </tr> 
            <?php endwhile?>
        </table>
    </div>


</body>
</html>