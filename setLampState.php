<?php

  if(!empty($_GET['LampState'])){
    if($_GET['LampState'] == "turnOff"){
	exec('sudo ./TurnOffSimple1.py', $output, $return);
    }
    elseif($_GET['LampState'] == "turnOn"){
	exec('sudo ./TurnOnSimple1.py', $output, $return);
    }
    else{
	exit;
    }
  }else{
    exit;
  } 

  exec('sudo ./getLampStateSimple1.py', $output1, $result1);
   
  echo "{\"value\": \"" . $output1[0] . "\"}";

?>
