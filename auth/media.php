<?php 
session_start();
if (empty($_SESSION['username'] && $_SESSION['password'])) {
  header('location:index.php');
}
/* create environment */
include ('../library/environment.php');
/* end environment */ 

/*db*/
include('../library/database.php');
/**/

include ('part/header.php');
include ('part/sidebar.php');
include ('part/navbar.php');



/* main content*/
 if(!isset($_GET['ref'])){
        require "module/dashboard.php";
    }else{
        if($_GET['ref'] == "dashboard"){
            require "module/dashboard.php";

        }elseif ($_GET['ref'] == "profile") {
            require "module/profile.php";

        }elseif ($_GET['ref'] == "data-trace") {
            require "module/data.php";
     
        }else{
            require "module/404.php";
        }
	}






/* end content*/
include ('part/footer.php');

?>