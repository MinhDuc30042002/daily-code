<?php

/**
 * @param Integer[][] $grid
 * @return Integer[]
 */
function findBall($grid)
{
    $m = count($grid); // rows
    $n = count($grid[0]); // cols
    $stack = array();

    for ($ball = 0; $ball < $n; $ball++) {
        $row = 0;
        // $col = $ball = 0 -> 4
        // if $ball = 1 => $col = 1
        $col = $ball;
        $result = false;

        while ($row < $m && $col < $n) {
            if ($grid[$row][$col] == 1) {
                if ($col == $n - 1 || $grid[$row][$col + 1] == -1) {
                    $result = true;
                    break;
                }
                $col++;
            } else if ($grid[$row][$col] == -1) {
                if ($col == 0 || $grid[$row][$col - 1] == 1) {
                    $result = true;
                    break;
                }
                $col--;
            }

            $row++;
        }

        if ($result) {
            array_push($stack, -1);
        } else {
            array_push($stack, $col);
        }
    }
    return $stack;
    // echo '<pre>';
    // print_r($stack);
    // echo '</pre>';
}

findBall([[1, 1, 1, 1, 1, 1], [-1, -1, -1, -1, -1, -1], [1, 1, 1, 1, 1, 1], [-1, -1, -1, -1, -1, -1]]);
