<?php

// PSR - PHP Standard Recommendation

if (count($_GET) < 1) {
    print "Vetor vazio.";
}

foreach ($_GET as $key => $value) {
    print ucfirst($key) . ": $value <br>";
}