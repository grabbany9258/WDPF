<?php
$fh= fopen("article.txt" , 'r');

echo fread ($fh, filesize('article.txt'));


?>