<?php

// es mejor aplicar el && y || en vez de and o or ya q estos tienen precedencia ¡OJO!

$valorA = true;
$valorB = true;

$result = $valorA or $valorB;
var_dump($result);