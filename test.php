<?php
/**
 * 跟猴子问题比较相似，最后一个是大王。约瑟夫是最后两个是存活。
 * 约瑟夫问题是个有名的问题：
 * N个人围成一圈，从第一个开始报数，第M个将被杀掉，最后剩下一个，其余人都将被杀掉。
 * 例如N=6，M=5，被杀掉的顺序是：5，4，6，2，3，1。
 */
function getLastTwo()
{
    $people = 41;
    $killNum = 3;

    // 初始化数据
    $people_arr = range(1, $people);

    for ($i = 1; $i <= $killNum * ($people - 2); $i++) {
        $speak_num = array_shift($people_arr);
        if ($i % $killNum == 0) {
            echo "死了" . $speak_num . "<br/>";
        } else {
            // 放到后面
            array_push($people_arr, $speak_num);
        }
    }

    // 输出活着的人
    foreach ($people_arr as $alive) {
        echo "我" . $alive . "还活着！<br/>";
    }
}

getLastTwo();
