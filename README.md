
# PHP-Docblock Generator

This class will generate docblock outline for files/folders.

## New Install instructions

    curl -L https://github.com/DominicWatts/PHP-Docblock-Generator/raw/master/docblock.phar -o php-docblock
    
    sudo chmod a+x php-docblock
 
    sudo mv php-docblock /usr/local/bin/php-docblock

Then, just run `php-docblock`

    php-docblock target.php
    
    php-docblock target/dir -r

## Legacy Install instructions

curl -LJO https://raw.githubusercontent.com/DominicWatts/PHP-Docblock-Generator/master/docblock.php

## Usage instructions

### File

    php docblock.php target.php

    php docblock.php target.php targetFunction

### Folder 

`-r` to have it recursively go through a folder

    php docblock.php target/dir -r

    php docblock.php target/dir -r targetFunction

## Update Phar

   php create-phar.php
   
### php.ini update
   
In `php.ini` following needs to be set
   
   phar.readonly = Off
   
Determine setting   
   
   php -i | grep phar.readonly
   
Locate and edit php CLI php.ini   
   
   php -i | grep php.ini
   
   
   
   
   
   
