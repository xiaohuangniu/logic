<style>
div{width:15px;float:left}
</style>
<?php
/*
 +----------------------------------------------------------------------
 + Title        : 右倒三角
 + Author       : 小黄牛
 + Version      : V1.0.0.1
 + Initial-Time : 2017-05-22 11:12:00
 + Last-time    : 2017-05-22 11:12:00 + 小黄牛
 + Desc         : 用FOR输出右倒三角，用于理解IO含义
    在FOR循环中，行既为I，列既为O，IO的消耗决定了代码的执行性能优化程度
 +----------------------------------------------------------------------
*/

/**
 * 逆向思维，FOR输出右倒三角
 * @param int : $num 最大行数
 * @return : 无
*/
function Demo($num){

    # 外FOR控制行
    for ($i=$num; $i>=1; $i--) {

        # 内FOR控制列 - 空格
        for ($v=$num; $v > $i; $v--) {
            echo '<div>&nbsp;</div>';
        }

        # 内FOR控制列 - *号
        for ($k=$i; $k>=1; $k--) {
            echo '<div>*</div>';
        }

        echo '<br/>';
    }
}

Demo(5);

