
<?php

$file = 'https://github.com/sahinibrahimli/drfuad/files/4535288/FUAD.pdf';
$filename = 'SH.CV.pdf';
header('Content-type: application/pdf');
header('Content-Disposition: inline; filename="' . $filename . '"');
header('Content-Transfer-Encoding: binary');
header('Accept-Ranges: bytes');
@readfile($file);


?>


