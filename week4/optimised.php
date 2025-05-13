
<?php

// Define a function to perform the calculation
function calculate($iterations, $param1, $param2): float {
    $result = 1.0;
    for ($i = 1; $i <= $iterations; $i++) {
        // Calculate j for subtraction
        $j_subtract = $i * $param1 - $param2;
        $result -= (1 / $j_subtract);
        
        // Calculate j for addition
        $j_add = $i * $param1 + $param2;
        $result += (1 / $j_add);
    }
    
    return $result;
}

// Main function to run the calculation and measure time
function main() {
    ini_set('precision', 36); // Increase precision for float calculations

    // Define constants
    $iterations = 100_000_000;
    $param1 = 4.0;
    $param2 = 1.0;

    // Measure execution time using microtime
    $start_time = microtime(true);
    
    // Perform calculation and adjust result
    $result = calculate($iterations, $param1, $param2) * 4.0;
    
    // Stop measuring time
    $end_time = microtime(true);

    // Calculate elapsed time
    $execution_time = $end_time - $start_time;

    // Output the results
    echo "Result: " . number_format($result, 12, '.', '') . "\n";
    echo "Execution Time: " . number_format($execution_time, 6, '.', '') . " seconds\n";
}

// Execute main function
main();

?>
