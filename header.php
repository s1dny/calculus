<?php
    $log_btn = "Login";
    IF (isset($_SESSION["user_name"])) {
        $log_btn = "Logout";
    }
?>
<?php require('session_check.php');?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Calctastic</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Onest:wght@100..900&display=swap" rel="stylesheet">
</head>

<nav class="nav">
    <div class="logo">∫ Calctasti<a>+</a>c</div>
    <ul class="nav-links">
        <li class="dropdown">
            <a href="index.php" class="dropbtn">Home</a>
        </li>
        <li class="dropdown">
            <a href="differentiation.php" class="dropbtn">Differentiation</a>
            <div class="dropdown-content">
                <a href="#">Sub Link 1</a>
                <a href="#">Sub Link 2</a>
                <a href="#">Sub Link 3</a>
            </div>
        </li>
        <li class="dropdown">
            <a href="integration.php" class="dropbtn">Integration</a>
            <div class="dropdown-content">
                <a href="#">Sub Link 1</a>
                <a href="#">Sub Link 2</a>
                <a href="#">Sub Link 3</a>
            </div>
        </li>
        <li class="dropdown">
            <a href="advanced_calculus.php" class="dropbtn">Advanced Calculus</a>
            <div class="dropdown-content">
                <a href="substitution_rule.php">Substitution Rule</a>
                <a href="#">Link 2</a>
                <a href="#">Link 3</a>
            </div>
        </li>
    </ul>
    <ul>
        <li>
            <a href="login.php" class="dropbtn">Logout</a>
        </li>
    </ul>
</nav>
