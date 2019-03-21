<?php
//session_start();
require_once "connectDB.php";
include('head.html');
?>
<div class="body content">
    <div class="welcome">
        <?php
     //   $mysqli = new mysqli("localhost", "root", "mypass123", "accounts_complete");
        $sql = "SELECT * FROM users";
        //$result = mysqli_result object
        $result =   $mysqli->query( $sql );
        ?>
        <div id='registered'>
            <span>All registered users:</span>
            <?php
            //returns associative array of fetched row
            while( $row = $result->fetch_assoc() ){
                echo '<div class="userlist"><span><a href="profile/'.$row['username'].'">'.$row['username'].'</a></span><br />';
                echo "<img class=\"rounded-circle\" src='".$row['avatar']."'></div>";
            }
            ?>
        </div>
    </div>
</div>