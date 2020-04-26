
<?php

$file = 'https://github.com/sahinibrahimli/drfuad/files/4535272/FUAD.docx';
$filename = 'SH.CV.pdf';
header('Content-type: application/pdf');
header('Content-Disposition: inline; filename="' . $filename . '"');
header('Content-Transfer-Encoding: binary');
header('Accept-Ranges: bytes');
@readfile($file);


?>


