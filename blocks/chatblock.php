<?php

Function loadchat(){
	global $xoopsDB, $xoopsConfig, $xoopsTheme, $xoopsUser;
	$block['title'] = "IRC";

	$block['content'] = '
	<script language="JavaScript" type="text/JavaScript">
	<!--
	function MM_openBrWindowirc(theURL,winName,features) { //v2.0
	  window.open(theURL,winName,features);
	}
	//-->
	</script>
	';

	$block['content'] .= "<a href=\"#\" onclick=\"MM_openBrWindowirc('" . $xoopsConfig['xoops_url'] . "/modules/irc/blocks/content.php','ircwindow','width=650,height=475')\">" . "<div align=center><img src=" . $xoopsConfig['xoops_url'] . "/modules/irc/images/irc-chat.gif>" . "</div></a>";
	return $block;
}


?>