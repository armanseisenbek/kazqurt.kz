<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">

        <!-- Kazqurt.kz -->
        <a class="navbar-brand" href="/">
            <img src="/favicon.ico" style="height: 18px">
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
                <li class="nav-item">
                    <a class="nav-link" href="/index.php"> Home </a>
                </li>

                <li>
                    <a class="nav-link" href="../pages/about.php"> About us </a>
                </li>

                <?php if($_COOKIE['user'] == ''): ?>

                <li>
                    <div class="btn btn-outline-light loginButton">Login</div>
                </li>

                <li>
                    <div class="btn btn-light signupButton">Sign up</div>
                </li>

                <?php else: ?>

                <li>
                    <div style="color: #fff;"><?=$_COOKIE['user']?> <a href="../includes/exit.php" class="btn btn-danger">log out</a> </div>
                </li>

                <?php endif; ?>

            </ul>
        </div>

    </div>
</nav>

<!-- login form styling -->
<link rel="stylesheet" href="../css/popup.css">


<!-- сам настрой стайлинг -->
<div class="loginResult" style="display: <?php echo $_GET['display']; ?>;">
    <div class="messageWindow">
        <?php echo "<h1>" . $_GET['message'] . "</h1>";?>
    </div>
</div>


<!-- sign up -->
<div class="overlay signupDiv">
    <div class="popup js-popup-campaign">


        <form class="" action="../login.inc.php?id=<?php echo $_GET['id'] ?>" method="POST">
            <h2 class="heading">Registration</h2>

            <!-- email -->
            <label>Your e-mail:</label>
            <input type="email" name="email" placeholder="Email" required>
            <br>
            <!-- name -->
            <label>Your name:</label>
            <input type="text" name="name" placeholder="Name">
            <br>
            <!-- phone number -->
            <label>Phone number:</label>
            <input type="number" name="phone" placeholder="8-707-727-77-77">
            <br>
            <!-- city -->
            <label>Your city:</label>
            <input type="text" name="city" placeholder="Almaty">
            <br>
            <!-- password -->
            <label>Create password:</label>
            <input type="password" name="password" placeholder="Password" oninput="checkPassword(this, 'warning1'); checkConfirm();" class="signupPassword" required>
            <p id="warning1"></p>
            <!-- <br> -->
            <!-- confirm password -->
            <label>Confirm password:</label>
            <input type="password" name="confirm" placeholder="Confirm Password" oninput="checkConfirm()" class="signupConfirm" required>
            <p id="ConfirmWarning"></p>

            <!-- sign up button -->
            <div class="text-center">
                <button type="submit" name="signup" class="btn btn-success">Sign Up</button>
            </div>

        </form>
  </div>
</div>

<!-- Login -->
<div class="overlay loginDiv">
    <div class="popup js-popup-campaign">

        <form class="" action="../login.inc.php?id=<?php echo $_GET['id'] ?>" method="POST">
            <h2 class="heading">Login</h2>

            <!-- email -->
            <label>Your e-mail:</label>
            <input type="email" name="email" placeholder="Email" required>
            <!-- password -->
            <label>Your password:</label>
            <input type="password" name="password" placeholder="Password" oninput="checkPassword(this, 'warning2')" required>
            <p id="warning2"></p>

            <!-- login button -->
            <div class="text-center">
                <button type="submit" name="login" class="btn btn-success">Login</button>
            </div>

        </form>

    </div>
</div>


<!-- popup js and jquery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="../scripts/popup.js"></script>
