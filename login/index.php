<?php 
  session_start();
  // if(isset($_SESSION['unique_id'])){
  //   header("location: users.php");
  // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sign Up | ACE IT CONSULTANCY</title>
  <link rel="icon" type="image/x-icon" href="../images/logo/favi.png">
  <link rel="stylesheet" href="../css/login.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
</head>

<body>

    <header>
        <div class="menu-btn">
            <span class="menu-btn_hamburger"></span>
        </div>

        <nav class="nav">
            <div class="logo-div" ><a href="../index.html"><img src="../images/logo/turq.png" alt=""></a></div>
            
            <ui class="menu-nav">
                <li class="menu-nav_item">
                        <a href="../index.php" class="menu-nav_link">Home</a>
                </li>
                <li class="menu-nav_item" active>
                    <a href="../about2.php" class="menu-nav_link">About Us</a>
                </li>
                <li class="menu-nav_item">
                    <a href="../faq2.php" class="menu-nav_link">FAQs</a>
                </li>
                <li class="menu-nav_item">
                    <a href="login.php" class="menu-nav_link">Log in</a>
                </li>
            </ui>
        </nav>
    </header>
  

    <div class="login-container">



            <section class="login-page" id="loginPage">

                <div class="img-wrapper" >
                  <img id="img" src="../images/hat.jpg" alt="">
                </div>

                  <div class="wrapper">
                        <section class="form signup">
                          <header>Ace IT Sign Up</header>
                          <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
                            <div class="error-text"></div>
                            <div class="name-details">
                              <div class="field input">
                                <label>First Name</label>
                                <input type="text" name="fname" placeholder="First name" required>
                              </div>
                              <div class="field input">
                                <label>Last Name</label>
                                <input type="text" name="lname" placeholder="Last name" required>
                              </div>
                            </div>
                            <div class="field input">
                              <label>Email Address</label>
                              <input type="text" name="email" placeholder="Enter your email" required>
                            </div>
                            <div class="field input">
                              <label>Password</label>
                              <input type="password" name="password" placeholder="Enter new password" required>
                              <i class="fas fa-eye"></i>
                            </div>
                            <div class="field button">
                              <input type="submit" name="submit" value="Sign up as Client">
                            </div>
                            <div class="field button" id="myBtn">
                              <input type="submit" name="submit" value="Sign Up as Writer">
                            </div>
                          </form>
                          <div class="link">Already signed up? <a href="login.php">Login now</a></div>
                        </section>
                    </div>

            </section>

    </div>


  

  <script>

       let wrapper = document.getElementById('wrapper');
       let img = document.getElementById('img');
       let wrapperHeight = wrapper.clientHeight;
       img.clientHeight = (wrapperHeight + 20) + "px";


  </script>

  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>

</body>
</html>
