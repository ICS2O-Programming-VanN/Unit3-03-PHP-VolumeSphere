<html>
  <head>
    <!-- 	Meta Data	 -->
		<meta charset="UTF-8">
		<meta name="Van" content="My website in PHP">
		<meta name="keywords" content="immaculata, ics2o">
		<meta name="DESCRIPTION" content="Website for calculating volume of a sphere">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png" />
    <link rel="manifest" href="./fav_index/site.webmanifest" />
    <title>My PHP website calculating Volume of a Sphere</title>
    <!-- Links to style.css file -->
		<link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
		<!-- Heading and paragraph -->
    <?php
			echo '<center><h1>Volume of a Sphere in PHP</h1></center><br>';
			echo "<p>This website allows you to calculate the Volume of a Sphere! <br> Enter the Radius below:</p>";
		?>
		<!-- Text field and button (Takes Input) -->
		<form method = "post">
      Radius (cm): <input type="float" min="0" name="radius"> <br>
			<br><br>
			<input type ="submit" name ="submit"  value="Calculate Volume">
		<!-- Calculations for Volume (With User Input) -->
		<?php
			if(isset($_POST['submit'])) {
        $radius = $_POST['radius']; // Input for the radius
				$volume = (4 / 3) * pow($radius, 3) * pi(); // Calculations for Volume
				$volume = number_format($volume, 2); // Rounds to nearest hundredth 
				echo "<br><br><h4>The Volume of this Sphere is " . $volume . "cm<sup>3</sup></h4><br>"; // Outputs Volume
			}
        echo '<br><br><img src="./images/volume-sphere.png" alt="Sphere Formula">' // Image
		?>
  </body>
</html>