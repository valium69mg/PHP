<?php

// INCLUDE IF NOT FOUND WILL POP UP A WARNING
// REQUIRE IF NOT FOUND WILL POP UP AN ERROR

// include_once will execute the included file just once

echo "Hello";

require('function.php');
echo '<br>';
echo sum(4,5);