<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * LoginForm is the model behind the login form.
 */
class Game extends Model
{

    public $name;
    public $id_exp;


    /**
     * @return array the validation rules.
     */
   public function rules()
	{
		return [
			[['name'],'required'],
		];
	}
    

    /**
     * Validates the password.
     * This method serves as the inline validation for password.
     *
     * @param string $attribute the attribute currently being validated
     * @param array $params the additional name-value pairs given in the rule
     */
   
	 public function roll()
    {
      $connection=Yii::$app->db;
      
      $sql3 = "SELECT * FROM experiment";
      $command = $connection->createCommand($sql3);
      $rows2 = $command->queryAll();
      return $rows2;
    }
	
	public function cursee($id_exp)
	{
		$connection=Yii::$app->db;
		
		$sql4 = 'SELECT num, count FROM results WHERE id_exp='.$id_exp;
        $command = $connection->createCommand($sql4);
        $rows3 = $command->queryAll();
		return $rows3;
	}
	
	public function info($id_exp)
	{
		$connection=Yii::$app->db;
		
		$sql5 = 'SELECT * FROM experiment WHERE id_exp='.$id_exp;
        $command = $connection->createCommand($sql5);
        $rows4 = $command->queryAll();
		return $rows4;
	}
	
	public function experiment($name)
	{
		$connection=Yii::$app->db;
		
		$sql = "INSERT INTO experiment (`date`, `time`, name, bones_num, throws) VALUES (:date, :time, :name, :bones_num, :throws)";
		$command = $connection->createCommand($sql);
		$command->bindParam(':date', $date);
		$command->bindParam(':time', $time);
		$command->bindParam(':name', $username);
		$command->bindParam(':bones_num', $bones_num);
		$command->bindParam(':throws', $throws);
    
		$arr = getdate();
		$date = date("y-m-d");
		$time = date ("H:i:s");
		$username = $name;
		$bones_num = 2;
		$throws = 36000;
		$command->execute();
		
		for($i = 0; $i <= 10; $i++){ $arr[$i] = 0;}
    
		for($i = 0; $i < 36000; $i++)
		{
			$cube1 = rand(1,6);
			$cube2 = rand(1,6);
			$sum = $cube1 +$cube2;
			$arr[$sum - 2]++;
		}
		
        $sql_new = "SELECT MAX(id_exp) FROM experiment";
		$command = $connection->createCommand($sql_new);
        $id_exp = $command->queryScalar();
        
        for($i = 0; $i <= 10; $i++)
        {
            $sql = "INSERT INTO results (num, count, id_exp) VALUES (:num, :count, :id_exp)";
            $command = $connection->createCommand($sql);
            $command->bindParam(':num', $num);
            $command->bindParam(':count', $count);
            $command->bindParam(':id_exp', $id_exp);
            $num = ($i+2);
            $count = $arr[$i];
            $command->execute();
        }
        $sql2 = 'SELECT num, count FROM results WHERE id_exp='.$id_exp;
        $command = $connection->createCommand($sql2);
        $rows = $command->queryAll();
        return $rows;
	}

}


