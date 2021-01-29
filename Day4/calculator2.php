<?php

class Calculator{
    public function calculate($num1,$num2,$num3,$num4,$operator){
        $result=0;

        switch($operator){
            case '+':
                $result=$num1+$num2+$num3+$num4;
                break;
        
            case '-':
                $result=$num1-$num2-$num3-$num4;
                break;
        
            case '*':
                $result=$num1*$num2*$num3*$num4;
                break;
            
            case '/':
                $result=$num1/$num2/$num3/$num4;
                break;
            
        }
        return $result;
    }
}



?>
