<?php
$app = new Phar("docblock.phar", 0, "docblock.phar");
$app->addFile('docblock.php');
$defaultStub = $app->createDefaultStub("docblock.php");
$stub = "#!/usr/bin/env php \n".$defaultStub;
$app->setStub($stub);
$app->stopBuffering();
?>