<?php
require_once '../core/header.php';

echo "<br><span class='main'>Welcome to $appname,";

if ($loggedin) 
{
    echo " $user, you are logged in.";
}

else 
{
    echo ' please sign up and/or log in to joun in.';
}

?>

        </span><br><br>
    </body>
</html>
