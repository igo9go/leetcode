<?php
function twoSum($nums, $target) {
    foreach($nums as $key => $val) {
        if (in_array($target-$val, $nums)) {
            return [$key, array_search($target-$val,$nums)];
        }
   }
}
print_r(twoSum([2, 7, 11, 15], 18))
?>