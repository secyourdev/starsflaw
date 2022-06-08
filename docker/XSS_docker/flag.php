<?php
include "db_connect.php";
        $sql = "SELECT username FROM logs WHERE username='$username'";
        $result = mysqli_query($conn, $sql);
        $user = mysqli_fetch_assoc($result);
        
        function flag($user) {
                $flag = "123"; 
                if ($user == "<script>alert(1)</script>")
                {
                        return $flag;
                }
        }

?>