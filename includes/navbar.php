<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">

        <!-- Kazqurt.kz -->
        <a class="navbar-brand" href="/"> 
            <img src="favicon.ico" style="height: 18px"> 
            <?php echo $config['title']; ?>
        </a>

        <!-- burger for mobile devices -->
        <button 
            class="navbar-toggler" 
            type="button" 
            data-toggle="collapse" 
            data-target="#navbarResponsive" 
            aria-controls="navbarResponsive" 
            aria-expanded="false" 
            aria-label="Toggle navigation"
        >
            <!-- hamburger icon -->
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">

                <!-- navigation links -->
                <li class="nav-item active">
                    <a class="nav-link" href="/index.php"> Главная </a>
                </li>
                <li>
                    <a class="nav-link" href="../pages/about.php"> О нас </a>
                </li>
                <li>
                    <div class="btn btn-outline-light loginButton">Login</div>
                </li>
                <li >
                    <div class="btn btn-light signupButton">Sign up</div>
                </li>

            </ul>
        </div>
    </div>
</nav>
<br>


<!-- login form styling -->
<link rel="stylesheet" href="../css/popup.css">

<!-- sign up -->
<div class="overlay loginDiv">
    <div class="popup js-popup-campaign">
        <form class="" action="reg.php" method="POST">
            <input type="text" name="email" placeholder="Email">
            <input type="password" name="password" placeholder="Password">
            <input type="password" name="password" placeholder="Confirm Password">
            <input type="submit" name="send" value="Sign Up">
        </form>

        <p class="loginButton">Login</p>
    </div>
</div>

<div class="overlay signupDiv">
    <div class="popup js-popup-campaign">
        <form class="" action="reg.php" method="POST">
            <input type="text" name="email" placeholder="Email">
            <input type="password" name="password" placeholder="Password">
            <input type="submit" name="send" value="Login">
        </form>

        <p class="signupButton">Sign Up</p>
    </div>
</div>

<!-- popup js and jquery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="../scripts/popup.js"></script>