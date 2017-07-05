<?php
class Simple_Calculator
{
  private $num1 = 0;
  private $num2 = 0;

    function add($x,$y)
    {
            $calc= $x+$y;
            return $calc;
    }


    
    function sub($num7,$num8)
    {
            $calc= $num7-$num8;
            return $calc;
    }


    function mult($num3,$num4)    
    {
       return $num3*$num4;
        
    }


    function divions($num5, $num6)
    {
        if ($num6!=0)
        {
        $calc = $num5/$num6;
        return $calc;
        }
        else
        {
        return 'error';
        }

    }

} 

?>