
# PHP-Docblock Generator

This class will generate docblock outline for files/folders.


## Install instructions

curl -LJO https://raw.githubusercontent.com/DominicWatts/PHP-Docblock-Generator/master/docblock.php

## Usage instructions

### File

    php docblock.php target.php

    php docblock.php target.php targetFunction

### Folder 

`-r` to have it recursively go through a folder

    php docblock.php target/dir -r

    php docblock.php target/dir -r targetFunction
