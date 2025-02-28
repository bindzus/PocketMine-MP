<?php

/*

           -
         /   \
      /         \
   /   PocketMine  \
/          MP         \
|\     @shoghicp     /|
|.   \           /   .|
| ..     \   /     .. |
|    ..    |    ..    |
|       .. | ..       |
\          |          /
   \       |       /
      \    |    /
         \ | /

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU Lesser General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.


*/

require_once("src/common/dependencies.php");
require_once("classes/PocketMinecraftServer.class.php");
require_once("API/ServerAPI.php");

$server = new ServerAPI();
if($server->start() !== true){
	//Stop
}else{
	//Restart
}

kill(getmypid()); //Fix for segfault