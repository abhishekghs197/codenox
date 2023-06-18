<?php 

$host="localhost"; 
$username="b1n4s2be_b2b_digital";
$password="b1n4s2be_b2b_digital";
$dbname="b1n4s2be_b2b_digital";
$db_web='';
$db_web= mysqli_connect("$host","$username","$password") or die ("could not connect to mysql"); 
mysqli_select_db($db_web, $dbname) or die ("no database_1"); 


$dir_loc="https://".$_SERVER['HTTP_HOST']."/it-development-services/";
$whole_url=$_SERVER['REQUEST_URI'];
$targetpage=base64_encode($whole_url);
$php_self=$_SERVER['PHP_SELF'];
$page_name_1=str_replace("/it-development-services/","",$php_self);
$page_name_3=str_replace("/it-development-services/","",$page_name_1);
$page_name=$page_name_3;
$local_url_exculde="/";	



	
		
		$language_prev="Prev";
		$language_next="Next";
		$language_last="Last";
		$language_first="First";
		$language_page="Page";
		$language_page_of="of"; 


function seo_friendly_url($string){ 
		$string = str_replace(array('[\', \']'), '', $string); 
		$string = preg_replace('/\[.*\]/U', '', $string); $string = preg_replace('/&(amp;)?#?[a-z0-9]+;/i', '-', 
		$string); $string = htmlentities($string, ENT_COMPAT, 'utf-8'); 
		$string = preg_replace('/&([a-z])(acute|uml|circ|grave|ring|cedil|slash|tilde|caron|lig|quot|rsquo);/i', '\\1', 
		$string ); $string = preg_replace(array('/[^a-z0-9]/i', '/[-]+/') , '-', 
		$string); return strtolower(trim($string, '-')); 
		}
		
		

?>