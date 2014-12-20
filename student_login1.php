<?php $user_name=$_GET['usernamesignup']; ?>
<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="UTF-8" />
        <title>Login and Registration</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
    </head>
    <body>
        <div class="container">
          <header>
                <h1><style="color:white">Student</style></h1>
            </header>
            <section>				
                <div id="container_demo" >
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="login.php" method = "post" autocomplete="on"> 
                                <h1>Log in</h1>
                                <h3>welcome <strong style="color:red;"><?php echo$user_name;?></strong>,your account has been successfully created.<br>Please <strong style="color:red;">Login</strong> again</h3> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > Your username </label>
                                    <input id="username" name="username" required="required" type="text" placeholder="myusername"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Your password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" /> 
                                </p> 
                                <?php
                                //we will receive error msg from login page
                                if (!isset($_GET['error']))
   									$error = '';
									else
 		 							$error = $_GET['error'];
								if ($error != '')
   								echo '<p style="color:red;">', $error, '</p>';
								?> 
                                <p class="login button"> 
                                    <input type="submit" value="Login" /> 
								</p>
                            </form>
                        </div>						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>
