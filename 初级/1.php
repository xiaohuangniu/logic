<?php
/*
 +----------------------------------------------------------------------
 + Title        : 左三角
 + Author       : 小黄牛
 + Version      : V1.0.0.1
 + Initial-Time : 2017-05-22 10:32:00
 + Last-time    : 2017-05-22 10:32:00 + 小黄牛
 + Desc         : 用FOR输出左三角，用于理解IO含义
    在FOR循环中，行既为I，列既为O，IO的消耗决定了代码的执行性能优化程度
 +----------------------------------------------------------------------
*/

/**
 * 顺向思维，FOR输出左三角
 * @param int : $num 最大行数
 * @return : 无
*/
function Demo($num){

    # 外FOR控制行
    for ($i=1; $i<=$num; $i++) {

        # 内FOR控制列
        for ($k=1; $k<=$i; $k++) {
            echo '*';
        }

        echo '<br/>';
    }
}

Demo(5);