<?php 
$theme_path = $base_path . drupal_get_path('theme', 'bismuth');
global $theme;
  ?>
<div id="toptab-wrapper">
    <div class="toptab">
        <div class="social-icons">
            <a href="http://facebook.com/knowingscience">
                <img height="35px" src="/sites/all/themes/bismuth/images/facebook.png">
            </a>
            <a href="http://twitter.com/knowing_science">
                <img height="35px" src="/sites/all/themes/bismuth/images/twitter.png">
            </a>
        </div>
    </div>
</div>

<?php /*
$icon_facebook = <?php echo path_to_theme() . '//images/facebook.png'; 
$icon_twitter = <?php echo path_to_theme() . '//images/twitter.png'; 
<div class="social-icons">
  <a href="http://facebook.com/knowingscience"><img src="<?php echo $icon_facebook; ?>" height="35px" /></a>
  <a href="http://twitter.com/knowing_science"><img src="<?php echo $icon_twitter; ?>" height="35px" /></a>
</div>
*/ ?>

<!--================================================== Header ==================================================-->

  <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ Top Nav ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<?php print render($page['topnav']); ?>


  <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ End TopNav ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


  <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ Main Nav ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


<?php /* This is odd because the header and the main content wrapper div overlap. 
       * The main navigation and hero slideshow divs are members both of the header area and the main content wrapper div. 
       */
?>
<div class="wrapper">
<?php include('nav.tpl.php'); ?> 

  <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ Hero Section ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
       <?php include('hero.tpl.php'); ?>
  <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ Hero Section ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
  
<!--============================================= End Header ==================================================-->


<!--================================================== Intro Block ==================================================-->
    <div class="purchase">
        <div class="container">
            <div class="row">
                <div class="col-md-9 animated fadeInLeft fullwidth-text">
<span style="color:#0056B0;">THE ONLY CURRICULUM 100% ALIGNED WITH THE NEXT GENERATION SCIENCE STANDARDS<a href="#ngss-tm">*</a></span>
                    <div class="fullwidth-left"><p>The <strong>KNOWING SCIENCE</strong> team, working with scientists, engineers, physicists, educators, and award-winning teachers developed an innovative and engaging curriculum that is based entirely on the NEXT GENERATION SCIENCE STANDARDS. Starting with the first draft of the FRAMEWORK FOR K-12 SCIENCE EDUCATION the KNOWING SCIENCE curriculum has been designed to provide unique and engaging learning experiences for all students, easy-to-implement lessons for teachers, and a foundation for school districts to transition to the new approach to teaching and learning science and engineering practices. </p></div>
                    <div class="col-md-3 btn-buy animated fadeInRight">
						<a href="contact" class="btn-u btn-u-lg"><i class="fa fa-envelope-o"></i> Find Out More</a>
					</div>
				</div>
            </div>
        </div>
    </div><!--/row-->
<!--================================================== End Intro Block ==================================================-->

<!--================================================== Main Content ==================================================-->
    <div class="container content-sm">
      
  <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ Triptych (User Segments) ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    	<div class="row margin-bottom-30">
        	<div class="col-md-4">
        		<div class="service">
        			<div class="triptych">
                <?php print render($page['triptych1']); ?>
        			</div>

        		</div>
        	</div>
        	<div class="col-md-4">
        		<div class="service">
              <div class="triptych">
                <?php print render($page['triptych2']); ?>
        			</div>
        		</div>
        	</div>
        	<div class="col-md-4">
        		<div class="service"> 			
              <div class="triptych">
                <?php print render($page['triptych3']); ?>
        			</div>
        		</div>
        	</div>
    	</div>
  <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ End Triptych ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


  <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ Gallery: Curriculum Kits ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
  <?php
    $image = array();
    $image['pre-k'] = theme(
      'image_style', array(
        'path' => 'public://images/covers/prek-ngss-curriculum-learning-to-think.png',
        'style_name' => 'cover_for_home_page',
        'class' => "img-responsive",
       )
    );
    $image['kinder'] = theme(
      'image_style', array(
        'path' => 'public://images/covers/kindergarten-ngss-curriculum-lets-compare.png',
        'style_name' => 'cover_for_home_page',
        'class' => "img-responsive",
       )
    );
    $image['1st-grade'] = theme(
      'image_style', array(
        'path' => 'public://images/covers/1st-grade-ngss-curriculum-movement.png',
        'style_name' => 'cover_for_home_page',
        'class' => "img-responsive",
       )
    );
    $image['2nd-grade'] = theme(
      'image_style', array(
        'path' => 'public://images/covers/2nd-grade-ngss-curriculum-whats-the-matter.png',
        'style_name' => 'cover_for_home_page',
        'class' => "img-responsive",
       )
    );
    $image['3rd-grade'] = theme(
      'image_style', array(
        'path' => 'public://images/covers/3rd-grade-ngss-curriculum.png',
        'style_name' => 'cover_for_home_page',
        'class' => "img-responsive",
       )
    );
    $image['4th-grade'] = theme(
      'image_style', array(
        'path' => 'public://images/covers/4th-grade-ngss-curriculum.png',
        'style_name' => 'cover_for_home_page',
        'class' => "img-responsive",
       )
    );
    $image['5th-grade'] = theme(
      'image_style', array(
        'path' => 'public://images/covers/5th-grade-ngss-curriculum.png',
        'style_name' => 'cover_for_home_page',
        'class' => "img-responsive",
       )
    );
    $image['6th-grade'] = theme(
      'image_style', array(
        'path' => 'public://images/covers/6th-grade-ngss-curriculum.png',
        'style_name' => 'cover_for_home_page',
        'class' => "img-responsive",
       )
    );
    
    
 ?>
 
    <div class="headline"><h2>Curriculum Kits</h2></div>                       
        <div class="row margin-bottom-20">
            <div class="col-md-3 col-sm-6">
                <div class="thumbnails thumbnail-style thumbnail-kenburn">
                	<div class="thumbnail-img">
                        <div class="overflow-hidden">
                            <!-- img class="img-responsive" src="<?php echo path_to_theme() . '/assets/img/main/sm_covers_prek.png' ?>" alt="" -->
                            <?php print $image['pre-k']; ?>

                        </div>
                        <a class="btn-more hover-effect" href="ngss-curriculum/pre-k">read more +</a>
                    </div>
                    <div class="caption">
                        <h3><a class="hover-effect" href="#">Pre-K</a></h3>
                        <p>Learning to Think invites our youngest learners to <b> experience</b> science in their own world.  They <b>classify</b> rocks according to observable characteristics.
                        <br>
                        They are <b> introduced </b> to the components of weather and <b> observe and record patterns </b> in weather conditions and seasonal changes.  Students <b>compare </b> traits of living and nonliving things.
</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnails thumbnail-style thumbnail-kenburn">
                    <div class="thumbnail-img">
                        <div class="overflow-hidden">
                            <!-- img class="img-responsive" src="<?php echo path_to_theme() . '/assets/img/covers/prek-ngss-curriculum-learning-to-think.png' ?>" alt="" -->
                                 <?php print $image['kinder']; ?>
                        </div>
                        <a class="btn-more hover-effect" href="ngss-curriculum/kindergarten">read more +</a>
                    </div>
                    <div class="caption">
                        <h3><a class="hover-effect" href="#">Kindergarden</a></h3>
                        <p>Let’s Compare invites young learners to <b> explore</b> how forces affect the way objects move.  They <b>observe and recognize patterns </b> in weather.  Students <b> compare </b> traits of living and nonliving things and <b> learn </b> how living things obtain basic needs necessary for survival.  </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="thumbnails thumbnail-style thumbnail-kenburn">
                    <div class="thumbnail-img">
                        <div class="overflow-hidden">
                            <!-- img class="img-responsive" src="<?php echo path_to_theme() . '/assets/img/main/sm_covers_1st.png' ?>" alt="" -->
                           <?php print $image['1st-grade']; ?>
                        </div>
                        <a class="btn-more hover-effect" href="ngss-curriculum/grade-1">read more +</a>
                    </div>
                    <div class="caption">
                        <h3><a class="hover-effect" href="#">Grade 1</a></h3>
                        <p>Movement introduces students to <b>properties</b> of light and sound energy.  They <b>observe</b>cycles and <b>patterns</b> in the apparent motion of the sun, moon phases and stars.  Students <b>make connections</b> between animal structures, families, and survival, and also between life cyclesin plants and animals.  </p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3 col-sm-6">
                <div class="thumbnails thumbnail-style thumbnail-kenburn">
                    <div class="thumbnail-img">
                        <div class="overflow-hidden">
                            <!-- img class="img-responsive" src="<?php echo path_to_theme() . '/assets/img/main/sm_covers_2nd.png' ?>" alt="" -->
                           <?php print $image['2nd-grade']; ?>

                        </div>
                        <a class="btn-more hover-effect" href="ngss-curriculum/grade-2">read more +</a>
                    </div>
                    <div class="caption">
                        <h3><a class="hover-effect" href="#">Grade 2</a></h3>
                        <p>What’s the Matter? <b>explores</b> the unique properties of matter and materials.  Students are<b> introduced</b> to the idea living things are interdependent within an ecosystem, and howfast and slow processes can shape Earth’s land and water features.  </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">   
            <div class="col-md-3 col-sm-6">
                <div class="thumbnails thumbnail-style thumbnail-kenburn">
                    <div class="thumbnail-img">
                        <div class="overflow-hidden">
                            <!-- img class="img-responsive" src="<?php echo path_to_theme() . '/assets/img/main/sm_covers_3rd.png' ?>" alt="" -->
                           <?php print $image['3rd-grade']; ?>
                        </div>
                        <a class="btn-more hover-effect" href="ngss-curriculum/grade-3">read more +</a>
                    </div>
                    <div class="caption">
                        <h3><a class="hover-effect" href="ngss-curriculum/grade-3">Grade 3</a></h3>
                        <p>In Grade 3, students <b> expand </B>their knowledge of life cycles and how variations of traits in organisms affect survival over time.  They deepen their<b> understanding</b> of weather and how its components combine to produce extreme weather. Students <b>investigate</b> the effects of balanced and unbalanced forces.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="thumbnails thumbnail-style thumbnail-kenburn">
                    <div class="thumbnail-img">
                        <div class="overflow-hidden">
                            <!-- img class="img-responsive" src="<?php echo path_to_theme() . '/assets/img/main/sm_covers_4th.png' ?>" alt="" -->
                           <?php print $image['4th-grade']; ?>
                        </div>
                        <a class="btn-more hover-effect" href="ngss-curriculum/grade-4">read more +</a>
                    </div>
                    <div class="caption">
                        <h3><a class="hover-effect" href="#">Grade 4</a></h3>
                        <p>In Grade 4, students<b> examine</b> how internal and external structures and behaviors in plants and animals affect growth and survival. They deepen their <b> understanding</b> of Earth’s surface and the processes that affect it.  Students observe patterns in the motion of various waves, and <b>investigate</b> how energy is transferred by sound, light, heat, and electric currents.  </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="thumbnails thumbnail-style thumbnail-kenburn">
                    <div class="thumbnail-img">
                        <div class="overflow-hidden">
                            <!-- img class="img-responsive" src="<?php echo path_to_theme() . '/assets/img/main/sm_covers_5th.png' ?>" alt="" -->
                           <?php print $image['5th-grade']; ?>
                        </div>
                        <a class="btn-more hover-effect" href="ngss-curriculum/grade-5">read more +</a>
                    </div>
                    <div class="caption">
                        <h3><a class="hover-effect" href="#">Grade 5</a></h3>
                        <p>In Grade 5, students <b>examine</b> the interconnectedness between Earth systems; its geosphere, hydrosphere, atmosphere, and biosphere, and how these systems interact with living things through photosynthesis and food webs.  They further<b> understand</b> patterns in the apparent motion of Sun, moon, and stars, and how matter is made from a combination of other materials too small to be seen. </p>
                    </div>
                </div>
            </div>



            <div class="col-md-3 col-sm-6">
                <div class="thumbnails thumbnail-style thumbnail-kenburn">
                    <div class="thumbnail-img">
                        <div class="overflow-hidden">
                          <?php print $image['6th-grade']; ?></div>
                        <a class="btn-more hover-effect" href="ngss-curriculum/grade-6">read more +</a>
                    </div>
                    <div class="caption">
                        <h3><a class="hover-effect" href="#">Grade  6</a></h3>
                        <p>In Grade 6, the Middle School NGSS standards begin and students delve deeply into Life Science, Earth Science, and Physical Science concepts.  For example, life Science provides an in-depth study of cells, senses and the nervous system, and how matter and energy flow through the living and nonliving parts of an ecosystem.</p>
                    </div>
                </div>
            </div>
        </div>
  <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ End Gallery ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

  <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ Info Section ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    	<div class="row margin-bottom-10">
             <p id="ks2">
                    <span id="title_1" style="padding-left:20px;">   Knowing Science<span class="ks2-tm">®</span></span>
                     will transition your school district to the <b>Next Generation Science Standards</b>
                    </p>
    		<!-- div class="col-md-8 md-margin-bottom-40" -->
      		


    			<!-- div class="headline"><h2>NGSS Stem Curriculum</h2></div -->
    		  <!-- h4><p id="ks1">Knowing Science <span id="title">provides<span></p></h4 -->
                <div class="row" id="transition">
                    <div class="col-sm-4">
                        <img class="img-responsive margin-bottom-0" src="<?php echo path_to_theme() . '/assets/img/kidknowledge/kk33.jpg' ?>" alt="">
                    </div>
                    <div class="col-sm-8">

                        <!-- br /><h2><p id="ks1">Knowing Science <span id="title">provides:<span></p></h2 -->

<?php print render($page['highlighted']); ?>    
                        
                    </div>  
                  </div>
                </div>
              </div>
              
              <!-- small>(this could be a quote or a summary of the main mesage)</small> -->

        <div class="divide40"></div>
          <div class="intro-text-1 light">
            <div class="container">

                <div class="row">      
					        <div class="col-sm-8 col-sm-offset-2 col-sm-test">  					
						        
                  </div>
                </div>    
				        <div class="row">
					        <div class="col-sm-8 col-sm-offset-2">
						        <?php
							      $block = module_invoke('views', 'block_view', 'ks_testimonials-block_1');
							      print render($block['content']);
						        ?>
                  </div>
                </div>
            </div>
                
            <!-- /div --><!--/col-md-8-->
  <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ End Info ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

  <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ Mini-Gallery Block ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
          <!-- div class="col-md-4">
    			<div class="headline"><h2>New eBooks</h2></div>
    			<div id="myCarousel" class="carousel slide carousel-v1">
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="<?php echo path_to_theme() . '/assets/img/main/img1.jpg' ?>" alt="">
                            <div class="carousel-caption">
                                <p>Facilisis odio, dapibus ac justo acilisis gestinas.</p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="<?php echo path_to_theme() . '/assets/img/main/img2.jpg' ?>" alt="">
                            <div class="carousel-caption">
                                <p>Cras justo odio, dapibus ac facilisis into egestas.</p>
                            </div>
                            </div>
                        <div class="item">
                            <img src="<?php echo path_to_theme() . '/assets/img/main/img3.jpg' ?>" alt="">
                            <div class="carousel-caption">
                                <p>Justo cras odio apibus ac afilisis lingestas de.</p>
                            </div>
                        </div>                        <div class="item">
                            <img src="<?php echo path_to_theme() . '/assets/img/main/img4.jpg' ?>" alt="">
                            <div class="carousel-caption">
                                <p>Justo cras odio apibus ac afilisis lingestas de.</p>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-arrow">
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
    			</div>
                <p>New Knowin Science eBooks series with high-interest short stories that introduce concepts and vocabulary; explanations and summaries written with language that directly relates to student daily experiences; interactive video game-style activities that reinforce learning; and self-checking review questions.</p>
            </div><!--/col-md-4-->
            
    	</div>
  <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ End Mini-Gallery ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    </div><!--/container-->
    <!-- End Content Part -->


  <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ Awards Block ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

        
<div>          
  
  <div class="container">
            
             
                                    
              <div class="row margin-top-40" style="margin-top:40px;">      
                <div class="col-sm-6">
                        <h2 class="animated slideInDown">  Award Winning NGSS Curriculum
                        </h2>

                <div class="hero-unify">
                    <p> Winner of the 2014 Be the change for Kids innovation award 
                    </p>
                    <p> 100% alignment to Next Generation Science Standards</p>
                    
                </div>    
            
                    </div>
                    <div class="col-sm-6">
                      <iframe width="560" height="315" src="https://www.youtube.com/embed/S3RkyGXJ4H0" frameborder="0" allowfullscreen></iframe>
                    </div>
                  </div>

                <hr>

                                    <div class="row margin-bottom-40">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-2">
                      <img src="<?php echo path_to_theme() . '/assets/img/main/texas.png' ?>" alt="" height="150">
                    </div>
                    
                    <div class="col-sm-7">
                      <h4 class="animated slideInDown">Texas adopts Knowing Science Curriculum</h4>
                      <p>The Texas State Board of Education adopted instructional materials under Proclamation 2014 at their November 2013 meeting. Proclamation 2014 includes Knowing Science K­2 Teachers Manuals, STEM kits, and Literacy Books..
                      </p>                   
                      <p><a href="samples-texas-edition">View Texas Edition Sample lessons here</a></p>
                    </div>

                  </div>                
                
         <hr>
                
                
            </div>
        </div><!--awards v-2 end-->

  <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ End Awards ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


  <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ New eBooks ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


        <div class="divide40"></div>


    <div class="container">
<div class="col-sm-1"></div>
<div class="col-sm-10">        
  <h4> New Knowing Science eBooks series with high-interest short stories that introduce concepts and vocabulary; explanations and summaries written with language that directly relates to student daily experiences; interactive video game-style activities that reinforce learning; and self-checking review questions. </h4>
<div class="col-sm-1"></div>  
</div>


<div class="container">

<div class="col-sm-2">
<a href="https://itunes.apple.com/us/book/physics/id990012481?mt=11"><img src="http://www.knowingscience.com/sites/default/files/PS.png"></a>
</div>
<div class="col-sm-1"></div>

<div class="col-sm-2">
<a href="https://itunes.apple.com/us/book/life-science/id989783450?mt=11"><img src="http://www.knowingscience.com/sites/default/files/LS.png"></a>
</div>
<div class="col-sm-1"></div>

<div class="col-sm-2">
<a href="https://itunes.apple.com/us/book/earth-science/id989875715?mt=11"><img src="http://www.knowingscience.com/sites/default/files/ES.png"></a>
</div>
<div class="col-sm-1"></div>

<div class="col-sm-1">
<a href="https://itunes.apple.com/us/book/data-and-experiments/id988240696?ls=1&mt=11"><img src="http://www.knowingscience.com/sites/default/files/Data.png"></a>
</div>
<div class="col-sm-1"></div>
  </div> 
  </div> 

<div class="container">
<h4>
NEW! Hard copies of the interactive Knowing Science eBooks are available through Amazon.com. Click on the link to buy them: <a href="http://www.amazon.com/Physics-Knowing-Science-eBooks-Capasso/dp/1511961244">Physics</a>, <a href="http://www.amazon.com/Earth-Science-Knowing-eBooks/dp/151221633X">Earth Science</a>, <a href="http://www.amazon.com/Life-Science-Knowing-eBooks/dp/1512175773">Life Science</a>, and <a href="http://www.amazon.com/Data-Experiments-Knowing-Science-eBooks/dp/1512078808/">Data and Experiments</a>
</h4>
</div>

  <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ End eBooks ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->



  <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ FINAL CTA ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

        <div class="divide40"></div>
          <div class="intro-text-1 light">



            <div class="container">
              
<div class="col-sm-4"></div>


<div class="col-sm-4">
  

  <p>Knowing Science is the most advanced and only 100% NGSS aligned Pre-K to Grade-6 STEM Curriculum. Contact us to find out how to use Knowing Science in your school or classroom today.</p>
  
  
                      <div class="col-md-3 btn-buy animated fadeInRight">
						<a href="contact" class="btn-u btn-u-lg"><i class="fa fa-envelope-o"></i> Find Out More</a>
					</div>
</div>
<div class="col-sm-4"></div>
                  
                  
            </div>
        </div> <!--intro text end-->


<?php include('footer.tpl.php'); ?> 
    
    
    
</div><!--/wrapper-->

<!-- JS Global Compulsory -->


<script type="text/javascript">
    jQuery(document).ready(function() {
      	App.init();
        OwlCarousel.initOwlCarousel();
        ParallaxSlider.initParallaxSlider();
    });
</script>
<!--[if lt IE 9]>
    <script src="assets/plugins/respond.js"></script>
    <script src="assets/plugins/html5shiv.js"></script>
    <script src="assets/plugins/placeholder-IE-fixes.js"></script>
<![endif]-->


   <!--scripts and plugins -->
        <!--must need plugin jquery-->
        <script src="../assets/js/jquery.min.js"></script>
        <script src="../assets/js/jquery-migrate.min.js"></script> 
        <!--bootstrap js plugin-->
        <script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>       
        <!--easing plugin for smooth scroll-->
        <script src="../assets/js/jquery.easing.1.3.min.js" type="text/javascript"></script>
        <!--sticky header-->
        <script type="text/javascript" src="../assets/js/jquery.sticky.js"></script>
        <!--flex slider plugin-->
        <script src="../assets/js/jquery.flexslider-min.js" type="text/javascript"></script>
        <!--parallax background plugin-->
        <script src="../assets/js/jquery.stellar.min.js" type="text/javascript"></script>
        <!--digit countdown plugin-->
        <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
        <!--digit countdown plugin-->
        <script src="../assets/js/jquery.counterup.min.js" type="text/javascript"></script>
        <!--on scroll animation-->
        <script src="../assets/js/wow.min.js" type="text/javascript"></script> 
        <!--owl carousel slider-->
        <script src="../assets/js/owl.carousel.min.js" type="text/javascript"></script>
        <!--popup js-->
        <script src="../assets/js/jquery.magnific-popup.min.js" type="text/javascript"></script>
        <!--you tube player-->
        <script src="../assets/js/jquery.mb.YTPlayer.min.js" type="text/javascript"></script>        
        <!--customizable plugin edit according to your needs-->
        <script src="../assets/js/custom.js" type="text/javascript"></script>

        <!--revolution slider plugins-->
        <script src="rs-plugin/js/jquery.themepunch.tools.min.js" type="text/javascript"></script>
        <script src="rs-plugin/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>
        <script src="js/revolution-custom.js" type="text/javascript"></script>
        <!--cube portfolio plugin-->
        <script src="cubeportfolio/js/jquery.cubeportfolio.min.js" type="text/javascript"></script>
        <script src="js/cube-portfolio.js" type="text/javascript"></script>
        <script src="js/pace.min.js" type="text/javascript"></script>

