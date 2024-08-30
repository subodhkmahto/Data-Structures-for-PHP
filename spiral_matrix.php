<?php

function spiralOrder($matrix) {
    $result = [];
    if (empty($matrix)) return $result;

    $top = 0;
    $bottom = count($matrix) - 1;
    $left = 0;
    $right = count($matrix[0]) - 1;

    while ($top <= $bottom && $left <= $right) {
        // Traverse from left to right
        for ($i = $left; $i <= $right; $i++) {
            $result[] = $matrix[$top][$i];
        }
        $top++;

        // Traverse from top to bottom
        for ($i = $top; $i <= $bottom; $i++) {
            $result[] = $matrix[$i][$right];
        }
        $right--;

        if ($top <= $bottom) {
            // Traverse from right to left
            for ($i = $right; $i >= $left; $i--) {
                $result[] = $matrix[$bottom][$i];
            }
            $bottom--;
        }

        if ($left <= $right) {
            // Traverse from bottom to top
            for ($i = $bottom; $i >= $top; $i--) {
                $result[] = $matrix[$i][$left];
            }
            $left++;
        }
    }

    return $result;
}

// Example usage:
$matrix = [
    [1, 2, 3, 4],
    [5, 6, 7, 8],
    [9, 10, 11, 12],
    [13, 14, 15, 16]
];

print_r(spiralOrder($matrix));

// Array
// (
//     [0] => 1
//     [1] => 2
//     [2] => 3
//     [3] => 4
//     [4] => 8
//     [5] => 12
//     [6] => 16
//     [7] => 15
//     [8] => 14
//     [9] => 13
//     [10] => 9
//     [11] => 5
//     [12] => 6
//     [13] => 7
//     [14] => 11
//     [15] => 10
// )

?>

<?php

function zigzagSpiralOrder($matrix) {
    $result = [];
    if (empty($matrix)) return $result;

    $top = 0;
    $bottom = count($matrix) - 1;
    $left = 0;
    $right = count($matrix[0]) - 1;
    $reverse = false;

    while ($top <= $bottom && $left <= $right) {
        if (!$reverse) {
            // Left to right
            for ($i = $left; $i <= $right; $i++) {
                $result[] = $matrix[$top][$i];
            }
            $top++;
        } else {
            // Right to left
            for ($i = $right; $i >= $left; $i--) {
                $result[] = $matrix[$top][$i];
            }
            $top++;
        }
        $reverse = !$reverse;
    }

    return $result;
}

// Example usage:
$matrix = [
    [1, 2, 3, 4],
    [5, 6, 7, 8],
    [9, 10, 11, 12],
    [13, 14, 15, 16]
];

print_r(zigzagSpiralOrder($matrix));

function counterClockwiseSpiralOrder($matrix) {
    $result = [];
    if (empty($matrix)) return $result;

    $top = 0;
    $bottom = count($matrix) - 1;
    $left = 0;
    $right = count($matrix[0]) - 1;

    while ($top <= $bottom && $left <= $right) {
        // Traverse from top to bottom
        for ($i = $top; $i <= $bottom; $i++) {
            $result[] = $matrix[$i][$left];
        }
        $left++;

        // Traverse from left to right
        for ($i = $left; $i <= $right; $i++) {
            $result[] = $matrix[$bottom][$i];
        }
        $bottom--;

        if ($left <= $right) {
            // Traverse from bottom to top
            for ($i = $bottom; $i >= $top; $i--) {
                $result[] = $matrix[$i][$right];
            }
            $right--;
        }

        if ($top <= $bottom) {
            // Traverse from right to left
            for ($i = $right; $i >= $left; $i--) {
                $result[] = $matrix[$top][$i];
            }
            $top++;
        }
    }

    return $result;
}

// Example usage:
$matrix = [
    [1, 2, 3, 4],
    [5, 6, 7, 8],
    [9, 10, 11, 12],
    [13, 14, 15, 16]
];

print_r(counterClockwiseSpiralOrder($matrix));
function spiralOrder1($matrix) {
    $result = [];
    if (empty($matrix)) return $result;

    $top = 0;
    $bottom = count($matrix) - 1;
    $left = 0;
    $right = count($matrix[0]) - 1;

    while ($top <= $bottom && $left <= $right) {
        // Traverse from left to right
        for ($i = $left; $i <= $right; $i++) {
            $result[] = $matrix[$top][$i];
        }
        $top++;

        // Traverse from top to bottom
        for ($i = $top; $i <= $bottom; $i++) {
            $result[] = $matrix[$i][$right];
        }
        $right--;

        if ($top <= $bottom) {
            // Traverse from right to left
            for ($i = $right; $i >= $left; $i--) {
                $result[] = $matrix[$bottom][$i];
            }
            $bottom--;
        }

        if ($left <= $right) {
            // Traverse from bottom to top
            for ($i = $bottom; $i >= $top; $i--) {
                $result[] = $matrix[$i][$left];
            }
            $left++;
        }
    }

    return $result;
}

// Example usage:
$matrix = [
    [1, 2, 3, 4],
    [5, 6, 7, 8],
    [9, 10, 11, 12],
    [13, 14, 15, 16]
];

print_r(spiralOrder1($matrix));


?>