<?php
require_once '../layout/header.php';

$imagePath = '../image/logo.png';
// Check if there are any validation errors stored in the session
if (isset($_SESSION['errors'])) {

    $errors = $_SESSION['errors'];

    // Clear the session variable to remove the errors
    unset($_SESSION['errors']);
} else {
    $errors = array();
}
?>

<section class="h-100 h-custom">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-8 col-xl-6">
                <div class="card rounded-3">
                    <div class="row justify-content-center">
                    <img class="" src="<?php echo $imagePath; ?>" alt="">
                    </div>
                    <div class="main_titles card-header text-center">
                        Hello,who's this?
                     
                    </div>

                    
                    <?php if (count($errors) > 0) : ?>
                        <div class="alert alert-danger alert-dismissible  " role="alert">
                            <ul>
                                <?php foreach ($errors as $error) : ?>
                                    <li><?php echo $error; ?></li>
                                <?php endforeach; ?>
                            </ul>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php endif; ?>
                    <?php if (isset($_GET['message'])) : ?>
                        <div class="alert alert-success alert-dismissible  " role="alert">
                            <?php echo isset($_GET['message']) ? urldecode($_GET['message']) : ''; ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php endif; ?>

                    <div class="card-body p-4 p-md-5">

                        <form action="../backend/store_contact.php" method="Post" id="contact_form" class="px-md-2">

                            <div class="form-outline mb-4">
                                <label class="form-label bold" for="first_name">First Name <span class="error">*</span></label>
                                <input type="text" required name="first_name" id="first_name" class="form-control" />

                            </div>
                            <div class="form-outline mb-4">
                                <label class="form-label bold" for="last_name">Second Name<span class="error">*</span></label>

                                <input type="text" name="last_name" required id="last_name" class="form-control" />
                            </div>
                            <div class="form-outline mb-4">
                                <label class="form-label bold" for="phone">Phone Number<span class="error">*</span></label>

                                <input type="number" name="phone" required min="0" id="phone" class="form-control" />
                            </div>


                            <div class="row justify-content-center">

                                <button value="1" name="submit_btn" type="submit" class="btn btn-dark btn-lg mb-1 w-50">Submit</button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>