 <?php
$language = "en";
if(!isset($_SESSION['lang'])){ 
	$_SESSION['lang'] = "uz";
	
}

if(isset($_GET['lang']) ){ 	
		
		$_SESSION['lang'] = $_GET['lang'];
		$language = $_SESSION['lang'];

}
		include_once( "language/".$_SESSION['lang'].".php");
			


?>