--TEST--
Tarantool error commands test
--FILE--
<?php
require_once "lib/TarantoolUTest.php";

try
{
    $tarantool = new Tarantool("localhost", -33013, 0);
    echo "error: the exception didn't raise\n";
} catch (Exception $e) {
    echo "catched exception: ", $e->getMessage(), "\n";
}

try {
    $tarantool = new Tarantool("localhost", 33013, 65537);
    echo "error: the exception didn't raise\n";
} catch (Exception $e) {
    echo "catched exception: ", $e->getMessage(), "\n";
}

?>
===DONE===
--EXPECT--
catched exception: invalid primary port value: -33013
catched exception: invalid admin port value: 65537
===DONE===
