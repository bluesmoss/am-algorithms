<?php
class Solution {

    /**
    * @param Integer[][] $matrix
    * @return Integer[]
    */
    function spiralOrder($matrix) {
        $spiral = [];

        if (empty($matrix)) {

            return  $spiral;
        }

        $top = 0;
        $bottom = sizeof($matrix) - 1;
        $left = 0;
        $right = sizeof($matrix[0]) - 1;

        $size =  sizeof($matrix) * sizeof($matrix[0]);
        while (sizeof($spiral) < $size){

            //Left to right
            for ($i =  $left; $i <= $right && sizeof($spiral) < $size; ++$i) {
                $spiral[] = $matrix[$top][$i];
            }

            ++$top;

            //Top to bottom
            for ($i =  $top; $i <= $bottom && sizeof($spiral) < $size; ++$i) {
                $spiral[] = $matrix[$i][$right];
            }

            --$right;

            //Left to Right
            for ($i = $right; $i >= $left && sizeof($spiral) < $size; --$i) {
                $spiral[] = $matrix[$bottom][$i];
            }

            --$bottom;
            //Bottom to top
            for ($i = $bottom; $i >= $top && sizeof($spiral) < $size; --$i) {
                $spiral[] = $matrix[$i][$left];
            }

            ++$left;

        }

        return $spiral;
    }
}