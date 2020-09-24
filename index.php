<?php
file_put_contents("plan.pdf", fopen("https://bartixxxremoteapi-eu.herokuapp.com/?url=https://www.zscku.konin.pl/www6/sites/default/files/zalaczniki-dokumenty/lo02.pdf", 'r'));

echo "<iframe src=\"plan.pdf\" width=\"100%\" style=\"height:100%\"></iframe>";
?>


