<?php
 $dia = date("d");
 $diasDelMes = date("t");
 $numDiaSemana = date("N");
 $numMes = date("n");
 $anio = date("Y");
 switch ($numDiaSemana)
 {
     case 1:
         $numDiaSemana = 1;
         $dia = $dia + 1;
         break;
     case 2:
         $numDiaSemana = 2;
         $dia = $dia + 1;
         break;
     case 3:
         $numDiaSemana = 3; 
         $dia = $dia + 1;
         break;
     case 4:
         $numDiaSemana = 4;
         $dia = $dia + 1;
         break;
     case 5:
         $numDiaSemana = 5;
         $dia = $dia + 3;
         break;
     case 6:
         $numDiaSemana = 6;
         $dia = $dia + 2;
         break;
     case 7:
         $numDiaSemana = 7;
         $dia = $dia + 1;
         break;
 }
 if($dia >= $diasDelMes)
     {
         $numMes = $numMes + 1;
         $dia = $dia - $diasDelMes;
     }
 if($numMes > 12){
     $numMes = 1;
 }
 switch($numDiaSemana){
     case 1:
         $nombreDia = "Lunes";
         break;
     case 2:
         $nombreDia = "Martes";
         break;
     case 3:
         $nombreDia = "Miercoles";
         break;
     case 4:
         $nombreDia = "Jueves";
         break;
     case 5:
         $nombreDia = "Viernes";
         break;
     case 6:
         $nombreDia = "Sabado";
         break;
     case 7;
         $nombreDia = "Domingo";
         break;
 }
 switch ($numMes){
     case 1:
         $nombreMes = "Enero";
         break;
     case 2:
         $nombreMes = "Febrero";
         break;
     case 3:
         $nombreMes = "Marzo";
         break;
     case 4:
         $nombreMes = "Abril";
         break;
     case 5:
         $nombreMes = "Mayo";
         break;
     case 6: 
         $nombreMes = "Junio";
         break;
     case 7:
         $nombreMes = "Julio";
         break;
     case 8:
         $nombreMes = "Agosto";
         break;
     case 9:
         $nombreMes = "Septiembre";
         break;
     case 10:
         $nombreMes = "Octubre";
         break;
     case 11:
         $nombreMes = "Noviembre";
         break;
     case 12:
         $nombreMes = "Diciembre";
         break;
 }
?>