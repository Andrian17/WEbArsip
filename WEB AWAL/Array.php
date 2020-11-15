<?php

$handphone = ["Iphone", "Nokia", "Xiomi", "Oppo"];

?>

<!DOCTYPE html>
<html>
<head>
	<title> Array </title>
	<style>
		div {
			width: 50px;
			height: 40px;
			background-color: red;
		}
	</style>
</head>
<body>
	<?php for ($i=0; $i < 4 ; $i++) { ?>
		<div> <?php echo $handphone[$i]; ?></div>
	<?php }?>

</body>
</html>