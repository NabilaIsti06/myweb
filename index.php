<!DOCTYPE html>
<html lang="en">
<head>
    <title>User Interface Nabila</title>
    <meta charset="UTF-8">
    <meta name="description" contents="Niagahoster">
    <link rel="stylesheet" href="style1.css" type="text/css">
</head>
<body background="ki.jpg">
    <header>
        <h1 class="title">Nabila Blogger</h1>
        <nav id="navigation">
            <ul>
                <li><a href="index.php?page=home">Home</a></li>
                <li><a href="index.php?page=about">About</a></li>
                <li><a href="index.php?page=contact">Contact</a></li>
            </ul>
        </nav>
    </header>
    <div id="contents">
        <?php 
        if(isset($_GET['page'])){
            $page = $_GET['page'];
 
            switch ($page) {
                case 'home':
                include "home.php";
                break;
                case 'about':
                include "about.php";
                break;
                case 'contact':
                include "contact.php";
                break;          
            }
        }
else{
            include "home.php";
        }
        ?>
 
    </div>
    
    <footer>
        &copy Copyright Nabila Isti 2023 - Nabila. All Rights Reserved.
    </footer>
</body>
</html>