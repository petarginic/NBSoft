<?php

function listFolderFiles($dir)
{
    $contextPath = "cetvrti";
    $currentPath = getcwd();
    
    echo '<ol>';
    foreach (new DirectoryIterator($dir) as $fileInfo) {
        if (!$fileInfo->isDot()) {
            if ($fileInfo->isFile()) {
                echo '<li><a href="' . '.' . str_replace($currentPath, "", $fileInfo->getPathname()) . '" target="_blank">' . $fileInfo->getFilename() . '</a> </li>';
            }

            if ($fileInfo->isDir()) {
                echo '<li> <a href=' . $fileInfo->getFilename() . '>' . $fileInfo->getFilename() . '</a> </li>';
                listFolderFiles($fileInfo->getPathname()); 
            }
        }
    }
    echo '</ol>';
}

?>
<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>File Directory</title>
    </head>

    <body>
        <h1>File Directory</h1>

        <?php
        $base_path = 'C:\xampp\htdocs\cetvrti';

            listFolderFiles($base_path);

        ?>
    </body>
</html>
