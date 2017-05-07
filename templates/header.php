<?php
    session_start();
?>
        <div class="navbar">
            <a id="logo" href="index.php">
                <img src="../images/logo.jpg" alt="">
            </a>
            <div class="inner">
                <input id="search" type="search" Placeholder="What are you looking for?"/>
                <button type="submit" id="searchsubmit" value="">
                    <i class="fa fa-search aaa" aria-hidden="true"></i>
                </button>
            </div>
            <div id="links">
                <ul>
                  <li><a href="index.php">Home</a></li>
                  <li><a>Messages</a></li>
                  <li><a href="faq.php">FAQ</a></li>
                  <li id="login"><a id="modal_trigger" href="#modal"><span><i class="fa fa-sign-in" aria-hidden="true"></i></span>Login</a></li>
                  <li><a><div class="color-white" id="status"></a></li>
                  <li><a><div class="color-white" id="name"></div></a></li>
                  <li onclick="signOut();" id="signout" ><a><span><i class="fa fa-sign-out" aria-hidden="true"></i></span> Logout</a></li>
                  <li onclick="logout();" id="logout" ><a><span><i class="fa fa-sign-out" aria-hidden="true"></i></span> Logout</a></li>
                  
                </ul>
            </div>
		</div>
        <div class="login-container">
            <div id="modal" class="popupContainer" style="display:none;">
              <!-- popup header-->
              <header class="popupHeader font-s-18">
                <span class="header_title">LOGIN</span>
                <span class="modal_close"><i class="fa fa-times"></i></span>
              </header>
              <!-- /.popup header -->
              <!-- popup body-->
              <section class="p-20">
                <!-- Social Login -->
                <div class="social_login">
                  <div class="">
                    <a onclick="login();" class="social-box fb">
                      <span class="icon"><i class="fa fa-facebook"></i></span>
                      <span class="icon_title">Connect with Facebook</span>
                    </a>
                    <a id="my-signin2">
                      <span><i class="fa fa-google-plus"></i></span>
                      <span class="icon_title">Connect with Google</span>
                    </a>
                  </div>
                  <div class="text-center p-20 ">
                    <span>OR USE YOUR EMAIL ADDRESS</span>
                  </div>
                  <div class="action_btns">
                    <div class="one_half"><a href="#" id="login_form" class="btn">Login</a></div>
                    <div class="one_half last"><a href="#" id="register_form" class="btn">Sign up</a></div>
                  </div>
                </div>
                <!-- Username & Password Login form -->
                <div class="user_login">
                  <form>
                    <label>Email</label>
                    <input id="txt-email" type="email" placeholder="email"/>
		    <h5 id="errorLabelUser" class="errorLabel"></h5>
                    <br />
                    <label>Password</label>
                    <input id="txt-password" type="password" placeholder="password" />
		    <h5 id="errorLabelPass" class="errorLabel"></h5>
                    <br />
                    <div class="checkbox">
                        <label><input type="checkbox" value="remember-me" id="remember-me" >Remember me</label>
                    </div>
                    <div class="action_btns">
                      <div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
                      <div class="one_half last"><a id="btn-admin-login" class="btn btn_yellow">Login</a></div>
                    </div>
                  </form>
                  <a href="#" class="forgot_password">Forgot password?</a>
                </div>
                <!-- Register Form -->
                <div class="user_register">
                  <form>
                    <label>Full Name</label>
                    <input type="text" />
                    <br />
                    <label>Email Address</label>
                    <input type="email" />
                    <br />
                    <label>Password</label>
                    <input type="password" />
                    <br />
                    <div class="checkbox">
                      <input id="send_updates" type="checkbox" />
                      <label for="send_updates">Send me occasional email updates</label>
                    </div>
                    <div class="action_btns">
                      <div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
                      <div class="one_half last"><a href="#" class="btn btn_yellow">Register</a></div>
                    </div>
          </form>
        </div>
      </section>
      <!-- /.popup body -->
    </div>
        </div>
	
<script>
$("#btn-admin-login").click(function(){
    
   var sLoginUser = $("#txt-email").val();
   var sLoginPass = $("#txt-password").val();
   var sLink = "validate-login.php?user=" + sLoginUser + "&pass=" + sLoginPass;
   
   if ( sLoginUser == "") {
      $("#errorLabelUser").html("");
      $("#errorLabelUser").html("Please fill out the field");
   }else if( sLoginUser != "" ){
      $("#errorLabelUser").html("");
   }
    
  if ( sLoginPass == "") {
      $("#errorLabelPass").html("");
      $("#errorLabelPass").html("Please fill out the field");
   } else if( sLoginPass != "" ){
      $("#errorLabelPass").html("");
   }
   
   
   if ( sLoginUser !== "" && sLoginPass !== "" ) {
    
   $.ajax({
     "url":sLink,
     "dataType":"text",
     "method":"post",
     "cache": false
     }).done( function(Data){
       if (Data == "loginpass") {
          window.location.href = "approved.php";
       }else{
          var result = JSON.parse(Data);
          //sweetAlert(result.attempts);
          $("#LoginLabel").html("");
          $("#LoginLabel").html(result.attempts);
          //sweetAlert("Sorry", "Gæt igen", "error");
       }
       console.log(Data);
     })
   }
  });
</script>