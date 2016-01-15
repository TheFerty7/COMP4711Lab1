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
        
		/*
        if(winner('x'$squares)){
			echo 'You win.';
		}else if (winner('o', $squares)){
			echo 'I win.';
		}else{
			echo 'No winner yet';
		}
        
        echo '<br/>';
        */
		
		$game = new Game($squares);
		if($game->winner('x')){
			echo 'You win';
			
		}else if ($game->winner('o')){
			echo 'I win';
		}else{
			echo 'No winner yet';
		}
        
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

	function winner2($token, $position){
		for($row = 0; $row<3; $row++){
			$result = true;
			for($col =0; $col<3; $col++){
				if($position[3*$row+$col] != $token){
					$result = false;
				}
			}
		}
	}
	
	class Game{
		var $position;
		
		function construct($squares){
			$this->position = str_split($squares);
		}
		
		function winner3($token){
			for($row = 0; $row<3; $row++){
				$result = true;
				for($col =0; $col<3; $col++){
					if(this->$position[3*$row+$col] != $token){
						$result = false;
					}
				}
			}
		}
		
		function display(){
			echo '<table cols="3" style="font-size:large; font-weight:bold">';
			echo '<tr>';
			for($pos = 0; $pos < 9; $pos++){
				echo $this->show_cell($pos);
				if($pos % 3 == 2) echo '<tr></tr>';
			}
			echo '</tr>';
			echo '</table>';
		}
		
		function show_cell($which){
			$token = $this->position[$which];
			if($token <> '-'){
				return '<td>'.$token.'</td>';
			}
			$this->newposition = $this->position;
			$this->newposition[$which] = 'o';
			$move = implode($this->newposition);
			$link = '/?board='.$move;
			return '<td><a href="'.$link.'">-</a></td>';
		}
		
	}
?>
