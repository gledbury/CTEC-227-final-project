<?php 
// user_mainPage 
$pageTitle = "UserMainPage";
require 'includes/header.inc.php';
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-nav">    
        <a class="text-white bg-dark" href="user_scores.php" id="register" title="click to register">Post your scores</a>
        <a class="text-white bg-dark" href="user_reviews.php" id="login" title="click to login">Review a course</a>
    </div>
</nav>


<?php require 'includes/footer.inc.php' ?>