<html>
    <head>
        <title>PHP Test</title>
    </head>
    <body>
    <p>Hello World</p>
    </body>
</html>
<?php phpinfo(); ?>
<?php
echo $_SERVER['HTTP_USER_AGENT'];
?>
<?php
if (strpos($_SERVER['HTTP_USER_AGENT'], 'Firefox') !== false) {
        echo 'You are using Firefox.<br />';
}
?>
