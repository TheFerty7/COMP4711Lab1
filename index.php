<!DOCTYPE html>
<html>
    
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $temp = 'Eric';
        echo 'Hi, my name is ';
        echo $temp;
        $temp = "322";
        echo 'I am level ';
        echo $temp;
        echo '<br/>';
        $name = 'Jim';
        $what = 'geek';
        $level = '10';
        echo 'Hi, my name is'.$name.'. and I am a level '.$level.'.'.$what;
        echo '<br/>';
        $hourworked = 10;
        $rate = 12;
        $total = $hoursworked * $rate;
        echo 'You owe me '.$total;
        echo '<br/>';
        $hoursworked = $_GET['hours'];
        if($hoursworked > 40){
            $total = $hoursworked * $rate *1.5;
        }else{
            $total = $hoursworked * $rate;
        }
        echo ($total >0) ? 'You owe me'.$toal : "You're welcome";
        echo '<br/>';
        $position = $_GET['board'];
        $squares = str_split($position);
        
        if(winner('x'$squares)){
			echo 'You win.';
		}else if (winner('o', $squares)){
			echo 'I win.';
		}else{
			echo 'No winner yet';
		}
        
        echo '<br/>';
        
        
        ?>
    </body>
</html>

<?php
	function winner($token, $position){
		$won = false;
		if(($position[0]) == $token) &&
			($position[1]) == $token) &&
			($position[2]) == $token)){
				$won = true;
		} else if(($position[3]) == $token) &&
			($position[4]) == $token) &&
			($position[5]) == $token)){
				$won = true;
		} else if(($position[6]) == $token) &&
			($position[7]) == $token) &&
			($position[8]) == $token)){
				$won = true;
		} else if(($position[0]) == $token) &&
			($position[3]) == $token) &&
			($position[6]) == $token)){
				$won = true;
		} else if(($position[1]) == $token) &&
			($position[4]) == $token) &&
			($position[7]) == $token)){
				$won = true;
		} else if(($position[2]) == $token) &&
			($position[5]) == $token) &&
			($position[8]) == $token)){
				$won = true;
		} else if(($position[0]) == $token) &&
			($position[4]) == $token) &&
			($position[8]) == $token)){
				$won = true;
		} else if(($position[2]) == $token) &&
			($position[4]) == $token) &&
			($position[6]) == $token)){
				$won = true;
		} else 
	}
?>
