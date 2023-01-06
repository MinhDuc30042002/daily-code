<?php

/**
 * @param Integer[][] $points
 * @return Integer
 */
function findMinArrowShots($points)
{
    $arrows = 1;
    sort($points);
    $pre = $points[0];

    
    for ($i = 1; $i < count($points); $i++) {
        $current_start_point = $points[$i][0];
        $current_end_point = $points[$i][1];

        $pre_start_point = $pre[0];
        $pre_end_point = $pre[1];

        if ($current_start_point > $pre_end_point) {
            $arrows++;
            $pre = $points[$i];
        } else {
            $pre[0] = max($current_start_point, $pre_start_point);
            $pre[1] = min($current_end_point, $pre_end_point);
        }
    }
    return $arrows;
}

echo findMinArrowShots([[9, 12], [1, 10], [4, 11], [8, 12], [3, 9], [6, 9], [6, 7]]);
