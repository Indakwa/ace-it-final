<?php 
  session_start();
  // if(isset($_SESSION['unique_id'])){
  //   header("location: users.php");
  // }
?>

<?php include_once "header.php"; ?>
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
                <img id="img" src="../images/point.jpg" alt="">
              </div>

              <div class="wrapper" id="wrapper">
                <section class="form login">
                  <header>Ace IT Login &nbsp;<i class="fas fa-pen-alt"></i></header>
                  <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
                    <div class="error-text"></div>
                    <div class="field input">
                      <label>Email Address </label>
                      <input type="text" name="email" placeholder="Enter your email" required>
                    </div>
                    <div class="field input">
                      <label>Password</label>
                      <input type="password" name="password" placeholder="Enter your password" required>
                      <i class="fas fa-eye"></i>
                    </div>
                    <div class="field button">
                      <input type="submit" name="submit" value="Continue">
                    </div>
                  </form>
                  <div class="link">Not yet signed up? <a href="index.php">Signup now</a></div>
                </section>
              </div>

            </section>


    </div>
  
  
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/621a1e421ffac05b1d7c009a/1fsr0ce1b';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
    </script>
    <!--End of Tawk.to Script-->


  

  <script>

       let wrapper = document.getElementById('wrapper');
       let img = document.getElementById('img');
       let wrapperHeight = wrapper.clientHeight;
       img.clientHeight = (wrapperHeight + 0) + "px";


  </script>

  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/login.js"></script>

</body>
</html>
