/**
 * @param {number[][]} matrix
 * @return {number[]}
 */
var spiralOrder = function(matrix) {
    let spiral = [];
    const EMPTY_ARRAY = 0;

    if (matrix.length > EMPTY_ARRAY){

        let top = EMPTY_ARRAY;
        let left = EMPTY_ARRAY;
        let right = matrix[0].length - 1;
        let bottom = matrix.length - 1;

        const size =  matrix.length * matrix[0].length;

        while (spiral.length < size){
            //Left to right
            for (let i = left; i <= right; ++i) {
                spiral.push(matrix[top][i])
            }

            ++top;

            //Top to bottom
            for (i = top; i <= bottom && spiral.length < size; ++i) {
                spiral.push(matrix[i][right])
            }

            --right;

            //Left to Right
            for (i = right; i >= left && spiral.length < size; --i) {
                spiral.push(matrix[bottom][i])
            }

            --bottom;
            //Bottom to top
            for (i = bottom; i >= top && spiral.length < size; --i) {
                spiral.push(matrix[i][left])
            }

            ++left;

        }

    }

    return spiral;

};