<?php
@session_start();
include "./include/connect.php";

if(@$_SESSION['level']){
     if (@$_SESSION['level'] == "admin")
    {  echo'<script type="text/javascript">
    window.location.href="admin/home.php";
    </script>';
    }
    else if (@$_SESSION['level'] == "dokter")
    { echo'<script type="text/javascript">
    window.location.href="dokter/home.php";
    </script>';
    }
    elseif(@$_SESSION['level'] == "operator")
    {
        echo'<script type="text/javascript">
        window.location.href="operator/home.php";
        </script>';
    }
}
else{
	echo'<script type="text/javascript">
    window.location.href="login.php";
    </script>';
}
?>
