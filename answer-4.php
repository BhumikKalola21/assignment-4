<?php

namespace solutions;

// Define a final class MathUtility
final class MathUtility {
    // Static method for addition
    public static function add($a, $b) {
        return $a + $b;
    }

    // Static method for multiplication
    public static function multiply($a, $b) {
        return $a * $b;
    }
}

// Attempt to extend the final class (will result in an error)
class ExtendedMathUtility extends \solutions\MathUtility {
    // This class cannot extend MathUtility due to the 'final' keyword
}

?>



<!-- solution for above code -->

<!-- <?php

// Define a final class MathUtility
final class MathUtility {
    // Static method for addition
    public static function add($a, $b) {
        return $a + $b;
    }

    // Static method for multiplication
    public static function multiply($a, $b) {
        return $a * $b;
    }
}

// No attempt to extend the final class, as it is not allowed

// Usage of the MathUtility class
$resultAddition = MathUtility::add(3, 5);
$resultMultiplication = MathUtility::multiply(2, 4);

// Display results
echo "Result of addition: $resultAddition<br>";
echo "Result of multiplication: $resultMultiplication<br>";

?> -->
