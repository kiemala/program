<!DOCTYPE html>
<head></head>
    <body>
		<div style="width: 760px; margin-left: 100px;">
			<div style="width: 450px; float: left;">
				<?php
					echo '<h4>Результаты эксперимента № '.$rows4[0]['id_exp'].' </h4>';
					echo '<table style="text-align: center;">';
						echo '<tr>';
							echo '<td style="padding: 10px;">Количество<br />очков</td>';
							echo '<td style="padding: 10px;">Сколько раз<br />выпало, всего</td>';
							echo '<td style="padding: 10px;">Сколько раз выпало,<br />в дробном отношении</td>';
						echo '</tr>';
					for($i = 0; $i <=10; $i++) 
					{
						echo '<tr>';
							echo '<td style="padding: 10px;">'.$rows3[$i]['num'].'</td>';
							echo '<td style="padding: 10px;">'.$rows3[$i]['count'].'</td>';
							echo '<td style="padding: 10px;">'.(round(($rows3[$i]['count']/36000)*100)/100).'</td>';
						echo '</tr>';
					}
					echo '</table>';
				?>
			</div>
			<div style="width: 300px; float: left; text-align: left;">
				<?php
					echo '<table style="text-align: center;">';
					echo '<tr>';
						echo '<td style="padding: 10px;">Дата эксперимента</td>';
						echo '<td style="padding: 10px;">'.$rows4[0]['date'].'</td>';
					echo '</tr>';
					echo '<tr>';
						echo '<td style="padding: 10px;">Время эксперимента</td>';
						echo '<td style="padding: 10px;">'.$rows4[0]['time'].'</td>';
					echo '</tr>';
					echo '<tr>';
						echo '<td style="padding: 10px;">Имя тестировщика</td>';
						echo '<td style="padding: 10px;">'.$rows4[0]['name'].'</td>';
					echo '</tr>';
					echo '<tr>';
						echo '<td style="padding: 10px;">Число костей</td>';
						echo '<td style="padding: 10px;">'.$rows4[0]['bones_num'].'</td>';
					echo '</tr>';
					echo '<tr>';
						echo '<td style="padding: 10px;">Количество бросков</td>';
						echo '<td style="padding: 10px;">'.$rows4[0]['throws'].'</td>';
					echo '</tr>';
				echo '</table>';
				?>
			</div>
        </div>
    </body>
</html>
	
	
	
