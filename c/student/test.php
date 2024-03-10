<<<<<<< HEAD
<?php  
    require '../../config/includes.php';
    require '_session.php';

    $string = $profile['profile_skills'];
    $tagsArray = explode(",", $string);
    $tagsArray = array_map('trim', $tagsArray);
    $conditions = array();

    foreach ($tagsArray as $tag) {
        $conditions[] = "post_tags LIKE '%" . clean_string($tag) . "%'";
    }

    $countResults=dataLink()->prepare("SELECT * From posts
                                    LEFT JOIN
                                    business_profiles
                                    ON
                                    posts.user_code = business_profiles.user_code
                                    Where
                                    " . implode(" OR ", $conditions) . "
                                    Order By 
                                    post_views
                                    DESC");
    $countResults->execute();

    $count=$countResults->rowCount();

    echo $count;
=======
<?php  
    require '../../config/includes.php';
    require '_session.php';

    $string = $profile['profile_skills'];
    $tagsArray = explode(",", $string);
    $tagsArray = array_map('trim', $tagsArray);
    $conditions = array();

    foreach ($tagsArray as $tag) {
        $conditions[] = "post_tags LIKE '%" . clean_string($tag) . "%'";
    }

    $countResults=dataLink()->prepare("SELECT * From posts
                                    LEFT JOIN
                                    business_profiles
                                    ON
                                    posts.user_code = business_profiles.user_code
                                    Where
                                    " . implode(" OR ", $conditions) . "
                                    Order By 
                                    post_views
                                    DESC");
    $countResults->execute();

    $count=$countResults->rowCount();

    echo $count;
>>>>>>> 50738457b13b2043e6e07348bcdb0c2b7e3976f7
?>