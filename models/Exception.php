<?php
namespace models\Exception;
use Exception;

function logException(Exception $e) {
    $errorlog = fopen("models/Exception.txt", "a");

    fwrite($errorlog, "EXCEPTION CAUGHT: " . date('Y-m-d H:i:s') . " " . $e->getMessage() . "\n" . $e->getTraceAsString() . "\n");
  
    fclose($errorlog);
}
?>
<html>

</html>