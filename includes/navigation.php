<?php
session_start();
if(!isset($_SESSION['username']) & empty($_SESSION['username'])){
    $username = 'My Website';
} else {
    $username = $_SESSION['username'];
}
?>
    <!-- This the navigation bar. -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
                <?php echo $username; ?>
            </a>
        </div>
        <div class="collapse navbar-collapse" id="example-navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php">Home</a></li>
                <li><a href="contactus.php">Contact Us</a></li>
                <li><a href="user_management/login.php">Login</a></li>
                <li><a href="user_management/signup.php">Signup</a></li>
            </ul>
        </div>
    </nav>