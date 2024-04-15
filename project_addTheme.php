<?php
if(isset($_POST['btnSave'])) {
	if(!empty($_POST['name']) && !empty($_POST['bgColor']) 
	&& !empty($_POST['hdColor']) && !empty($_POST['alignments'])
	&& !empty($_POST['pColor']) && !empty($_POST['fontSize'])){
		$themeData = array(
			'name' => $_POST['name'],
			'bgColor' => $_POST['bgColor'],
			'hdColor' => $_POST['hdColor'],
			'alignments' => $_POST['alignments'],
			'pColor' => $_POST['pColor'],
			'fontSize' => $_POST['fontSize']
		);
		if(isset($_COOKIE['themes'])) {
			$theme = json_decode($_COOKIE['themes'], true);
		} else {
			$theme = array();
		}
	
		$theme[$_POST['name']] = $themeData;
	
		setcookie('themes', json_encode($theme), time() + (86400 * 30), "/");
		
		/*if(isset($_COOKIE['themes'])) {
			echo "Theme data has been saved successfully!";
		} else {
			echo "Failed to save theme data!";
		}*/
		header("location:project_index.php");
	}else{
		echo"<p>Maaf ada yang salah</p>";
	}

}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add Theme</title>
</head>
<body>
<form method ="post" action="">
	<p><label for="tema">Name of your theme : </label><input type="text" id ="theme" name="name" required></p>

	<p><label for="page">Color of Page Backgroud : </label><input type="color" name="bgColor" required></p>

	<p><label for="heading">Color of Heading 1 : </label><input type="color" name="hdColor" required></p>

	<p><label for="alignment">Alignment of Heading 1 : </label>
	<select name="alignments" required>
			<option value="" selected disabled>--Choose The Alignment--</option>
			<option value="left">Left</option>
			<option value="center">Center</option>
			<option value="right">Right</option>
			<option value="justify">Justify</option>
	</select></p>

	<p><label for="paragraph">Color of Paragraph : </label><input type="color" name="pColor" required><p>

	<p><label for="font">Font size of Paragraph : </label><input type="number" name="fontSize" min="10" max="24" required>px</p>

	<p><button type="submit" name="btnSave" value="Save">Save</button></p>
</form>
</body>
</html>