<?php
header ("Content-type: image/png"); // 1 : on indique qu'on va envoyer une image PNG
$image = imagecreate(200,50); // 2 : on crée une nouvelle image de taille 200 x 50
// 3 : on s'amuse avec notre image (on va apprendre à le faire)
$bleu = imagecolorallocate($image, 0, 120, 215);
$blanc = imagecolorallocate($image, 255, 255, 255);
imagestring($image, 4, 35, 15, "Download!", $blanc);
imagepng($image); // 4 : on a fini de faire joujou, on demande à afficher l'image
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8"/>
</head>
<body>

</body>
</html>