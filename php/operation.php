<?php 

require_once("compontsFun.php");
require_once("db.php");

$con = CreateDB();

// Button Create
if(isset($_POST['Create'])) :
    CreateDate();
endif;

// Button update
if(isset($_POST['Update'])) :
    UpdateData();
endif;

// function to create data
function CreateDate()
{
    // using filter to validate && trime to remove spaces
    $bookname = filter_var(trim($_POST['BookName']), FILTER_SANITIZE_STRING);
    $bookpublisher = filter_var(trim($_POST['BookPublisher']), FILTER_SANITIZE_STRING);
    $bookprice = trim($_POST['BookPrice']);

    if($bookname && $bookpublisher && $bookprice) :
        // Insert data to Database
        $sql = "INSERT INTO books(book_naem, book_publisher, book_price) 
                VALUES('$bookname', '$bookpublisher', '$bookprice')" ;
        
        // check and send Query to the Database
        if(mysqli_query($GLOBALS['con'], $sql)) :
            echo "<script> alert('One Book Added .... !') </script>" ;
        else :
            echo "<script> alert('Error Adding .... !') </script>" ;
        endif;
    
    else :
        echo "<script> alert('Provid Data in Boxes .... !') </script>" ;
    endif;
}


// Get Data from Database
function GetData()
{
    // get data from SQL
    $sql = " SELECT * FROM books ";
    $result = mysqli_query($GLOBALS['con'], $sql);

    // check and print data
    // Gets the number of rows in result set identifier returned by mysqli_query()
    if(mysqli_num_rows($result) > 0) :         
        return $result;
    endif;
   
}


// Update data in Database
function UpdateData()
{
    $bookid = trim($_POST['ID']);
    $bookname = filter_var(trim($_POST['BookName']), FILTER_SANITIZE_STRING);
    $bookpublisher = filter_var(trim($_POST['BookPublisher']), FILTER_SANITIZE_STRING);
    $bookprice = trim($_POST['BookPrice']);

    
    if($bookname && $bookpublisher && $bookprice) :
        // Insert data to Database
        $sql = "UPDATE books 
                SET book_naem ='$bookname', 
                    book_publisher = '$bookpublisher', 
                    book_price = '$bookprice' 
                WHERE id = '$bookid' " ;
        
        // check and send Query to the Database
        if(mysqli_query($GLOBALS['con'], $sql)) :
            echo "<script> alert('One Book Updated .... !') </script>" ;
        else :
            echo "<script> alert('Error Updating .... !') </script>" ;
        endif;
    
    else :
        echo "<script> alert('Select Data To Update .... !') </script>" ;
    endif;
}









?>