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
        
        
        
        echo '<br/>';
        
        
        ?>
    </body>
</html>
