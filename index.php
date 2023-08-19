<?php  
    require 'config/includes.php';
    require '_config.php';

    $email = @$_GET['email'];

    $title = "InternBuilders";
?>

<!doctype html>
<html lang="en">
    
    <?php include '_head.php'; ?>

  <body id="top">

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    
    <?php include '_navbar.php' ?>

    <!-- HOME -->
    <section class="home-section section-hero overlay bg-image" style="background-image: url('images/hero_1.jpg');" id="home-section">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-12">
            <div class="mb-5 text-center">
              <h1 class="text-white font-weight-bold text-capitalize">the ultimate destination for interns</h1>
              <p>Our platform is designed to simplify the process for you</p>
            </div>
            <form class="search-jobs-form">
              <div class="row mb-5">
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                  <input type="text" class="form-control form-control-lg" placeholder="Job title, Company...">
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                  <select name="city" class="selectpicker" data-style="btn-white btn-lg" data-width="100%" data-live-search="true" title="Select City">
                    <?php  
                        $getCities=selectCities();
                        while ($city=$getCities->fetch(PDO::FETCH_ASSOC)) {
                    ?>
                    <option value="<?= $city['city_id'] ?>"><?= $city['city_name'] ?></option>
                    <?php } ?>
                  </select>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                  <select class="selectpicker" data-style="btn-white btn-lg" data-width="100%" data-live-search="true" title="Select Job Type">
                    <option>Part Time</option>
                    <option>Full Time</option>
                  </select>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                  <button type="button" class="btn btn-primary btn-lg btn-block text-white btn-search" data-toggle="modal" data-target="#login"><span class="icon-search icon mr-2"></span>Search Job</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

      <a href="#next" class="scroll-button smoothscroll">
        <span class=" icon-keyboard_arrow_down"></span>
      </a>

    </section>
    
    <section class="py-5 bg-image overlay-primary fixed overlay" id="next" style="background-image: url('images/hero_1.jpg');">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-7 text-center">
            <h2 class="section-title mb-2 text-white">InternBuilders Site Stats</h2>
          </div>
        </div>
        <div class="row pb-0 block__19738 section-counter">

          <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
            <div class="d-flex align-items-center justify-content-center mb-2">
              <strong class="number" data-number="<?= countProfiles() ?>">0</strong>
            </div>
            <span class="caption">Candidates</span>
          </div>

          <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
            <div class="d-flex align-items-center justify-content-center mb-2">
              <strong class="number" data-number="<?= countPostsAll() ?>">0</strong>
            </div>
            <span class="caption">Jobs Posted</span>
          </div>

          <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
            <div class="d-flex align-items-center justify-content-center mb-2">
              <strong class="number" data-number="<?= countApplicantsHired() ?>">0</strong>
            </div>
            <span class="caption">Jobs Filled</span>
          </div>

          <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
            <div class="d-flex align-items-center justify-content-center mb-2">
              <strong class="number" data-number="<?= countBusinessProfiles() ?>">0</strong>
            </div>
            <span class="caption">Business</span>
          </div>

            
        </div>
      </div>
    </section>

    

    <section class="site-section">
      <div class="container">

        <div class="row mb-5 justify-content-center">
          <div class="col-md-7 text-center">
            <h2 class="section-title mb-2">Latest jobs on <?= $projectName ?></h2>
          </div>
        </div>
        
        <div class="row mb-4">
            <?php  
                $getPosts=selectPostsRecent();
                while ($post=$getPosts->fetch(PDO::FETCH_ASSOC)) {
            ?>
              
              <div class="col-md-3">
                <div class="card">
                  <div class="card-body">
                    <p class="m-0 text-bold text-dark"><?= $post['post_category'] ?></p>
                    <p class="business-text m-0"><?= getBusinessName($post['user_code']) ?></p>

                    <hr>

                    <p class="small-text m-2"><span class="icon-room"></span> <?= getCityName($post['city_id']) ?></p>
                    <p class="small-text m-2"><span class="icon-money"></span> <?= $post['post_salary_from'] . " - " . $post['post_salary_to'] ?></p>
                    <p class="small-text m-2"><span class="icon-calendar-o"></span> <?= getTimePassed($post['post_created'], date("Y-m-d H:i:s")) ?></p>

                    <a href="#" data-toggle="modal" data-target="#login" class="small-text float-right text-primary mt-4">View details >></a>
                  </div>
                </div>
              </div>

            <?php } ?>

        </div>

      </div>
    </section>

    <section class="py-5 bg-image overlay-primary fixed overlay" style="background-image: url('images/hero_1.jpg');">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-8">
            <h2 class="text-white">Looking For Internship?</h2>
            <p class="mb-0 text-white lead">Looking for an internship opportunity to gain valuable hands-on experience and contribute to a dynamic and innovative team?</p>
          </div>
          <div class="col-md-3 ml-auto">
            <a href="student" class="btn btn-warning btn-block btn-lg">Sign Up</a>
          </div>
        </div>
      </div>
    </section>

    
    <section class="site-section py-4">
      <div class="container">
  
        <div class="row align-items-center">
          <div class="col-12 text-center mt-4 mb-5">
            <div class="row justify-content-center">
              <div class="col-md-7">
                <h2 class="section-title mb-2">Reviews</h2>
                <p class="lead">We take pride in our track record of successfully assisting a diverse range of businesses across various industries. Here are some examples of the businesses we have helped.</p>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </section>


    <section class="bg-light pt-5 testimony-full">
        
        <div class="owl-carousel single-carousel">

        
          <div class="container">
            <div class="row">
              <div class="col-lg-12 align-self-center text-center">
                <blockquote>
                  <p>&ldquo;We have supported numerous startups by providing strategic guidance, conducting market research, and assisting with business planning and development. Our tailored solutions have helped these startups establish a strong foundation and navigate their initial stages of growth.&rdquo;</p>
                  <p><cite> &mdash; Corey Woods, @Dribbble</cite></p>
                </blockquote>
              </div>
            </div>
          </div>

          <div class="container">
            <div class="row">
              <div class="col-lg-12 align-self-center text-center">
                <blockquote>
                  <p>&ldquo;We have partnered with retail and e-commerce businesses to optimize their online presence, improve customer experience, and implement effective digital marketing strategies. Through our expertise, these businesses have achieved increased brand visibility, enhanced customer engagement, and improved sales performance.&rdquo;</p>
                  <p><cite> &mdash; Chris Peters, @Google</cite></p>
                </blockquote>
              </div>
            </div>
          </div>

      </div>

    </section>
    
    <?php include '_footer.php'; ?>
  
  </div>

    <?php include '_modals.php'; ?>
    <?php include '_scripts.php'; ?>
    <?php include '_alerts.php'; ?>

    <?php  
        $modal = @$_GET['modal'];

        if ($modal == 1) {
            echo "
                <script>
                    $(document).ready(function(){
                        $('#login').modal('show');
                    });
                </script>
            ";
        } else {
            echo "";
        }
        
    ?>
     
  </body>
</html>