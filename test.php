<?php
/**
 * 5个人偷了一堆苹果
 * 第一个人分成5份，多了一个。拿走其中一份。
 * 第二个人分成5份，多了一个。拿走其中一份。
 * ...
 * 第二天，又分剩下的，又分成5份，多了一个。
 * 问共有多少个苹果？
 */
function getAppleCount()
{
    // 一个一个加
    for ($s = 5;; $s++) {
        if ($s % 5 == 1) {
            // 算出第1次分苹果后剩下的数量
            $left_1 = $s - round($s / 5) - 1; // 四舍五入
            if ($left_1 % 5 == 1) {
                // 算出第2次分苹果后剩下的数量
                $left_2 = $left_1 - round($left_1 / 5) - 1;
                if ($left_2 % 5 == 1) {
                    // 算出第3次分苹果后剩下的数量
                    $left_3 = $left_2 - round($left_2 / 5) - 1;
                    if ($left_3 % 5 == 1) {
                        // 算出第4次分苹果后剩下的数量
                        $left_4 = $left_3 - round($left_3 / 5) - 1;
                        if ($left_4 % 5 == 1) {
                            // 算出第5次分苹果后剩下的数量
                            $left_5 = $left_4 - round($left_4 / 5) - 1;
                            if ($left_5 % 5 == 1) {
                                echo $s;
                                break;
                            }
                        }
                    }
                }
            }
        }
    }
}

echo getAppleCount(); // 15621 这是第一个符合条件的值
