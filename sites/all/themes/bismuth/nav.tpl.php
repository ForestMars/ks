<?php  ?> 

    <!--=== Header ===-->
    <div class="header">
        <div class="container">
            <!-- Logo -->
            <a class="logo" href="index.html">
                <img src="<?php echo path_to_theme() . '/assets/img/Knowing_Science_Logo_Blue_Horizon.gif' ?>" alt="Knowing Science Logo" height="60px">
            </a>
            <!-- End Logo -->

            <!-- Topbar -->
            <div class="topbar">
 
                <?php /* @FIXME: Friends don't let friends put fa classes on empty i tags. */ ?>             
                <ul class="loginbar pull-right hoverSelector">
                    <i class="fa fa-globe"></i>
                    <li><a href="/about-us">about</a></li></li>
                    <li class="topbar-devider"></li>

                    <i class="fa fa-shopping-cart"></i>
                    <li><a href="/cart">cart</a></li>
                    <li class="topbar-devider"></li>
                    
                    <i class="fa fa-envelope-o"></i>
                    <li><a href="/contact">contact</a></li>
                    <li class="topbar-devider"></li>

<?php global $user; ?>
<?php if ($user->uid): ?>
                    <?php print '<li>' . l('logout', 'user/logout') . '</li>'; ?>&nbsp;|&nbsp;<?php print l('account', 'user'. $user->uid); ?> 

<?php else: ?>
                  <i class="fa fa-user"></i>
                   <li><?php print l('Login', 'user'); ?></li>       
<?php endif; ?>
                </ul>
            </div>
            <!-- End Topbar -->

            <!-- Toggle get grouped for better mobile display -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="fa fa-bars"></span>
            </button>
            <!-- End Toggle -->
        </div><!--/end container-->






        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse mega-menu navbar-responsive-collapse">
            <div class="container">
                <ul class="nav navbar-nav">
                    <!-- Home -->
                    <li class="dropdown active">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                        Scope & Sequence</a>
                        
                        <ul class="dropdown-menu">
                          
                          <li class="dropdown-submenu">
                          <a href="scope-sequence/pre-k">Pre-K</a></li>

                          <li class="dropdown-submenu">
                            <a href="scope-sequence/kindergarden">Kindergarden</a>
                          </li>
                           
                          <li class="dropdown-submenu">
                            <a href="scope-sequence/grade-one">1st Grade</a>
                          </li>
                            
                          <li class="dropdown-submenu">
                             <a href="scope-sequence/grade-two">2nd Grade</a>
                          </li>

                          <li class="dropdown-submenu">
                             <a href="scope-sequence/grade-three">3rd Grade</a>
                          </li>

                          <li class="dropdown-submenu">
                             <a href="scope-sequence/grade-four">4th Grade</a>
                          </li>

                          <li class="dropdown-submenu">
                             <a href="scope-sequence/grade-five">5th Grade</a>
                          </li>

                          <li class="dropdown-submenu">
                             <a href="scope-sequence/grade-six">6th Grade</a>
                          </li>





                        </ul>
                        


                    <!-- Pages -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                            Curriculum & STEM Kits
                        </a>
                        <ul class="dropdown-menu">


               

  

     


                        </ul>
                    </li>
                    <!-- End Pages -->

                    <!-- Blog -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                            Home School
                        </a>

                    <!-- End Blog -->


 


                    <!-- Misc Pages -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                            Publications
                        </a>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="page_misc_blank.html">Blank page</a></li>
                            <li><a href="page_misc_boxed.html">Boxed Page</a></li>
                        </ul>
                    </li>
                    <!-- End Misc Pages -->



                    <!-- Search Block -->
                    <li>
                        <i class="search fa fa-search search-btn"></i>
                        <div class="search-open">
                            <div class="input-group animated fadeInDown">
                                <input type="text" class="form-control" placeholder="Search">
                                <span class="input-group-btn">
                                    <button class="btn-u" type="button">Go</button>
                                </span>
                            </div>
                        </div>
                    </li>
                    <!-- End Search Block -->
                </ul>
            </div><!--/end container-->
        </div><!--/navbar-collapse-->
    </div>
    <!--=== End Header ===-->
