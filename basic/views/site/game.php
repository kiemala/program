<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
                
<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <div style="width: 1050px;">
            <div style="width: 420px; height: 200px; padding: 15px; border: 1px solid black;">
				<p>Enter name for begin an experiment:</p>
                <?php $form = ActiveForm::begin(); ?>

                    <?= $form->field($model, 'name') ?>

                    <div class="form-group">
                        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
                    </div>

                <?php ActiveForm::end(); ?>
            </div>
            <div style="width: 970px; height: auto; border: 1px solid black;">
                <?php
				echo '<table>';
					echo '<tr>';
						echo '<td style="padding: 10px 40px 10px 40px;">Experiment</td>
						<td style="padding: 10px 40px 10px 40px;">Date</td>
						<td style="padding: 10px 40px 10px 40px;">Time</td>
						<td style="padding: 10px 40px 10px 40px;">Name</td>
						<td style="padding: 10px 40px 10px 40px;">Bones</td>
						<td style="padding: 10px 40px 10px 40px;">Throws</td>
						<td style="padding: 10px 40px 10px 40px;">Reference</td>';
					echo '</tr>';
					for($i = 0; $i < count($rows2); $i++)
					{
						echo '<tr>';
							echo '<td style="padding: 10px 40px 10px 40px;">'.$rows2[$i]['id_exp'].'</td>
							<td style="padding: 10px 40px 10px 40px;">'.$rows2[$i]['date'].'</td>
							<td style="padding: 10px 40px 10px 40px;">'.$rows2[$i]['time'].'</td>
							<td style="padding: 10px 40px 10px 40px;">'.$rows2[$i]['name'].'</td>
							<td style="padding: 10px 40px 10px 40px;">'.$rows2[$i]['bones_num'].'</td>
							<td style="padding: 10px 40px 10px 40px;">'.$rows2[$i]['throws'].'</td>
							<td style="padding: 10px 40px 10px 40px;"><a href="/bones/basic/web/index.php?r=site/see&id_exp='.$rows2[$i]['id_exp'].'">Reference</a></td>';
						echo '</tr>';
					}
				echo '</table>';
				?>
            </div>
        </div>
    </body>
</html>
