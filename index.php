<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>localhost</title>
</head>

<style type="text/css">
	body, html {
		margin: 0px;
		padding: 0px;
		background-color:#222;
		text-align: center;
	}
	h1 {
		margin: 0px;
		font-weight: 100;
		margin-top: 60px;
	}	
	div {
		font-size: 16px;
		font-family: 'Helvetica Neue', Arial, Helvetica, sans-serif;
		color:#FFF;	
	}
	ul {
		list-style: none;
		width: 840px;
		margin: 0px auto;
		font-weight: 100;
	}
	li {
		float: left;
		text-align: center;
		margin: 10px 10px 30px 10px;	
	}
	li a {
		display: block;
		width: 120px;
		padding-top: 80px;
		background-repeat:no-repeat;
		background-size: 60%;
		background-position: top center;
		text-decoration: none;
		color:#FFF;	
	}
	
	a.file {
		background-image:url(index/link_icon.png);	
	}
	
	a.folder {
		background-image:url(index/link_folder_icon.png);	
	}
</style>

<body>
<div>
<h1>localhost</h1>
<br />
<ul>
<?php
$dir    = '.';
$files1 = scandir($dir);

for($i=0; $i<sizeof($files1); $i++){
	$thisfile = $files1[$i];
	if(substr($thisfile, 0, 1) != "."){
		$subm = (strpos($thisfile, "."))?"file":"folder";
		echo "<li><a class=\"". $subm ."\" href=\"". $thisfile ."\">". $thisfile ."</a></li>\n";	
	}
}
?>
</ul>
</div>
</body>
</html>
