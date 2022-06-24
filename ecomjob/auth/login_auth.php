<?php
    include '../includes/connection.php';
    session_start();

    if (isset($_POST['login_button'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $check_email = "SELECT * FROM users WHERE email ='$email'";
        $result_email = mysqli_query($connection, $check_email);
        
        if ($result_email->num_rows > 0) {
            $get_email = mysqli_fetch_array($result_email);

            $check_password = "SELECT * FROM users WHERE email ='$email' AND password = '$password'";
            $result_password = mysqli_query($connection, $check_password);
            
            if ($result_password->num_rows > 0) {
                $get_data = mysqli_fetch_array($result_password);
                $_SESSION['session_id'] = $get_data['id'];
                $_SESSION['session_type'] = $get_data['type'];
                $_SESSION['session_contact'] = $get_data['contact'];
                $_SESSION['session_address'] = $get_data['address'];
                $_SESSION['session_full_name'] = $get_data['full_name'];
                $_SESSION['session_email'] = $get_data['email'];
                $_SESSION['session_password'] = $get_data['password'];
                    if ($get_data['type'] == 0) {
                        header("Refresh:0 url=../dashboard.php");
                    }
                    elseif ($get_data['type'] == 1) {
                        header("Refresh:0 url=../main.php");
                    }
                    elseif ($get_data['type'] == 2) {
                        header("Refresh:0 url=../jobs.php");
                    }                    
                    else{
                        header("Refresh:0; url=../shop.php");
                    }            
            } else {
                echo 'Incorrect email or password.';
                header("Refresh:1; url=../login.php");
            }
        }else {
            echo 'Email address does not exist.';
            header("Refresh:1; url=../login.php");
        }    
    }

    mysqli_close($connection);
?>
