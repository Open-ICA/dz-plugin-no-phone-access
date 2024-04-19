<?php $fucktips = str_replace(array("<",">","&"," "),array("&lt;","&gt;","&amp;","&nbsp;"),$_G['cache']['plugin']['phone_user_and_dog_forbidden']["fucktips"]);?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title><?php echo $fucktips;?></title>
    </head>
    <body style="width:600px;">
         <h1 style="color:red"><?php echo $fucktips;?></h1>
    </body>
</html>