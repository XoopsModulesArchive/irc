<?php
include("admin_header.php");
//include_once(XOOPS_ROOT_PATH."/class/xoopstopic.php");
//include_once(XOOPS_ROOT_PATH."/modules/".$xoopsModule->dirname()."/class/class.newsstory.php");
//include_once(XOOPS_ROOT_PATH."/class/xoopshtmlform.php");
include_once(XOOPS_ROOT_PATH."/class/module.errorhandler.php");
include(XOOPS_ROOT_PATH."/modules/".$xoopsModule->dirname()."/cache/config.php");


function newsindex(){
	global $xoopsConfig, $xoopsModule;
	xoops_cp_header();
	echo "<br />\n";
	OpenTable();
	echo " - <b><a href='index.php?op=newsConfig'>"._AM_GENERALCONF."</a></b><br /><br />\n";
    	CloseTable();
}

function newsConfig() {
	global $xoopsConfig, $xoopsModule, $xoops_ircConfig;
	xoops_cp_header();
	echo "<br />";
	OpenTable();
	echo "<h4>" . _AM_GENERALCONF . "</h4><br>";
	echo "<form action='index.php' method='post'>";
    	echo "
    	<table width='100%' border='0'>
	<tr><td class='nw'>
    	"._AM_TITEL."</td><td width='100%'>
        <input type='text' name='sitetitel' SIZE='40' MAXLENGTH='50' value='".$xoops_ircConfig['sitetitel']."'>";
	echo "</td></tr>";
    	echo "
	<tr><td class='nw'>
    	"._AM_SERVER."</td><td width='100%'>
        <input type='text' name='server' SIZE='40' MAXLENGTH='150' value='".$xoops_ircConfig['server']."'>";
	echo "</td></tr>";
    	echo "
	<tr><td class='nw'>
    	"._AM_PORT."</td><td width='100%'>
        <input type='text' name='port' SIZE='5' MAXLENGTH='5' value='".$xoops_ircConfig['port']."'>";
	echo "</td></tr>";
    	echo "
	<tr><td class='nw'>
    	"._AM_CHANNEL."</td><td width='100%'>
        <input type='text' name='channel' SIZE='20' MAXLENGTH='50' value='".$xoops_ircConfig['channel']."'>";
	echo "</td></tr>";
    	echo "<tr><td class='nw'>"._AM_LANGUAGE."</td><td width='100%'>
        <select name='language'>
        <option value='".$xoops_ircConfig['language']."' selected='selected'>".$xoops_ircConfig['language']."</option>
	<option value='Español'>Español</option>
        <option value='English'>English</option>
        <option value='Deutsch'>Deutsch</option>
        <option value='Italiano'>Italiano</option>
        <option value='Galego'>Galego</option>
        <option value='Català'>Català</option>
    	</select>";
	echo "</td></tr>";
	echo "<tr><td class='nw'>" . _AM_SHOWLIST . "</td><td>";
	if ($xoops_ircConfig['showlist']=='true') {
		echo "<input type='radio' name='showlist' value='true' checked='checked' />&nbsp;" ._AM_YES."&nbsp;";
		echo "<input type='radio' name='showlist' value='false' />&nbsp;" ._AM_NO."&nbsp;";
	} else {
		echo "<input type='radio' name='showlist' value='true' />&nbsp;" ._AM_YES."&nbsp;";
		echo "<input type='radio' name='showlist' value='false' checked='checked' />&nbsp;" ._AM_NO."&nbsp;";
	}
	echo "</td></tr>";
	echo "<tr><td class='nw'>" . _AM_ALLOWFILES . "</td><td>";
	if ($xoops_ircConfig['dccfiles']=='true') {
		echo "<input type='radio' name='dccfiles' value='true' checked='checked' />&nbsp;" ._AM_YES."&nbsp;";
		echo "<input type='radio' name='dccfiles' value='false' />&nbsp;" ._AM_NO."&nbsp;";
	} else {
		echo "<input type='radio' name='dccfiles' value='true' />&nbsp;" ._AM_YES."&nbsp;";
		echo "<input type='radio' name='dccfiles' value='false' checked='checked' />&nbsp;" ._AM_NO."&nbsp;";
	}
	echo "</td></tr>";
	echo "<tr><td class='nw'>" . _AM_AUTOENTER . "</td><td>";
	if ($xoops_ircConfig['autoenter']=='true') {
		echo "<input type='radio' name='autoenter' value='true' checked='checked' />&nbsp;" ._AM_YES."&nbsp;";
		echo "<input type='radio' name='autoenter' value='false' />&nbsp;" ._AM_NO."&nbsp;";
	} else {
		echo "<input type='radio' name='autoenter' value='true' />&nbsp;" ._AM_YES."&nbsp;";
		echo "<input type='radio' name='autoenter' value='false' checked='checked' />&nbsp;" ._AM_NO."&nbsp;";
	}
	echo "</td></tr>";
    	echo "</table>";
    	echo "<input type='hidden' name='op' value='newsConfigS' />";
    	echo "<input type='submit' value='"._AM_SAVECHANGE."' />";
	echo "&nbsp;<input type='button' value='"._AM_CANCEL."' onclick='javascript:history.go(-1)' />";
    	echo "</form>";
    	CloseTable();

}

function newsConfigS() {
	global $xoopsConfig, $HTTP_POST_VARS;

	$filename = "../cache/config.php";
	$file = fopen($filename, "w");
	$content = "";
	$content .= "<?php\n";
	$content .= "\n";
	$content .= "###############################################################################\n";
	$content .= "# IRC Module\n";
	$content .= "#\n";
	$content .= "# \$xoops_ircConfig['channel']:	Which channel\n";
	$content .= "# \$xoops_ircConfig['server']:	which Ircserver\n";
	$content .= "# \$xoops_ircConfig['port']:     which port\n";
	$content .= "# \$xoops_ircConfig['ser']:	Serialnumber for jpilot\n";
	$content .= "###############################################################################\n";
	$content .= "\n";
	$content .= "\$xoops_ircConfig['channel'] = '".$HTTP_POST_VARS['channel']."';\n";
	$content .= "\$xoops_ircConfig['server'] = '".$HTTP_POST_VARS['server']."';\n";
	$content .= "\$xoops_ircConfig['port'] = '".$HTTP_POST_VARS['port']."';\n";
	$content .= "\$xoops_ircConfig['sitetitel'] = '".$HTTP_POST_VARS['sitetitel']."';\n";
	$content .= "\$xoops_ircConfig['language'] = '".$HTTP_POST_VARS['language']."';\n";
	$content .= "\$xoops_ircConfig['showlist'] = '".$HTTP_POST_VARS['showlist']."';\n";
	$content .= "\$xoops_ircConfig['dccfiles'] = '".$HTTP_POST_VARS['dccfiles']."';\n";
	$content .= "\$xoops_ircConfig['autoenter'] = '".$HTTP_POST_VARS['autoenter']."';\n";
	$content .= "\n";
	$content .= "?>";

	fwrite($file, $content);
    	fclose($file);

	redirect_header("index.php",1,_AM_DBUPDATED);
	exit();
}


if(isset($op)){
switch($op){
	case "newsConfig":
		newsConfig();
		break;
	case "newsConfigS":
		if (xoopsfwrite()) {
			newsConfigS();
		}
		break;
	default:
		newsindex();
		break;
}
}else{	

	newsindex();
}
include("admin_footer.php");
?>