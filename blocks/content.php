  <?php

    include("../../../mainfile.php");
	//include ($xoopsConfig['root_path']."header.php");
	include($xoopsConfig['root_path']."modules/irc/cache/config.php");

	global $xoopsUser, $xoops_ircConfig;

	if($xoopsUser){
		$thisUser = $xoopsUser->uname() ;
	} else {
		$thisUser = "Guest";
	}
$thisUser2 = "|" . str_replace(".", "|", XOOPS_URL) . "|";
$thisUser2 = str_replace(" ", "", $thisUser2);
$thisUser2 = str_replace("http://", "", $thisUser2);
?>



  
  <body>
   <table align=center border=0 bgcolor="#B1B78B">
      <tbody>
       <tr>
        <td>
          <div align="center">
		<applet name=cr code="bocazas.class" archive="../java/bocazas.jar" width=620 height=450 align="absmiddle">

		<param name="CABBASE" value="../java/bocazas.cab">
		<param name="nickname" value="<?php echo $thisUser . $thisUser2;  ?>">
		<param name="fullname" value="<?php echo $thisUser; ?>">
		<param name="channel1" value="<?php echo $xoops_ircConfig['channel']; ?>">
		<param name="server1" value="<?php echo $xoops_ircConfig['server']; ?>:<?php echo $xoops_ircConfig['port']; ?>">
		<param name="language1" value="<?php echo $xoops_ircConfig['language']; ?>">
		<param name="list" value="<?php echo $xoops_ircConfig['showlist']; ?>">
		<param name="files" value="<?php echo $xoops_ircConfig['dccfiles']; ?>">
		<param name="popup" value="false">
		<param name="ident" value="<?php echo $thisUser; ?>">
		<param name="autoentry" value="<?php echo $xoops_ircConfig['autoenter']; ?>">


            <center>
		<p align="center"><font size="4"><b><font color="#000000">-=[ Diabloworld Chatchannel ]=-</font></b></p>
		<p align="center"><font size="4"><b></b></p>
		<p align="center"><font size="4"><b>Sorry, but you need a Java 1.1.x enabled browser to use IRC.</b></p>
		<p align="center"><font size="4"><b></b></p>
		<p align="center"><b><font color="#000000">you could visit us here:&nbsp;<a href="irc://<?php echo $xoops_ircConfig['server']; ?>:<?php echo $xoops_ircConfig['port']; ?>/">irc://<?php echo $xoops_ircConfig['server']; ?>:<?php echo $xoops_ircConfig['port']; ?>/</a></b></p>
		<p align="center"><b><font color="#000000">in Channel: <?php echo $xoops_ircConfig['channel']; ?></b></p>
             </center>
             </applet></div>
        </td>
       </tr>
       </tbody>
     </table>
    </body>
   </html>
<?php
//include ($xoopsConfig['root_path']."footer.php");
?>oot_path']."footer.php");
?>