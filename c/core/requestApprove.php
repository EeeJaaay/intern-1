<<<<<<< HEAD
<?php  
    require '../../config/includes.php';
    require '_session.php';

    $reqId = clean_int($_GET['reqId']);

    $getRequirements=selectRequirementById($reqId);
    $requirement=$getRequirements->fetch(PDO::FETCH_ASSOC);

    if (!empty($reqId)) {
        
        $request = approveRequirements($reqId, $requirement['user_code'], $requirement['school_id']);

        if ($request == true) {
            header("location: requests?note=approved");
        } else {
            header("location: requests?note=error");
        }

    }else{
        header("location: requests?note=invalid");
    }
    
=======
<?php  
    require '../../config/includes.php';
    require '_session.php';

    $reqId = clean_int($_GET['reqId']);

    $getRequirements=selectRequirementById($reqId);
    $requirement=$getRequirements->fetch(PDO::FETCH_ASSOC);

    if (!empty($reqId)) {
        
        $request = approveRequirements($reqId, $requirement['user_code'], $requirement['school_id']);

        if ($request == true) {
            header("location: requests?note=approved");
        } else {
            header("location: requests?note=error");
        }

    }else{
        header("location: requests?note=invalid");
    }
    
>>>>>>> 50738457b13b2043e6e07348bcdb0c2b7e3976f7
?>