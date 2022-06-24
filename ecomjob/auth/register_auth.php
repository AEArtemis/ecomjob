<!-- General Users -->
<?php
    include '../includes/connection.php';
    session_start();

    if (isset($_POST['user_register_button'])) {
        $full_name = trim(mysqli_real_escape_string($connection, $_POST['full_name']));
        $contact = trim(mysqli_real_escape_string($connection, $_POST['contact']));
        $email = trim(mysqli_real_escape_string($connection, $_POST['email']));
        $address = trim(mysqli_real_escape_string($connection, $_POST['address']));
        $password = trim(mysqli_real_escape_string($connection, $_POST['password']));

        // Check Email if taken
        $check = "select email from users where email = '$email'";
        $run= mysqli_query($connection, $check);
        $select = mysqli_query($connection, "SELECT `email` FROM `users` WHERE `email` = '".$_POST['email']."' OR `contact` ='$contact'") or exit(mysqli_error($connection));
        if(mysqli_num_rows($select)) {
        echo "<script>alert('Email or Contact already taken!')</script>";
        header("Refresh:2; url=../form/form1.php");
        exit();
        // Check Email End
    }

        $register = "INSERT INTO users (full_name, contact, email, address, type, password) VALUES ('$full_name', '$contact', '$email', '$address', 1,'$password')";
        if (mysqli_query($connection, $register)) {
            $to_login = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
            $login = mysqli_query($connection, $to_login);

            if ($login->num_rows > 0) {
                $get_data = mysqli_fetch_array($login);

                $_SESSION['session_id'] = $get_data['id'];
                $_SESSION['session_full_name'] = $get_data['full_name'];
                $_SESSION['session_contact'] = $get_data['contact'];                
                $_SESSION['session_type'] = $get_data['type'];
                $_SESSION['session_email'] = $get_data['email'];
                $_SESSION['session_address'] = $get_data['address'];
                $_SESSION['session_image'] = $get_data['image'];
                
                header('location: ../main.php');
            }
        } else {
            echo "Error: " . $register . "<br>" . mysqli_error($connection);
        }
    }


?>



<!-- 2nd Seller -->
<?php
    if (isset($_POST['seller_register_button'])) {
        $full_name = trim(mysqli_real_escape_string($connection, $_POST['full_name']));
        $contact = trim(mysqli_real_escape_string($connection, $_POST['contact']));
        $email = trim(mysqli_real_escape_string($connection, $_POST['email']));
        $business_name = trim(mysqli_real_escape_string($connection, $_POST['business_name']));
        $address = trim(mysqli_real_escape_string($connection, $_POST['address']));
        $password = trim(mysqli_real_escape_string($connection, $_POST['password']));

        // Check Email if taken
        $check = "select email from users where email = '$email'";
        $run= mysqli_query($connection, $check);
        $select = mysqli_query($connection, "SELECT `email` FROM `users` WHERE `email` = '".$_POST['email']."' OR `contact` ='$contact'") or exit(mysqli_error($connection));
        if(mysqli_num_rows($select)) {
        echo "<script>alert('Email or Contact already taken!')</script>";
        header("Refresh:2; url=../form/form2.php");
        exit();
        // Check Email End
    }

        $register = "INSERT INTO users (full_name, contact, email,  business_name, address, type, password) VALUES ('$full_name', '$contact', '$email', '$business_name',  '$address', 3,'$password')";
        if (mysqli_query($connection, $register)) {
            $to_login = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
            $login = mysqli_query($connection, $to_login);

            if ($login->num_rows > 0) {
                $get_data = mysqli_fetch_array($login);

                $_SESSION['session_id'] = $get_data['id'];
                $_SESSION['session_full_name'] = $get_data['full_name'];
                $_SESSION['session_contact'] = $get_data['contact'];                
                $_SESSION['session_type'] = $get_data['type'];
                $_SESSION['session_business_name'] = $get_data['business_name'];
                $_SESSION['session_email'] = $get_data['email'];
                $_SESSION['session_address'] = $get_data['address'];
                $_SESSION['session_image'] = $get_data['image'];
                
                header('location: ../shop.php');
            }
        } else {
            echo "Error: " . $register . "<br>" . mysqli_error($connection);
        }
    }
?>

<!-- 3rd Manager -->
<?php
    if (isset($_POST['employer_register_button'])) {
        $full_name = trim(mysqli_real_escape_string($connection, $_POST['full_name']));
        $contact = trim(mysqli_real_escape_string($connection, $_POST['contact']));
        $email = trim(mysqli_real_escape_string($connection, $_POST['email']));
        $company_name = trim(mysqli_real_escape_string($connection, $_POST['company_name']));
        $address = trim(mysqli_real_escape_string($connection, $_POST['address']));
        $password = trim(mysqli_real_escape_string($connection, $_POST['password']));

        // Check Email if taken
        $check = "select email from users where email = '$email'";
        $run= mysqli_query($connection, $check);
        $select = mysqli_query($connection, "SELECT `email` FROM `users` WHERE `email` = '".$_POST['email']."' OR `contact` ='$contact'") or exit(mysqli_error($connection));
        if(mysqli_num_rows($select)) {
        echo "<script>alert('Email or Contact already taken!')</script>";
        header("Refresh:2; url=../form/form3.php");
        exit();
        // Check Email End
    }

        $register = "INSERT INTO users (full_name, contact, email,  company_name, address, type, password) VALUES ('$full_name', '$contact', '$email', '$company_name',  '$address', 3,'$password')";
        if (mysqli_query($connection, $register)) {
            $to_login = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
            $login = mysqli_query($connection, $to_login);

            if ($login->num_rows > 0) {
                $get_data = mysqli_fetch_array($login);

                $_SESSION['session_id'] = $get_data['id'];
                $_SESSION['session_full_name'] = $get_data['full_name'];
                $_SESSION['session_contact'] = $get_data['contact'];                
                $_SESSION['session_type'] = $get_data['type'];
                $_SESSION['session_company_name'] = $get_data['company_name'];
                $_SESSION['session_email'] = $get_data['email'];
                $_SESSION['session_address'] = $get_data['address'];
                $_SESSION['session_image'] = $get_data['image'];
                
                header('location: ../jobs.php');
            }
        } else {
            echo "Error: " . $register . "<br>" . mysqli_error($connection);
        }
    }
        mysqli_close($connection);
?>