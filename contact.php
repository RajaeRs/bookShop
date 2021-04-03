<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact page</title>
    <link rel="stylesheet" href="index.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
</head>
<body>

    <?php include_once 'process.php';?>

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


    <form class="messageForm" method="POST" action="mail.php" name="sendMsg">
        <div class="form-group input" >
            <label for="formGroupExampleInput">Name</label>
            <input id="formName" type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter Name" name="formName">
        </div>

        <div class="form-group input">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="formEmail">
            <small id="formEmail" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>

        <div class="form-group input">
            <label for="exampleFormControlTextarea1">Enter your mrssage</label>
            <textarea id="formMessage" class="form-control" id="exampleFormControlTextarea1" rows="3" name="formMessage"></textarea>
        </div>

        <button type="submit" class="btn btn-primary" id="msgbtn" name="send">Send</button>
    </form>
    <script src="mail.js"></script>
</body>
</html>