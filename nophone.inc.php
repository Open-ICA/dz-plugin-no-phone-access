<?php
if(!defined('IN_DISCUZ')) {
	exit('黑客S全家');
}
$fucktips = str_replace(array("<",">","&"," "),array("&lt;","&gt;","&amp;","&nbsp;"),$_G['cache']['plugin']['phone_user_and_dog_forbidden']["fucktips"];
include template('arclight_no_phone_login:no_phone');
?>