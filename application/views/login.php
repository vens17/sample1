<body id="mimin" class="dashboard form-signin-wrapper">
      <div class="container">
<?php echo form_open('/submit','POST'); ?>
        <div class="form-signin" id="adminlogin_frm">
          <div class="panel periodic-login">
              <div class="alert col-md-12 col-sm-12 alert-icon alert-danger alert-dismissible fade in" id="errstatus" style="display: none;" role="alert">
                </div>
              <div class="panel-body text-center">
                  <h1 class="atomic-symbol"></h1>
                  <h2>Laundry</h2>
                  <p class="atomic-mass">Admin Login</p>
                  <p class="element-name"></p>

                  <i class="icons icon-arrow-down"></i>
                  <div class="form-group form-animate-text" style="margin-top:40px">
                    <input type="text" name="username" id="username" class="form-text" required>
                    <span class="bar"></span>
                    <label>Username</label>
                  </div>
                  <div class="form-group form-animate-text" style="margin-top:40px">
                    <input type="password" name="password" id="password" class="form-text" required>
                    <span class="bar"></span>
                    <label>Password</label>
                  </div>

                  <label class="pull-left">
                  <input type="checkbox" class="icheck pull-left" name="checkbox1"/> Remember Me
                  </label>
                  <input type="submit" class="btn col-md-12" value="LogIn" id="loginbtn" name="loginbtn" />
              </div>
          </div>
        </div>
<?php echo form_close(); ?>
      </div>
      <script src="assets/js/login.js"></script>
      <script type="text/javascript">
       $(document).ready(function(){
         $('input').iCheck({
          checkboxClass: 'icheckbox_flat-aero',
          radioClass: 'iradio_flat-aero'
        });
       });
     </script>
     <!-- end: Javascript -->
   </body>
</body>
</html>
