<?php

function media($v1, $v2, $v3) {
	$media = ($v1 + $v2 + $v3) / 3;
    return $media;
}

echo "MÉDIA ENTRE 4, 7 E 10... " . media(4, 7, 10);
echo "<br><br>";

echo "MÉDIA ENTRE 23, 12 e 6: " . media(23, 12, 6);
echo "<br><br>";

echo "MÉDIA ENTRE 55, 11 e 99: " . media(55, 11, 99);
echo "<br><br>";
