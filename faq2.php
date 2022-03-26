<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQs | ACE IT CONSULTANCY</title>
    <link rel="icon" type="image/x-icon" href="images/logo/favi.png">

    <script src="https://kit.fontawesome.com/314e866590.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/style.css">

</head>
<body>

    <section class="faq-page">

        <header>
            <div class="menu-btn">
                <span class="menu-btn_hamburger"></span>
            </div>
    
            <nav class="nav">
              <div class="logo-div" ><a href="index.html"><img src="images/logo/turq.png" alt=""></a></div>
                
                <ui class="menu-nav">
                    <li class="menu-nav_item">
                      <a href="index.php" class="menu-nav_link">Home</a>
                    </li>
                    <li class="menu-nav_item" active>
                        <a href="about2.php" class="menu-nav_link">About Us</a>
                    </li>
                    <li class="menu-nav_item dropdown">
                        <a href="#" class="menu-nav_link">Category <i class="fas fa-sort-down"></i></a>
                        <div class="dropdown-content">
                            <a href="clients.php">Client</a>
                            <a href="writers.php">Writer</a>
                        </div>
                    </li>
                    <li class="menu-nav_item">
                        <a href="faq2.php" class="menu-nav_link">FAQs</a>
                    </li>
                    <li class="menu-nav_item">
                        <a href="login/login.php" class="menu-nav_link">Log in</a>
                    </li>
                </ui>
            </nav>
        </header>
    
        <section class="banner">

            <h2>Frequently Asked Questions</h2>

            <div class="wrapper">
                <div class="container" id="container">
                <form role="search" method="get" class="search-form form" action="#">
                    <label>
                        <span class="screen-reader-text">Search for...</span>
                        <input type="search" class="search-field" id="search-bar" placeholder="Search..." value="" name="s" title="" />
                    </label>
                    <input type="submit" class="search-submit button" value="&#xf002" />
                </form>
                </div>
            </div>

        </section>

        <section class="questions" id="myQuestions">
            <div class="accordion" id="accordion">
            </div>
        </section>

        <section class="communicate">
           <div class="content">
            <h3>Can&#x27t Find What You Are Looking For?</h3>
            <h4>ASK US ANYTHING</h4>
            

            <form action="https://formspree.io/f/xleznrpg" method="POST" id="contactUs">
                    <label>
                        <span>Your email:</span>
                        <input type="email" name="_replyto" id="myemail" placeholder="Your Email">
                    </label>
                    <label>
                        <span> Your Question:</span>
                        <textarea name="message" id="mytextarea" placeholder="Your Question"></textarea>
                    </label>
                    <!-- your other form fields go here -->
                    <button type="submit">ASK</button>
            </form>
            
            

           </div>
        </section>


        <?php include_once "partials/footer.php"; ?>

    </section>
    
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

    <script src="js/search.js"></script>
    
    
</body>
</html>
