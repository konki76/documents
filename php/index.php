<?php
include 'Cours.php';
include 'CoursCollectif.php';
include 'CoursIndividuel.php';
?>

<?php 
	$ci[] = new CoursIndividuel(1,12,"violon");
	$ci[1] = new CoursIndividuel(2,6,"piano");
	$cc[] = new CoursCollectif(1,8,"apprentissage du solfège",18,"20");
	$cc[1] = new CoursCollectif(2,6,"guitare",18,"10");
?>
</!DOCTYPE html>
<html>
<head>
	<title>Music</title>
</head>
<body>
<?php

	foreach ($ci as $unCi) {
		$unCi->Afficher();
	}
	foreach ($cc as $unCc) {
		$unCc->Afficher();
	}
?>
</body>
</html>
