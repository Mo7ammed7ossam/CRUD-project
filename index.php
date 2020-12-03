<?php 

    require_once("../SimpleCRUDProject/php/compontsFun.php");
    require_once("../SimpleCRUDProject/php/operation.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!--  two meta for responsive and device width  -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- title -->
    <title> Book Store </title>
    <!-- CSS , Bootstrap & FontAwesome links -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <!-- font awsowe link -->
    <script src="https://kit.fontawesome.com/09f90bb15d.js" crossorigin="anonymous"></script>
</head>

<body>

    <div class="container py-3 bord">
        <h1 class="text-center bg-dark text-light py-3 rounded">
            <i class="fas fa-swatchbook"></i> 
            Book Store
        </h1>

        <!-- form to insert data -->
        <div class="my-4 d-flex justify-content-center">
            <form action="" method="POST" class="bord w-50">
                <div class="my-3">
                    <?php
                        inputElement('<i class="fas fa-portrait"></i>',"ID","ID","");
                    ?>
                </div>

                <div class="my-3">
                    <?php 
                        inputElement("<i class='fas fa-book'></i>","Book Name","BookName","");
                    ?>
                </div>

                <div class="my-3 row">
                    <div class="col">
                        <?php 
                            inputElement("<i class='fas fa-people-carry'></i>","Publisher","BookPublisher","");
                        ?>
                    </div>
                    <div class="col">
                        <?php 
                            inputElement("<i class='fas fa-dollar-sign'></i>","Price","BookPrice","");
                        ?>
                    </div>
                </div>
               
                <!-- buttons to action on the form -->
                <div class="d-flex my-3 justify-content-between">
                    <?php
                        buttonElement("Create","Create","btn btn-success","btnCreate","<i class='fas fa-plus'></i>");
                    ?>
                    <?php
                        buttonElement("Read","Raed","btn btn-primary","btnRead","<i class='fas fa-sync'></i>");
                    ?>
                    <?php
                        buttonElement("Update","Update","btn btn-light border","btnUpdate","<i class='fas fa-pen-alt'></i>");
                    ?>
                    <?php
                        buttonElement("Delete","Delete","btn btn-danger","btnDelete","<i class='fas fa-trash-alt'></i>");
                    ?>
                </div>
            </form>
        </div>

        <!-- design to show data -->
        <div class="bord my-4 d-flex table-data w-75 mx-auto">
            <table class="table table-striped table-dark">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Book Name</th>
                        <th>Publisher</th>
                        <th>Book Price</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody id="tbody">

                <?php   
                    if(isset($_POST['Read'])) :
                        $result = GetData();
                        if($result) :
                            while($row = mysqli_fetch_assoc($result)) :
                                echo "<tr>
                                        <td data-id=". $row['id'] .">". $row['id'] ."</td>
                                        <td data-id=". $row['id'] .">". $row['book_naem'] ."</td>
                                        <td data-id=". $row['id'] .">". $row['book_publisher'] ."</td>
                                        <td data-id=". $row['id'] .">". $row['book_price'] ." $ </td>
                                        <td><i class='fas fa-edit btndeit text-light' data-id=". $row['id'] ."></i></td>
                                    </tr>";
                            endwhile;
                        endif;
                    endif;
                ?>

                </tbody>
            </table>
        </div>
        
    </div>

    <!-- java script links -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/main.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>