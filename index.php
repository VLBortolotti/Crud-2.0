<?php
require_once("php/component.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Store</title>

    <!-- font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">

</head>
<body>
    <main>

        <div class="container text-center">
            <h1 class="py-4 bg-dark text-light rounded"><i class="fas fa-swatchbook"> Book Store</i></h1>
            
            <div class="d-flex justify-content-center">
                <form action="" method="post" class="w-50">
                    
                    <!-- ID input -->
                    <div class="pt-2">
                        <?php inputElement("<i class='fas fa-id-badge'></i>", "ID", "book_id", ""); ?>
                    </div>

                    <!-- Book's name input -->
                    <div class="pt-2">  
                        <?php inputElement("<i class='fas fa-book'></i>", "Book Name", "book_name", ""); ?>
                    </div>

                    <div class="row pt-2">
                        <!-- Book's publisher input -->
                        <div class="col">
                            <?php 
                                inputElement("<i class='fas fa-people-carry'></i>", "Publisher", "book_publisher", ""); 
                            ?>
                        </div>

                        <!-- Book's Price input -->
                        <div class="col">
                            <?php 
                                inputElement("<i class='fas fa-dollar-sign'></i>", "Price", "book_price", ""); 
                            ?>
                        </div>
                    </div>

                    <!-- Buttons' container -->
                    <div class="d-flex">
                        <!-- Create Button -->
                        <?php 
                            buttonElement("btn-create", "btn btn-success", "<i class='fas fa-plus'></i>", "create", "dat-toggle='tooltip' data-placement='bottom' title='Create'"); 
                        ?>

                        <!-- Read Button -->
                        <?php 
                            buttonElement("btn-read", "btn btn-primary", "<i class='fas fa-sync'></i>", "read", "dat-toggle='tooltip' data-placement='bottom' title='Read'"); 
                        ?>

                        <!-- Update Button -->
                        <?php 
                            buttonElement("btn-update", "btn btn-light border", "<i class='fas fa-pen-alt'></i>", "update", "dat-toggle='tooltip' data-placement='bottom' title='Update'"); 
                        ?>

                        <!-- Delete Button -->
                        <?php 
                            buttonElement("btn-delete", "btn btn-danger border", "<i class='fas fa-trash-alt'></i>", "delete", "dat-toggle='tooltip' data-placement='bottom' title='Delete'"); 
                        ?>
                    </div>

                </form>
            </div>
        </div>

    </main>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>