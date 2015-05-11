<?php

echo '<h4>Результаты текущего эксперимента.</h4>';
    echo '<table style="text-align: center;">';
        echo '<tr>';
            echo '<td style="padding: 10px;">Количество<br />очков</td>';
            echo '<td style="padding: 10px;">Сколько раз<br />выпало, всего</td>';
            echo '<td style="padding: 10px;">Сколько раз выпало,<br />в дробном отношении</td>';
        echo '</tr>';
    for($i = 0; $i <=10; $i++) 
    {
        echo '<tr>';
            echo '<td style="padding: 10px;">'.$rows[$i]['num'].'</td>';
            echo '<td style="padding: 10px;">'.$rows[$i]['count'].'</td>';
            echo '<td style="padding: 10px;">'.(round(($rows[$i]['count']/36000)*100)/100).'</td>';
        echo '</tr>';
    }
    echo '</table>';
