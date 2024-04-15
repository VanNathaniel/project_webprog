<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>INDEX</title>
</head>
<body>
<form method="POST" action="">
	<p>
        <!-- ini adalah catcher -->
		<label for="tema">Theme : </label>
		<select name="listTheme" required>
			<option selected disabled>--Choose Theme--</option>
		<?php 
        if(isset($_COOKIE['themes'])){
            $theme_pilihan = json_decode($_COOKIE['themes'],true);
            foreach($theme_pilihan as $name => $theme){
                echo"<option value='$name'>$name</option>";
            }
        }
		?>
		</select>
		<a href="project_addTheme.php"> Add New Theme</a>
	</p>
<div>
    <form method = "post" action="">
        <button type="submit" name="choose" style = "float: left;">Choose The Theme</button>
    </form>
    <form method="post" action="project_edit.php" style = "display: inline;">
    <input type="hidden" name="listTheme" value="<?php echo isset($_POST['listTheme']) ? $_POST['listTheme'] : ''; ?>">
        <button type="submit" name="btnedit" value="Edit the Theme">Edit Theme</button>
    </form>
</div>
<hr>
<?php
if(isset($_POST['choose']) && isset($_POST['listTheme'])){
    //Mengambil nama tema yang dipilih darai formulir
    $sleceted_theme_name = $_POST['listTheme'];
    //Mengambil data tema yang dipilih dari cookie
    $theme_pilihan = json_decode($_COOKIE['themes'],true);
    //Mengambil data tema yang dipilih berdasarkana nama tema
    $selected_theme = $theme_pilihan[$sleceted_theme_name];
    echo"<style> 
    body{
        background-color: {$selected_theme['bgColor']};
    }
    h1{
        color:{$selected_theme['hdColor']};
        text-align:{$selected_theme['alignments']};
    }
    p{
        color:{$selected_theme['pColor']};
        font-size:{$selected_theme['fontSize']}px;
    }
    </style>";
}
?>
	<h1>Heading 1</h1>

	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</body>
</html>