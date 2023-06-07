<?php
//--------------------Salahat------------------ //
include 'connect.php';
session_start();
if (isset($_POST['submit_btn'])) {
    try {
       // explode the Name Request  and check if has second name or not
        $array = explode(' ',$_POST['first_name']);
        $f_name =$array[0];
        $l_name =$array[1]??null;
        $phone = $_POST['phone'];
        $tableName = 'contact_informations';
        $errors = [];

        // Validate first name field
        if (empty($f_name)) {
            $errors[] = "Name is required.";
        }
     
        // Validate Phone field
        if (empty($phone)) {
            $errors[] = "Phone is required.";
        }
        // Validate unique Phone field
        $select_cart = "SELECT * FROM `contact_informations` WHERE phone = ?";
        $stmt = $conn->prepare($select_cart);
        $stmt->bind_param("s", $phone);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows != 0) {

            $errors[] = "Phone number already exists!";
        }

        if (empty($errors)) {
            // insert data into database 
            $insert_products = $conn->prepare("INSERT INTO contact_informations(first_name,second_name,phone) VALUES(?,?,?)");
            $insert_products->execute([$f_name,$l_name, $phone]);
            $message = 'Data Inserted Success';

            header("Location:../view/Create_account_sec.php?message=" . urlencode($message));
            exit;
        } else {
            // redirect to previous page with errors 
            $_SESSION['errors'] = $errors;
            header('Location:../view/Create_account_sec.php');
            exit;
        }
    } catch (PDOException $e) {

        echo "Error: " . $e->getMessage();
    }
    //--------------------Salahat------------------ //
}
