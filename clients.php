<?php 
    session_start();
    if(isset($_SESSION['unique_id'])){

    }else{
        header("location: login/login.php");
    }
  
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clients Area | ACE IT CONSULTANCY</title>
    <link rel="icon" type="image/x-icon" href="images/logo/favi.png">

    <link rel="stylesheet" href="css/clients.css">

    <script src="https://kit.fontawesome.com/314e866590.js" crossorigin="anonymous"></script>

</head>
<body>

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
        <h2>Welcome to ACE IT <span>Client Area</span></h2>
        <a id="openChat" href="javascript:void(Tawk_API.toggle())"> Chat With Admin </a>
    </section>

    <section class="cards">
        <div class="card">
            <i class="fas fa-tools"></i>
            <h3>Get your job done</h3>
            <p>
                Let us do the dirty work for you, sit back and get your job done with a team of experts. Our accredited experts have been certified and qualify for the job you give us. Our  Creativity and knowledge cannot be compromised.
            </p>
        </div>

        <div class="card">
            <h4><i class="fas fa-link"></i></h4>
            <h3>Link to your destiny</h3>
            <p>
                With assured good grades, timely submission and accuracy leads to better perfomance in general. Your career goals are in safe hands with us. You want an ace destiny? try Ace IT Consultancy.
            </p>
        </div>

        <div class="card">
            <h4><i class="fas fa-dollar-sign"></i></h4>
            <h3>Talk of Affordability</h3>
            <p>
                For as low as $10 per page you get value for your money. Our deluxe services are reliable and highly rated for affordable prices. Our one stop platform ensures you get all that ypu want under one roof - the Ace It roof.
            </p>
        </div>

    </section>

    <section class="text">
        <h2>Task Us</h2>
        <h4>We are here for you. <span>Yes, You.</span></h4>
        <p>We put ourselves in your shoes and handle your assignments like our own, giving our best. For further clarification and communication chat with our standby admin to answer any questions concerning our policies. We offer quality custom services fit for your needs. Go ahead and kickstart your journey with us, this journey of success with Ace.
        </p>
    </section>


    <?php include_once "partials/footer.php"; ?>

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


    <script src="js/clients.js"></script>
    
</body>
</html>