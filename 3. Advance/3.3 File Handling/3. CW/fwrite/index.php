<?php
$MyFile = fopen("C:\Bitnami\wappstack-8.1.4-0\apache2\htdocs\Learn-PHP\3. Advance\3.3 File Handling\3. CW\fwrite\write.txt", "w") or die("Unable to find the file");
$txt = "This is john doe\n";

fwrite($MyFile, $txt);
fclose($MyFile);
?>