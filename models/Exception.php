<?php

namespace Exception;

use Exception;

function logException(Exception $e) {
    $errorlog = fopen("Exception.txt", "a");
    echo "hi";
    fwrite($errorlog, "EXCEPTION CAUGHT: " . date('Y-m-d H:i:s') . " " . $e->getMessage() . "\n" . $e->getTraceAsString() . "\n");
    echo "hi";
    fclose($errorlog);
}
?>
<html>

</html>