<?php
// session_start();
// $uname = $_SESSION['uname'];

// $query = $mysqli->query("SELECT * FROM user_tbl WHERE Username = '$uname'");
// $row   = $query->fetch_assoc();
// $name  = $row['Fname']. ' '. $row['Lname'];

// $page = $_SERVER['QUERY_STRING'];
?>
 <body id="mimin" class="dashboard">
      <!-- start: Header -->
        <nav class="navbar navbar-default header navbar-fixed-top">
          <div class="col-md-12 nav-wrapper">
            <div class="navbar-header" style="width:100%;">
              <div class="opener-left-menu is-open">
                <span class="top"></span>
                <span class="middle"></span>
                <span class="bottom"></span>
              </div>
                <a href="index.html" class="navbar-brand"> 
                 <b>LAUNDRY</b>
                </a>

              <ul class="nav navbar-nav search-nav">
                <li>
                   <div class="search">
                    <span class="fa fa-search icon-search" style="font-size:23px;"></span>
                    <div class="form-group form-animate-text">
                      <input type="text" class="form-text" required>
                      <span class="bar"></span>
                      <label class="label-search">Type anywhere to <b>Search</b> </label>
                    </div>
                  </div>
                </li>
              </ul>

              <ul class="nav navbar-nav navbar-right user-nav">
                <li class="user-name"><span><?php echo $name; ?></span></li>
                  <li class="dropdown avatar-dropdown">
                   <img src="assets/img/avatar.jpg" class="img-circle avatar" alt="user name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"/>
                   <ul class="dropdown-menu user-dropdown">
                     <li><a href="#"><span class="fa fa-user"></span> My Profile</a></li>
                     <li><a href="#"><span class="fa fa-calendar"></span> My Calendar</a></li>
                     <li role="separator" class="divider"></li>
                     <li class="more">
                      <ul>
                        <li><a href=""><span class="fa fa-cogs"></span></a></li>
                        <li><a href=""><span class="fa fa-lock"></span></a></li>
                        <li><a href="signout.php"><span class="fa fa-power-off "></span></a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <!-- <li ><a href="#" class="opener-right-menu"><span class="fa fa-coffee"></span></a></li> -->
              </ul>
            </div>
          </div>
        </nav>
      <!-- end: Header -->

      <div class="container-fluid mimin-wrapper">
          <!-- start:Left Menu -->
            <div id="left-menu">
              <div class="sub-left-menu scroll">
                <ul class="nav nav-list">
                    <!-- <li><div class="left-bg"></div></li> -->
                    <li class="time">
                      <h1 class="animated fadeInLeft">21:00</h1>
                      <p class="animated fadeInRight">Sat,October 1st 2029</p>
                    </li>
                    <li class="<?php // if($page == '') { echo 'active'; } ?> ripple">
                      <a href="home.php"><span class="fa-home fa"></span> Dashboard  <?php //echo $active1 ?>
                      </a>
                    </li>
                    <li class="<?php //if($page == 'userinfo' || $page == 'usertype'){ echo 'active'; } ?> ripple">
                      <a class="tree-toggle nav-header">
                        <i class="fa fa-users"></i> User Maintenance
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                        <li><a href="home.php?userinfo">User Info</a></li>
                        <li><a href="home.php?usertype">User Type</a></li>
                      </ul>
                    </li> 
                    <li class="<?php //if($page == 'service') { echo 'active'; } ?> ripple">
                      <a href="home.php?service"><span class="fa fa-cog"></span> Services 
                      </a>
                    </li>
                  </ul>
                </div>
            </div>
          <!-- end: Left Menu -->

  		
          <!-- start: content -->
          <div id="content">
             <?php
             // if($page == 'userinfo' || $page == 'usertype'){
             // 	include('user.php');
             // } else if ($page == 'service'){
             // 	include('services.php');
             // }
             ?>  
      	  </div>
          <!-- end: content -->
      </div>

      <!-- start: Mobile -->
      <div id="mimin-mobile" class="reverse">
        <div class="mimin-mobile-menu-list">
            <div class="col-md-12 sub-mimin-mobile-menu-list animated fadeInLeft">
                <ul class="nav nav-list">
                	<li>
                     <a href="home.php"><span class="fa-home fa"></span> Dashboard 
                      </a>
                    </li>
                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                        <i class="fa fa-users"></i> User Maintenance
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                        <li><a href="home.php?userinfo">User Info</a></li>
                        <li><a href="home.php?usertype">User Type</a></li>
                      </ul>
                    </li>
                  </ul>
            </div>
        </div>       
      </div>
      <button id="mimin-mobile-menu-opener" class="animated rubberBand btn btn-circle btn-danger">
        <span class="fa fa-bars"></span>
      </button>
       <!-- end: Mobile -->
  </body>