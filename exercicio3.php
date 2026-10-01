<?php

$temperatura=20;
if(($temperatura >= 30)&&($temperatura < 35))
    {
        echo "A temperatura está alta, e com isso estou com calor";
    }
    elseif(($temperatura >=35)&&($temperatura < 42))
        {
            echo "A temperatura está tão alta, que o claor está insulportável";
        }
//Essa parte são para as temperaturas baixas
        if(($temperatura >= 10)&&($temperatura < 20))
        {
            echo "A temperatura está baixa, e com isto estou com frio";
        }
        elseif(($temperatura >= 0)&&($temperatura < 10))
        {
            echo " A temperatura está tão baixa, e com isto estou na coberta";
        }
        elseif(($temperatura >= -20)&&($temperatura < 30))
            {
                echo " A temperatura está congelante";
            }

            //para temperatura agradavel
            elseif(($temperatura >= 21)&&($temperatura < 30))
            {
                echo " A temperatura está agradavel";
            }
            else
                {
                    echo "Impossível fazer qual quer coisa";
                }
                
        
            
?>