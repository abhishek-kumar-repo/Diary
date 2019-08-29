<?php
if(array_key_exists("submit", $_POST)){
  $error="";
  if(!$_POST['email']){
    $error .="An Email Address is required.<br>";

  }
  if(!$_POST['password']){
    $error .="A password is required.<br>";
  }
  if($error !=""){
    $error ="<p>There are errors in your form.<br></p>".$error;
  }else{

  }
}

?>
<html>
<head>
	   
    <title>
       Abhi Diary
    </title>
     <link rel="icon" type="image/gif" href="titleimg.gif">

   <link href="assets/css/swlstyle.css" rel="stylesheet">
    

    <style type="text/css">
    	
    	body{
    		background:none;
    	}
      html { 
  background: url(assets/img/Animebackground.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
   
    .container{
      text-align: center;
      margin-top: 190px;
      width:550px;
    }

    
    </style>

    

</head>


<body>

  <div class="container">
  	<h1 class="display-4" style="color:white;font-weight:bold;font-size:80px; "> Diary </h1>
   
    <form ">
      <fieldset class="form-group">
        <label for="email" style=" color:white;font-weight:bold; " >Email </label>
        <input type="text" class="form-control" name="email" id="email" placeholder="Enter your email address" >
         <label for="password" style=" color:white;font-weight:bold; ">Password </label>
        <input type="password" class="form-control" name="password" id="password" placeholder="Enter your valid password">
      </fieldset>
  <!--button-->  <a href="Diarytext.php" class="btn btn-success" role="button" name="submit">Sign in</a>
  	
  	 <a href="DiarySignup.php" role="button"  class="btn btn-info" >Sign up</a>
    </form>
  	</div>
















	
<!-------------------------------------------------------------------------------------------------->
   
</body>
</html>