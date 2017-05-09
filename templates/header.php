<?php
    session_start();
?>
        <div class="navbar">
            <a id="logo" href="#">
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
                  <li><a>Home</a></li>
                  <li><a>Messages</a></li>
                  <li><a>FAQ</a></li>
		  <?php
		   if(!isset($_SESSION['userSession']))
		    {
			echo "<li id='login'><a id='modal_trigger' href='#modal'><span><i class='fa fa-sign-in' aria-hidden='true'></i></span>Login</a></li>";
		    }else{
			echo "<li id='logoutBtn'><a><span><i class='fa fa-sign-in' aria-hidden='true'></i></span>Log out</a></li>
			<li><span><i class='fa fa-sign-in' aria-hidden='true'></i></span>".$_SESSION['userSession']."</a></li>";
		    }
		  ?>
		  
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
		    <h5 id="LoginLabel" class="errorLabel bottomLabel"></h5>
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
                    <label>Username</label>
                    <input id="userCreateInput" autocorrect="off" autocapitalize="off" autocomplete="off" type="text" />
                    <br />
		    <label>Email</label>
                    <input id="emailCreateInput" autocorrect="off" autocapitalize="off" autocomplete="off" type="text" />
                    <br />
                    <label>Password</label>
                    <input id="passCreateInput" autocorrect="off" autocapitalize="off" autocomplete="off" type="password" />
                    <br />
                    <label>Password</label>
                    <input id="passRepeatCreateInput" autocorrect="off" autocapitalize="off" autocomplete="off" type="password" />
                    <br />
                    <div class="checkbox">
                      <input id="send_updates" type="checkbox" />
                      <label for="send_updates">Send me occasional email updates</label>
                    </div>
                    <div class="action_btns">
                      <div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
                      <div class="one_half last"><a href="#" id="btn-admin-create" class="btn btn_yellow">Register</a></div>
                    </div>
          </form>
        </div>
      </section>
      <!-- /.popup body -->
    </div>
        </div>
	
<script>
    
    //LOGIN
    
$("#btn-admin-login").click(function(){
    
   var sLoginUser = $("#txt-email").val();
   var sLoginPass = $("#txt-password").val();
   var sLink = "validate-login.php?email=" + sLoginEmail + "&pass=" + sLoginPass;
   
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
	  //header('Location: '.$_SERVER['REQUEST_URI']);
	  location.reload();
       }else{
          var result = JSON.parse(Data);
          //sweetAlert(result.attempts);
          $("#LoginLabel").html("");
          $("#LoginLabel").html(result.attempts);
          //sweetAlert("Sorry", "Gæt igen", "error");
       }
       console.log("LOG DATA" +Data);
     })
   }
  });

  //CREATE SECTION
  
$("#btn-admin-create").click(function(){
  
 var sCreateUser = $("#userCreateInput").val();
 var sCreateEmail = $("#emailCreateInput").val();
 var sCreatePass = $("#passCreateInput").val();
 var sCreatePassRepeat = $("#passRepeatCreateInput").val();
 var sLink = "create-login.php?user=" + sCreateUser + "&email=" + sCreateEmail + "&pass=" + sCreatePass + "&passRepeat=" + sCreatePassRepeat;
 
 //RESET ALL LABEL FIELDS
 $("#CreateLabelUser").html("");
 $("#CreateLabelEmail").html("");
 $("#CreateLabelPass").html("");
 $("#CreateLabelPassRepeat").html("");
 $("#CreateLabel").html("");
 $("#CreateLabelOk").html("");
 
 
if ( sCreateUser == "") {
    $("#CreateLabelUser").html("Please fill out the field");
}

if ( sCreateEmail == "") {
    $("#CreateLabelEmail").html("Please fill out the field");
}
 
if ( sCreatePass == "") {
    $("#CreateLabelPass").html("Please fill out the field");
}

if ( sCreatePassRepeat == "") {
    $("#CreateLabelPassRepeat").html("Please fill out the field");
}
 
if ( sCreateUser !== "" && sCreateEmail !== "" && sCreatePass !== "" && sCreatePassRepeat != "") {
  
 $.ajax({
   "url":sLink,
   "dataType":"text",
   "method":"post",
   "cache": false
   }).done( function(Data){
    var result = JSON.parse(Data);

    $("#CreateLabelUser").html(result.user);
    $("#CreateLabelEmail").html(result.email);
    $("#CreateLabelPass").html(result.pass);
    $("#CreateLabelPassRepeat").html(result.passRepeat);
    $("#CreateLabel").html(result.creation);
    $("#CreateLabelOk").html(result.creationOk);
     console.log(Data);
   })
 }
});


    //LOGOUT
    
$("#logoutBtn").click(function(){
//logout();
logout2();
console.log("Test logout");
});

function logout2(){
$.ajax({
"url":"destroy-session.php",
"method":"post",
"dataType":"text",
"cache":false
}).done(function(Data){
location.reload();
console.log("DATA LOG"+Data);
})
};

function logout(){
$.ajax({
"url":"destroy-session.php",
"method":"post",
"dataType":"text",
"cache":false
}).done(function(Data){
location.reload();
console.log("DATA LOG"+Data);
})
};
</script>