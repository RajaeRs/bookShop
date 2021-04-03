<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Book</title>
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
            <a class="nav-item nav-link" href="contact.php">Contact us</a>
            </div>
        </div>
    </nav>
    <div class="head" id="newBook">  
        <h1>NEW BOOK</h1>
    </div>

    <div class="jumbotron" id="jumbo">
        <form action="process.php" method="POST" enctype="multipart/form-data" href="books.php">
            <input type="hidden" name="id" value="<?php echo $id?>">
            <div class="input-group" id="inpgroup">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="">Title</span>
                </div>
                <input type="text" class="form-control" name="title" placeholder="enter title" value="<?php echo $title;?>">
            </div>

            <div class="input-group" id="inpgroup">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="">Author</span>
                </div>
                <input type="text" class="form-control" name="author" placeholder="enter author" value="<?php echo $author;?>">
            </div>

            <div class="input-group" id="inpgroup">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="">Price:</span>
                </div>
                <input type="number" class="form-control" name="price" placeholder="enter the price" value="<?php echo $Price;?>">
            </div>

            <div class="input-group" id="inpgroup">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="">Quantity</span>
                </div>
                <input type="number" class="form-control" name="quantity" placeholder="enter Quantity" value="<?php echo $Quantity;?>">
            </div>

            <div class="custom-file" id="inpgroup">
                <input type="file" name="image" class="custom-file-input" id="validatedCustomFile" required>
                <label class="custom-file-label" for="validatedCustomFile">Choose image...</label>
                <div class="invalid-feedback">Example invalid custom file feedback</div>
            </div>

            <div class="input-group" id="inpgroup">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="">published at</span>
                </div>
                <input type="number" class="form-control" name="publishedat" placeholder="enter publish date" value="<?php echo $publishedat;?>">
            </div>
            <?php if($update == true):?>
                <button class="btn btn-primary" id="special" type="submit" name="update">UPDATE</button>
            <?php else: ?>
            <button class="btn btn-primary" id="special" type="submit" name="add">ADD</button>
            <?php endif?>
        </form>
    </div>


</body>
</html>