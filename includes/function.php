
<?php

if (isset($_POST['submit'])) {
    global $connection;

    $name = $_POST['name'];
    $email = strtolower($_POST['email']);
    $tel = $_POST['tel'];
    $industry = $_POST['industry'];

    // Cleaning user input 
    $name = mysqli_real_escape_string($connection, $name);
    $email = mysqli_real_escape_string($connection, $email);
    $tel = mysqli_real_escape_string($connection, $tel);
    $industry = mysqli_real_escape_string($connection, $industry);

    // inserting user input into the database
    $query = "INSERT INTO contact(name,email,tel,industry) ";
    $query .= "VALUE ('$name', '$email', '$tel', '$industry')";

    $result = mysqli_query($connection, $query);


    //Checking for errors
    if ($result) {
        $error = "Form successfully submitted";
    } else {
        die('Query Failed' . mysqli_error($connection));
    }
}
