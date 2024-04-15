<?php
if(isset($_COOKIE['themes'])){
	if(isset($_POST['save'])){
		if(!empty($_POST['name']) && !empty($_POST['bgColor']) 
		  && !empty($_POST['hdColor']) && !empty($_POST['alignments'])
		  && !empty($_POST['pColor']) && !empty($_POST['fontSize'])){
			$theme_pilihan = json_decode($_COOKIE['themes'],true);
			$selected_theme_name = $_POST['listTheme'];
			$theme_pilihan[$selected_theme_name] = array(
				'name' => $_POST['name'],
				'bgColor' => $_POST['bgColor'],
				'hdColor' => $_POST['hdColor'],
				'alignments' => $_POST['alignments'],
				'pColor' => $_POST['pColor'],
				'fontSize' => $_POST['fontSize']);
		setcookie('themes', json_encode($theme_pilihan),time() + (86400 * 30),"/");
		echo "Themes data has been updated succesfully!";
		header("location: project_index.php");
		}else{
			echo "Please fill all fields";
		}
		
	}
}else{
	echo"Cookie 'themes' tidak ditemukan";
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit Theme</title>
</head>
<body>
<?php
if(isset($_COOKIE['themes'])){
	$theme_pilihan = json_decode($_COOKIE['themes'],true);
	if(isset($_POST['listTheme'])){
		$selected_theme_name =$_POST['listTheme'];
		if(isset($theme_pilihan[$selected_theme_name])){
			$selected_theme = $theme_pilihan[$selected_theme_name];
		}else{
			echo"Selected theme not found in cookie!";
		}
	}
}
?>
<form method ="post" action="">
<!-- Menampilkan data tema yang dipilih -->
	<input type="hidden" name="listTheme" value="<?php echo $selected_theme_name; ?>">
	<p><label for="tema">Name of your theme : </label><input type="text" name="name" value="<?php echo isset($selected_theme['name']) ? $selected_theme['name'] : ''; ?>" readonly>this field is not able to change</p>
	<p><label for="page">Color of Page Backgroud : </label><input type="color" name="bgColor" value="<?php echo isset($selected_theme['bgColor']) ? $selected_theme['bgColor'] : ''; ?>"></p>
	<p><label for="heading">Color of Heading 1 : </label><input type="color" name="hdColor" value="<?php echo isset($selected_theme['hdColor']) ? $selected_theme['hdColor'] : ''; ?>"></p>
	<p><label for="alignment">Alignment of Heading 1 : </label>
	<select name="alignments" required>
			<option value="" selected disabled>--Choose The Alignment--</option>
			<option value="left" <?php echo(isset($selected_theme['alignments']) && $selected_theme['alignments'] == 'left') ? 'selected' : '';?>>Left</option>
			<option value="center" <?php echo(isset($selected_theme['alignments']) && $selected_theme['alignments'] == 'center') ? 'selected' : '';?>>Center</option>
			<option value="right" <?php echo(isset($selected_theme['alignments']) && $selected_theme['alignments'] == 'right') ? 'selected' : '';?>>Right</option>
			<option value="justify"<?php echo(isset($selected_theme['alignments']) && $selected_theme['alignments'] == 'justify') ? 'selected' : '';?>>Justify</option>
	</select></p>
	<p><label for="paragraph">Color of Paragraph : </label><input type="color" name="pColor" value = "<?php echo isset($selected_theme['pColor']) ? $selected_theme['pColor'] : ''; ?>"></input><p>
	<p><label for="font">Font size of Paragraph : </label><input type="number" name="fontSize" min="12" max="24" value="<?php echo isset($selected_theme['fontSize']) ? $selected_theme['fontSize'] : ''; ?>">px</p>
	<p><button type="submit" name="save">Save</button></p>
</form>
</body>
</html>