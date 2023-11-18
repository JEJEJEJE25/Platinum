
<?php
    
    require_once "config.php";
    global $conn;

?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<!-- Nav Bar -->
<nav>

    <label class="logo">PlatinumKaraoke</label>
    <ul>
        <li><a class="active" href="index.php">Home</a></li>
     
    </ul>
</nav>
<!-- section -->
<section>
    <div>
        <div>
        

            <?php

            include('List.php');
            ?> 
        </div>
    </div>
</section>


</body>
</html>