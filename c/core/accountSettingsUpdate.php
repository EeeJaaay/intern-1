<<<<<<< HEAD
<?php  
    require '../../config/includes.php';
    require '_session.php';

    if (isset($_POST['userEmail'])) {
        
        $profileImg = imageUpload('profileImg', "../../imagebank/");

        $userFullname = clean_string($_POST['userFullname']);
        $userEmail = clean_email($_POST['userEmail']);

        if (empty($_POST['userPassword'])) {
            $userPassword = $row['user_password'];
        } else {
            $userPassword = clean_string(md5($_POST['userPassword']));
        }

        if ($profileImg == "error") {
            header("location: accountSettings?rand=".my_rand_str(30)."&note=invalid_upload");
        } else {
            
            if (empty($profileImg)) {
                $profileImg = $userProfileImg;
            } else {
                $profileImg = $profileImg;
            }

            $request = updateUserAccountImg($userEmail, $userPassword, $profileImg, $userId);

            if ($request == true) {
                header("location: accountSettings?rand=".my_rand_str(30)."&note=updated");
            }else{
                header("location: accountSettings?rand=".my_rand_str(30)."&note=error");
            }

        }

    }else{

        header("location: accountSettings?rand=".my_rand_str(30)."&note=invalid");

    }
    
=======
<?php  
    require '../../config/includes.php';
    require '_session.php';

    if (isset($_POST['userEmail'])) {
        
        $profileImg = imageUpload('profileImg', "../../imagebank/");

        $userFullname = clean_string($_POST['userFullname']);
        $userEmail = clean_email($_POST['userEmail']);

        if (empty($_POST['userPassword'])) {
            $userPassword = $row['user_password'];
        } else {
            $userPassword = clean_string(md5($_POST['userPassword']));
        }

        if ($profileImg == "error") {
            header("location: accountSettings?rand=".my_rand_str(30)."&note=invalid_upload");
        } else {
            
            if (empty($profileImg)) {
                $profileImg = $userProfileImg;
            } else {
                $profileImg = $profileImg;
            }

            $request = updateUserAccountImg($userEmail, $userPassword, $profileImg, $userId);

            if ($request == true) {
                header("location: accountSettings?rand=".my_rand_str(30)."&note=updated");
            }else{
                header("location: accountSettings?rand=".my_rand_str(30)."&note=error");
            }

        }

    }else{

        header("location: accountSettings?rand=".my_rand_str(30)."&note=invalid");

    }
    
>>>>>>> 50738457b13b2043e6e07348bcdb0c2b7e3976f7
?>