<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>K.Education E-learning</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<?php
			include('inc/head.php');
	?>

</head>
<body>
	<section id="container">
	<?php
			include('inc/header.php');
	?>
	
	<section id="content">
		<section class="left-container">
		<?php
			//include('inc/left_bar_pri.php');
		?>
		</section>
		<section class="main-content">
			<section class="cbo">Subject: 
				<select>
					<option>All</option>
				   <option>English</option>
				   <option>Kiswahili</option>
				   <option>Mathematics</option>
				   <option>Science</option>
				   <option>Social Studies & Cre</option>
				</select>
			</section>
		<?php
		
			include('inc/pager.php');
		?>
		</section>
	</section>
	</section>
</body>
</html>