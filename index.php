<?php /* Template Name: Flatfy  */ ?>
<?php get_header(); ?>

<header>
      <div class="container-fluid">
          <div class="col-xs-12 first-title">
             <div class="font-color">
                  <h1>Flatfy</h1>
                  <h3>Clean & minimal Theme</h3>
                  <ul class="header-link">
                      <li><a class="btn btn-header btn-twitter" href="#"><span class="btn-police">Twitter</span></a></li>
                      <li><a class="btn btn-header btn-download" href="#"><span class="btn-police">Free Download</span></a></li>
                  </ul>
             </div>
          </div>
          <div class="col-xs-12 arrow-direction">
          </div>
      </div>
  </header>

  <nav class="navbar-default">
       <div class="container">
           <div class="navbar-header">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <div>
                   <a class="navbar-brand" href="#">Flatfy</a>
               </div>
           </div>
           <div class="header-menu navbar-right">
               <ul class="nav navbar-nav">
                   <li><a href="#">What is?</a></li>
                   <li><a href="#">Use It</a></li>
                   <li><a href="#">Screenshot</a></li>
                   <li><a href="#">Credits</a></li>
                   <li><a href="#">Contact</a></li>
               </ul>
           </div>
       </div>
  </nav>

<div class="first-section">
   <div class="container">
   <h2>What is?</h2>
   <p class="stylish">A special thanks to Death.</p>
   </div>
   </div>

<main>
   <div class="container container-main">

   <?php $args = array(  'orderby'  => 'date',
                         'order'    => 'ASC',
                         'posts_per_page'   => 6,);
              $posts = get_posts($args);
              foreach ($posts as $post) {
                  setup_postdata($post); ?>
                  <div class='col-md-4'>
                  <?php the_post_thumbnail('full') ?>
                  <h2 class="text-center"><?php the_title() ?></h2>
                  <p class="text-center"><?php the_content() ?></p>
                  </div>
                  <?php
              }?>

    </div>

<div class="tablet">
   <div class="container">

   <?php $args = array(  'orderby'  => 'date',
                          'category' => '2',
                          'order'    => 'ASC',
                          'posts_per_page'   => 6,);
          $posts = get_posts($args);
          foreach ($posts as $post) {
              setup_postdata($post); ?>
              <div class="col-md-6">
                <h2 class="text-left"><?php the_title() ?></h2>
                  <p class="text"><?php the_content() ?></p>
                    <a class="btn btn-primary" href="#">View Details</a>
                    <a class="btn btn-info" href="#">Visit Website</a>
              </div>
                <div class='col-md-6'>
                  <?php the_post_thumbnail('full') ?>
                </div>
              <?php
          }?>

   </div>
</div>

   <div class="container iphone">

   <?php $args = array(  'orderby'  => 'date',
                         'category' => '3',
                         'order'    => 'ASC',
                         'posts_per_page'   => 6,);
                  $posts = get_posts($args);
                  foreach ($posts as $post) {
                      setup_postdata($post); ?>
                  <div class='col-md-6'>
                    <?php
    echo do_shortcode("[metaslider id=78]");
?>
               </div>
                  <div class="col-md-6">
                    <h2 class="text-left"><?php the_title() ?></h2>
                      <p class="text"><?php the_content() ?></p>
                        <a class="btn btn-primary" href="#">View Details</a>
                        <a class="btn btn-info" href="#">Visit Website</a>
                   </div>
                      <?php
                  }?>
   </div>

<div class="dog">
   <div class="container">

   <?php $args = array(  'orderby'  => 'date',
                         'category' => '4',
                         'order'    => 'ASC',
                         'posts_per_page'   => 6,);
                          $posts = get_posts($args);
                          foreach ($posts as $post) {
                              setup_postdata($post); ?>
                        <div class='col-md-6'>
                        <h2 class="text-left"><?php the_title() ?></h2>
                        <p class="text"><?php the_content() ?></p>
                        </div>
                        <div class="col-md-6">

                        <?php the_post_thumbnail('full') ?>
                     </div>
                              <?php
                          }?>
   </div>
</div>

   <div class="container skate">
      <h2>Screen App</h2>
        <p>Special Thanks To Death</p>

   <?php $args = array(  'orderby'  => 'date',
                         'category' => '9',
                         'order'    => 'ASC',
                         'posts_per_page'   => 3,);
                        $posts = get_posts($args);
                        foreach ($posts as $post) {
                            setup_postdata($post); ?>
                            <div class='col-md-4'>
                        <?php the_post_thumbnail('full') ?>
                            </div>
                        <?php
                        }?>
   </div>

     <div class="third-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center white">
                        <h2>Get Live Updates</h2>
                          <p class="stylish">A special thanks to Death.</p>
                    </div>
                    <div class="col-md-6 col-md-offset-3 text-center">
                        <div>
                            <button type="button">Subscribe to our Newsletter</button>
                        </div>
                    </div>
                </div>
            </div>
      </div>

        <div class="container credits">
           <h2>Crédits</h2>
            <p>Special Thanks To Death</p>
        <?php $args = array(  'orderby'  => 'date',
                              'category' => '6',
                              'order'    => 'ASC',
                              'posts_per_page'   => 4,);
                             $posts = get_posts($args);
                             foreach ($posts as $post) {
                                 setup_postdata($post); ?>
                                 <div class="col-md-6">
                                   <div class="col-md-4">
                                     <i class="fa fa-<?php echo get_post_meta($post->ID, 'fa_icon', true) ?> fa-4x" aria-hidden="true"></i>
                                   </div>
                        <div class="col-md-8">
                          <?php the_title() ?>
                            <?php the_content() ?>
                        </div>
                    </div>
                             <?php
                             }?>
        </div>


  <div class="download-free">
       <div class="container">
           <div class="row">
               <div class="col-md-6 col-md-offset-4">
                   <h2 class="h2-free">Download Free</h2>
                   <p class="stylish"></p>
                   <iframe src="http://www.paywithatweet.com/dlbutton03.php?id=d0d9ce11-7109-4553-81db-9a18d72936f8" name="paytweet_button" scrolling="no" frameborder="no" height="48px" width="292px"></iframe>
               </div>
           </div>
       </div>
  </div>

  <div class="background-section">
    <div class="container">
      <div class="row">
        <form role="form" action="" method="post">
          <div class="col-md-6">
            <div class="form-group">
              <label for="InputName">Your Name</label>
                <div class="input-group">
                  <input class="form-control" name="InputName" id="InputName" placeholder="Enter Name" required="" type="text">
                   <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
                </div>
            </div>

            <div class="form-group">
              <label for="InputEmail">Your Email</label>
                <div class="input-group">
                  <input class="form-control" id="InputEmail" name="InputEmail" placeholder="Enter Email" required="" type="email">
                   <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
                </div>
           </div>

          <div class="form-group">
            <label for="InputMessage">Message</label>
              <div class="input-group">
                <textarea name="InputMessage" id="InputMessage" class="form-control" rows="5" required=""></textarea>
                  <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
              </div>
          </div>
          <input style="visibility: visible;" name="submit" id="submit" value="Submit" class="btn btn-primary pull-right" type="submit">
          </div>

          <div class="col-md-5 col-md-push-1">
            <address>
              <h3>Office Location</h3>
                <p class="stylish">
                    The Pentagon<br>
                    Washington, DC 20301<br>
                    Phone: XXX-XXX-XXXX<br>
                    Fax: XXX-XXX-YYYY
                </p>
            </address>
              <h3>Social</h3>
                <li class="social">
                  <a href="#"><i class="fa fa-facebook-square fa-size"> </i></a>
                  <a href="#"><i class="fa  fa-twitter-square fa-size"> </i> </a>
                  <a href="#"><i class="fa fa-google-plus-square fa-size"> </i></a>
                  <a href="#"><i class="fa fa-flickr fa-size"> </i> </a>
                </li>
            </div>
        </form>
    </div>
      </div>
     </div>
</main>

<footer class="footer-grey">
      <div class="container">
          <div class="row">
              <div class="col-md-7">
                  <h3>Follow Me !</h3>
                  <p>Vuoi ricevere news su altri template?<br> Visita Andrea Galanti.it e vedrai tutte le news riguardanti nuovi Theme!<br> Go to: <a href="#">andreagalanti.it</a><br>
                      <a href="#">Flatfy Theme</a> by <a href="#">Andrea Galanti</a> is licensed to the public under<br> the <a href="#">Creative Commons Attribution 3.0 License - NOT COMMERCIAL</a>.</p>
              </div>
              <div class="col-md-5 footer-blue">
                  <h3>Flatfy Theme</h3>
                  <ul>
                      <li>12 Column Grid Bootstrap</li>
                      <li>Form contact</li>
                      <li>Drag Gallery</li>
                      <li>Full responsive</li>
                      <li>Lorem Ipsum</li>
                  </ul>
                  <p>Go to: <a href="#">andreagalanti.it/flatfy</a></p>
              </div>
          </div>
      </div>
  </footer>
<?php get_footer() ?>
