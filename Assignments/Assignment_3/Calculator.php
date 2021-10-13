<?php

class Calculator{

function calc($operator =null, $num1 =null, $num2 =null){

        if($operator===null or $num1 ===null or $num2 === null){
            return("You must enter a string and two numbers  <br>");
         }

        if($operator === "/"){
            if($num1 ==0  or $num2 == 0){
                return("Cannot divide by zero <br>");
            
            }else{

                return "The division of the numbers is ".$num1/$num2."<br>";

            }
           
        }
               
        if($operator === "*"){
            return "The product of the numbers is ".$num1*$num2."<br>";
        }
        if($operator === "-"){
            return "The difference of the numbers is ".$num1-$num2."<br>";
        }
        if($operator === "+"){
            return "The sum of the numbers is ".$num1+$num2."<br>";
        }




}



}
