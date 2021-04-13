<?php

$result = exec('powershell -file C:\get_serial_port.ps1');

if($result == 1)
{
   echo "Door open";
}
elseif($result == "Error")
{
  echo "Error !";
}
elseif($result == 0)
{
  echo "Door close";
}


?>
