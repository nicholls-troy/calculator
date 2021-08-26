<?php
require 'index.html';
require 'calculator.php';
require_once 'calculator_functions.php'; 
?>

<input type="hidden" name="input" value='<?php echo json_encode($input); ?>'/>
            <input type="text" class="calculator-screen" value="<?php echo getInputAsString($input); ?>" disabled/>