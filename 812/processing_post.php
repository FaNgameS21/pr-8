<?php
$str = "Здрастуйте, ".$_POST ["first_name"]." ".$_POST ["last_name"] ."! <br>";
$str .= "Ви підписалися на журнал CHIP. Форма оплати - ". $_POST["plata"];
echo $str;
?>