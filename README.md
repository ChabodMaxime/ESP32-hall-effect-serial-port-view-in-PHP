# ESP32-hall-effect-serial-port-view-in-PHP

Equipment
-------------------------

- USB cable
- ESP32 (Amazon choice)
- Magnet


Introduction
-------------------------

View the status of a door on a web page. This script reads the value returned by the C ++ program from ESP32 on the serial bus. 
Reading is done by Powershell and web display is done by PHP.


Details
-------------------------
- Please replace my values with those of your environment
- Please refer to my old commit for the hall effect on ESP32
- Be careful with the php script the exec function is used without checking the values. In a real setting this can affect your security.
- https://www.php.net/manual/fr/function.escapeshellcmd.php   https://www.php.net/manual/fr/function.escapeshellarg.php

