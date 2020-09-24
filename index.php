<?php 
file_put_contents("./web/plan.pdf", fopen("https://bartixxxremoteapi-eu.herokuapp.com/?url=https://www.zscku.konin.pl/www6/sites/default/files/zalaczniki-dokumenty/lo02.pdf", 'r'));
header( 'Location: /web/viewer.html' );
?>