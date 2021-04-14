<?php 

    // require 'vendor/autoload.php';


    session_start();

    $booksDb = new mysqli('localhost', 'RajaeRs', 'ibtihal@RRR2001', 'crud-php') or die(mysqli_error($booksDb));

    $id = 0;
    $update = false;
    $title = '';
    $author = '';
    $price = '';
    $quantity = '';
    $publishedat = '';
    
    if(isset($_POST['add'])){

        $upload_dir = 'assets/';

        $title = $_POST["title"];
        $author = $_POST["author"];
        $price = $_POST["price"];
        $quantity = $_POST["quantity"];
        $image = $_FILES["image"]["name"];
        $publishedat = $_POST["publishedat"];
        
        $booksDb->query("INSERT INTO books_shop (Title, Author, Price, Quantity, Image, publishedat) VALUES('$title', '$author', '$price', '$quantity', '$image', '$publishedat')")
        or die($booksDb->error);
        
        $tmp_name = $_FILES["image"]["tmp_name"];
        move_uploaded_file($tmp_name, "$upload_dir$image");

        $_SESSION['message'] = "Book added sucessfully!";
        $_SESSION['msg_type'] = "primary";

        header("Location: /BooksLibrary/books.php");
    }

    // if(isset($_GET['delete'])){
    //     $id = $_GET['delete'];
    //     $booksDb->query("DELETE FROM data WHERE id=$id") or die($booksDb->error);
        
    //     $_SESSION['message'] = "Book removed sucessfully!";
    //     $_SESSION['msg_type'] = "danger";

    //     header("Location: /BooksLibrary/books.php");

    // }

    // if(isset($_GET['edit'])){
    //     $id = $_GET['edit'];
    //     $dataResult = $booksDb->query("SELECT * FROM data WHERE id=$id") or die($booksDb->error());
        
    //     // if(count($dataResult)==1){
    //         $row = $dataResult->fetch_array();
    //         $title = $row['Title'];
    //         $author = $row['Author'];
    //         // $image = $dataArray['Image'];
    //         $publishedat = $row['publishedat'];
    //         $update = true;
    //     // }

    // }

    // if(isset($_POST['update'])){
    //     $id = $_POST['id'];
    //     $title = $_POST["title"];
    //     $author = $_POST["author"];
    //     $image = $_POST["image"];
    //     $publishedat = $_POST["publishedat"];

    //     $booksDb->query("UPDATE data SET Title='$title', Author='$author', image='$image', publishedat='$publishedat' WHERE id=$id")
    //     or die($booksDb->error);

    //     $_SESSION['message'] = "Book updated sucessfully!";
    //     $_SESSION['msg_type'] = "warning";

    //     header("Location: /BooksLibrary/books.php");

    // }

?>