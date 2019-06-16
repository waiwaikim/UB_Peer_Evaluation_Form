<?php include('ValidateEmail.php'); ?>
<?php include('LoginSQL.php'); ?>
<?php include('ConfirmationCode.php'); ?>

<?php
  if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    if (Util::is_valid_email($email)) {
      $code = ConfirmationCode::get_code($email);
      $conn = sqlConnect();
      insertEmail($conn, $email, $code);

      mail($email, "Course Evaluation Confirmation", "Welcome! Your confirmation code is ".$code." Please go to: https://www-student.cse.buffalo.edu/CSE442-542/2019-Summer/cse-442d/Confirmation.html");
      echo "A confirmation code has been sent to ".$email;
    } else {
      echo "Please enter a valid University at Buffalo email address.";
    }
  }
?>
