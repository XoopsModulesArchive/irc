<?php
$modversion['name'] = _MI_IRC_NAME;
$modversion['version'] = 1.303;
$modversion['description'] = _MI_IRC_DESC;
$modversion['credits'] = "The XOOPS Team<br />Bocazas for the free IRC Applet<br />Malakye for the Grafics";
$modversion['author'] = "S_O_D at <a href='http://www.diabloworld.com/'>http://www.diabloworld.com</a><br>enhanced by 4mps team";
$modversion['help'] = "";
$modversion['license'] = "free";
$modversion['official'] = 1.303;
$modversion['image'] = "images/irc-chat.gif";
$modversion['dirname'] = "irc";

// Menu
$modversion['hasMain'] = 0;

// Blocks
$modversion['blocks'][1]['file'] = "chatblock.php";
$modversion['blocks'][1]['name'] =_MI_CHATBLOCK;
$modversion['blocks'][1]['description'] = _MB_CHATBLOCK_DESC;
$modversion['blocks'][1]['show_func'] = "loadchat";


// Admin things
$modversion['hasAdmin'] = 1;
$modversion['adminindex'] = "admin/index.php?op=newsConfig";
$modversion['adminmenu'] = "admin/menu.php"

?>