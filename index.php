<?php
file_put_contents("plan.pdf", fopen("https://bartixxxremoteapi-eu.herokuapp.com/?url=https://www.zscku.konin.pl/www6/sites/default/files/zalaczniki-dokumenty/lo02.pdf", 'r'));

echo "<iframe \"/ViewerJS/#../plan.pdf\" style=\"position:fixed; top:0; left:0; bottom:0; right:0; width:100%; height:100%; border:none; margin:0; padding:0; overflow:hidden; z-index:999999;\">\n";
echo "    Your browser doesn't support iframes\n";
echo "</iframe>\n";

?>


