<?php
include '../config/core.php';
check_login();
?>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../style/style.css">

<head>
    <title>login</title>
</head>
<!--NavBar section-->
<div class="">
    <div class="navsaw">
        <a href="../index.html"><div class="brand"><h1>asifundze
        </h1></div>   </a>        
        <div class="acct">
            <a href="signup.html">Sign Up</a>
       </div>
    </div>
</div>
<body class="lbody">
<div class="loginbody">
    <div class="lg1">
        <div class="both-side left-side"></div>
        <div class="both-side right-side">
            <div class="">
                <h1 class="h1">Login</h1>

                <form class="form" action="../actions/login_action.php" id="form1" method="post">
                    <div>
                        <div class="cntn1 vvv">
                            <label for="email">Email<sup title="This field is required"></sup></label>
                            <input class="lbl1 lbl3" value="" type="email" name="email" id="email" required>
                        </div>
                    </div>
                    <div>
                    </div>
                    <div class="">
                        <div class="cntn1 vvv">
                            <label for="password">Password<sup title="This field is required. It must be at least 4 characters long."></sup></label>
                            <input class="lbl1 lbl3" type="password" name="password" id="password" pattern=".{4,}" required>
                        </div>
                        <div class="cntn1">
                            <div class="lbl2">
                            </div>
                        </div>
                        <div class="signup-section">
                            <div class="cntn1">
                                <input type="submit" class="lbl8" name="login" value="Log In" id="submit1">
                            </div>
                        </div>
                    </div>
                </form>
                <div class="notyet">
                    <p>Don't have an account? <a href="signup.html">Sign up here</a></p>
                    <p class="repoDash"><a href="../personal/dashboard.html">Visit Dashboard</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<script>
    function login(){
    }
    function login1(){
    }
    const links = document.getElementById('link1');
    const links2 = document.getElementById('link2');

const currentPage = window.location.href;

  if (links.href === currentPage) {
    console.log(window.location.href)
    links.classList.add("active");
  }
  else{
    links.classList.add("hold");
  }
  if (links2.href === currentPage) {
    console.log(window.location.href)

    links2.classList.add("active");
  }
</script>
</html>

