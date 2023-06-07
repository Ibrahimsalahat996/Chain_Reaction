<?php
//--------------------Salahat------------------ //
include 'connect.php';
session_start();
if (isset($_POST['submit_btn'])) {
    try {
        $f_name = $_POST['first_name'];
        $l_name = $_POST['last_name'];
        $phone = $_POST['phone'];
        $tableName = 'contact_informations';
        $errors = [];

        // Validate first name field
        if (empty($f_name)) {
            $errors[] = "first name is required.";
        }
        // Validate Last name field
        if (empty($l_name)) {
            $errors[] = "Last name is required.";
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
            $insert_products->execute([$f_name, $l_name, $phone]);
            $message = 'Data Inserted Success';

            header("Location:../view/Create_account.php?message=" . urlencode($message));
            exit;
        } else {
            // redirect to previous page with errors 
            $_SESSION['errors'] = $errors;
            header('Location:../view/Create_account.php');
            exit;
        }
    } catch (PDOException $e) {

        echo "Error: " . $e->getMessage();
    }
    //--------------------Salahat------------------ //
}
