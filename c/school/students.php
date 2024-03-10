<<<<<<< HEAD
<?php  
    require '../../config/includes.php';
    require '_session.php';

    $title = "Student List";
    include 'student.paginate.php';
?>

<!DOCTYPE html>
<html lang="en">

<?php include '_head.php'; ?>

<body class="sidebar-dark">
    <div class="container-scroller">
        
        <?php include '_navbar.php'; ?>
        
        <div class="container-fluid page-body-wrapper">

        <?php include '_sidebar.php'; ?>

            <div class="main-panel">
                <div class="content-wrapper">
                    
                    <?php include '_breads.php'; ?>

                    <div class="row">
                        
                        <?php 
                            include '_reminder.php';
                        ?>
                        
                    </div>

                    <div class="row">
                        <div class="col-md-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <p class="card-title">
                                        <i class="ti-user"></i> List of Students
                                        <span class="float-end text-lowercase"><?= $countRes ?> result(s)</span>
                                    </p>
                                    <form action="_redirect" enctype="multipart/form-data" method="post">
                                        <div class="form-group">
                                            <input type="text" name="studentSearch" id="studentSearch" class="form-control" placeholder="search here ..." autofocus required>
                                        </div>
                                    </form>
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover">
                                            <thead>
                                                <tr class="table-dark">
                                                    <th class="text-center">Info</th>
                                                    <th class="text-center">Applications</th>
                                                    <th>Name</th>
                                                    <th>School</th>
                                                    <th>Course</th>
                                                    <th class="text-center">Gender</th>
                                                    <th class="text-center">Verified</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php  
                                                    while ($profile=$paginate->fetch(PDO::FETCH_ASSOC)) {

                                                        if ($profile['profile_verified'] == 1) {
                                                            $verified = "verified";
                                                            $verifiedIcon = "<i class='ti-check'></i>";
                                                        } else {
                                                            $verified = "unverified";
                                                            $verifiedIcon = "<i class='ti-close'></i>";
                                                        }
                                                        
                                                ?>
                                                <tr class="">
                                                    <td class="text-center">
                                                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#info_<?= $profile['profile_id'] ?>">
                                                            <i class="ti-user"></i>
                                                        </button>
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="studentApplications?token=<?= my_rand_str(30) ?>&usercode=<?= $profile['user_code'] ?>" target="_blank">
                                                            <button type="button" class="btn btn-info btn-sm">
                                                                <i class="ti-list"></i>
                                                            </button>
                                                        </a>
                                                    </td>
                                                    <td><?= getUserFullnameByCode($profile['user_code']) ?></td>
                                                    <td><?= getSchoolName($profile['school_id']) ?></td>
                                                    <td><?= $profile['profile_course'] ?></td>
                                                    <td class="text-center"><?= $profile['profile_gender'] ?></td>
                                                    <td class="text-center"><?= $verified ?></td>
                                                </tr>

                                                <div class="modal fade" id="info_<?= $profile['profile_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-sm" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="ModalLabel"><i class="ti-user"></i> Student info</h5>
                                                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <ul>
                                                                    <li>Name: <span class="text-primary text-bold"><?= getUserFullnameByCode($profile['user_code']) . " " . $verifiedIcon ?></span></li>
                                                                    <li>School: <span class="text-primary text-bold"><?= getSchoolName($profile['school_id']) ?></span></li>
                                                                    <li>Course: <span class="text-primary text-bold"><?= $profile['profile_course'] ?></span></li>
                                                                    <li>Gender: <span class="text-primary text-bold"><?= $profile['profile_gender'] ?></span></li>
                                                                    <li>Contact: <span class="text-primary text-bold"><?= $profile['profile_contact'] ?></span></li>
                                                                    <li>Address: <span class="text-primary text-bold"><?= $profile['profile_address'] ?></span></li>
                                                                    <li>City: <span class="text-primary text-bold"><?= getCityName($profile['city_id']) ?></span></li>
                                                                    <li>Country: <span class="text-primary text-bold"><?= $profile['profile_country'] ?></span></li>
                                                                    <li>Created: <span class="text-primary text-bold"><?= proper_date($profile['profile_created']) ?></span></li>
                                                                </ul>

                                                                <p>Skills: </p>
                                                                <?php  
                                                                    $tagsArray = explode(',', $profile['profile_skills']);
                                                                    foreach ($tagsArray as $tags) {
                                                                ?>

                                                                <span class="badge badge-primary mt-2"><?= $tags ?></span> 

                                                                <?php } ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="float-right mt-4">
                                <ul class="pagination flex-wrap pagination-rounded">
                                    <?= $paginationCtrls; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                
                <?php include '_footer.php'; ?>

                </div>
            </div>
        </div>
    </div>

    <!-- modals -->

    <?php include '_scripts.php'; ?>

</body>

</html>

=======
<?php  
    require '../../config/includes.php';
    require '_session.php';

    $title = "Student List";
    include 'student.paginate.php';
?>

<!DOCTYPE html>
<html lang="en">

<?php include '_head.php'; ?>

<body class="sidebar-dark">
    <div class="container-scroller">
        
        <?php include '_navbar.php'; ?>
        
        <div class="container-fluid page-body-wrapper">

        <?php include '_sidebar.php'; ?>

            <div class="main-panel">
                <div class="content-wrapper">
                    
                    <?php include '_breads.php'; ?>

                    <div class="row">
                        
                        <?php 
                            include '_reminder.php';
                        ?>
                        
                    </div>

                    <div class="row">
                        <div class="col-md-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <p class="card-title">
                                        <i class="ti-user"></i> List of Students
                                        <span class="float-end text-lowercase"><?= $countRes ?> result(s)</span>
                                    </p>
                                    <form action="_redirect" enctype="multipart/form-data" method="post">
                                        <div class="form-group">
                                            <input type="text" name="studentSearch" id="studentSearch" class="form-control" placeholder="search here ..." autofocus required>
                                        </div>
                                    </form>
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover">
                                            <thead>
                                                <tr class="table-dark">
                                                    <th class="text-center">Info</th>
                                                    <th class="text-center">Applications</th>
                                                    <th>Name</th>
                                                    <th>School</th>
                                                    <th>Course</th>
                                                    <th class="text-center">Gender</th>
                                                    <th class="text-center">Verified</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php  
                                                    while ($profile=$paginate->fetch(PDO::FETCH_ASSOC)) {

                                                        if ($profile['profile_verified'] == 1) {
                                                            $verified = "verified";
                                                            $verifiedIcon = "<i class='ti-check'></i>";
                                                        } else {
                                                            $verified = "unverified";
                                                            $verifiedIcon = "<i class='ti-close'></i>";
                                                        }
                                                        
                                                ?>
                                                <tr class="">
                                                    <td class="text-center">
                                                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#info_<?= $profile['profile_id'] ?>">
                                                            <i class="ti-user"></i>
                                                        </button>
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="studentApplications?token=<?= my_rand_str(30) ?>&usercode=<?= $profile['user_code'] ?>" target="_blank">
                                                            <button type="button" class="btn btn-info btn-sm">
                                                                <i class="ti-list"></i>
                                                            </button>
                                                        </a>
                                                    </td>
                                                    <td><?= getUserFullnameByCode($profile['user_code']) ?></td>
                                                    <td><?= getSchoolName($profile['school_id']) ?></td>
                                                    <td><?= $profile['profile_course'] ?></td>
                                                    <td class="text-center"><?= $profile['profile_gender'] ?></td>
                                                    <td class="text-center"><?= $verified ?></td>
                                                </tr>

                                                <div class="modal fade" id="info_<?= $profile['profile_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-sm" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="ModalLabel"><i class="ti-user"></i> Student info</h5>
                                                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <ul>
                                                                    <li>Name: <span class="text-primary text-bold"><?= getUserFullnameByCode($profile['user_code']) . " " . $verifiedIcon ?></span></li>
                                                                    <li>School: <span class="text-primary text-bold"><?= getSchoolName($profile['school_id']) ?></span></li>
                                                                    <li>Course: <span class="text-primary text-bold"><?= $profile['profile_course'] ?></span></li>
                                                                    <li>Gender: <span class="text-primary text-bold"><?= $profile['profile_gender'] ?></span></li>
                                                                    <li>Contact: <span class="text-primary text-bold"><?= $profile['profile_contact'] ?></span></li>
                                                                    <li>Address: <span class="text-primary text-bold"><?= $profile['profile_address'] ?></span></li>
                                                                    <li>City: <span class="text-primary text-bold"><?= getCityName($profile['city_id']) ?></span></li>
                                                                    <li>Country: <span class="text-primary text-bold"><?= $profile['profile_country'] ?></span></li>
                                                                    <li>Created: <span class="text-primary text-bold"><?= proper_date($profile['profile_created']) ?></span></li>
                                                                </ul>

                                                                <p>Skills: </p>
                                                                <?php  
                                                                    $tagsArray = explode(',', $profile['profile_skills']);
                                                                    foreach ($tagsArray as $tags) {
                                                                ?>

                                                                <span class="badge badge-primary mt-2"><?= $tags ?></span> 

                                                                <?php } ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="float-right mt-4">
                                <ul class="pagination flex-wrap pagination-rounded">
                                    <?= $paginationCtrls; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                
                <?php include '_footer.php'; ?>

                </div>
            </div>
        </div>
    </div>

    <!-- modals -->

    <?php include '_scripts.php'; ?>

</body>

</html>

>>>>>>> 50738457b13b2043e6e07348bcdb0c2b7e3976f7
