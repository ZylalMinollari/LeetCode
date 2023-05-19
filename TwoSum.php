<?php

 /**
 * Problem NO. 1
 *
 * @param int[] $nums
 * @param int $target
 * @return int[]
 */
function twoSum($nums, $target)
{
    $map = [];
    for($i = 0; $i < count($nums); $i++) {
        $complement = $target - $nums[$i];
        if(array_key_exists($complement,$map)) {
            return [$map[$complement],$i];
        }

        $map[$nums[$i]] = $i;
    }

    return [];
}


/**
 * Test Case 1
 */

 $nums = [2,7,11,15];
 $target = 9;
 $output = twoSum($nums, $target);
 echo "Case 1:\n";
 echo "Input: nums = ";
 print_r($nums);
 echo "      target = $target\n";
 echo "Output: \n";
 print_r($output);
 echo "Expected: [0,1]\n\n";
 
 /**
  * Test Case 2
  */
 
 $nums = [3,2,4];
 $target = 6;
 $output = twoSum($nums, $target);
 echo "Case 2:\n";
 echo "Input: nums = ";
 print_r($nums);
 echo "      target = $target\n";
 echo "Output: ";
 print_r($output);
 echo "Expected: [1,2]\n\n";

  /**
  * Test Case 3
  */
 
  $nums = [3,3];
  $target = 6;
  $output = twoSum($nums, $target);
  echo "Case 3:\n";
  echo "Input: nums = ";
  print_r($nums);
  echo "      target = $target\n";
  echo "Output: ";
  print_r($output);
  echo "Expected: [0,1]\n\n";