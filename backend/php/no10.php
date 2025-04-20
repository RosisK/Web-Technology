<?php 
    $filename = 'sample.txt'; 
    $originalContent = file_get_contents($filename); 
    echo "<pre>" . htmlspecialchars($originalContent) . "</pre>"; 
    $newContent = $originalContent . "\nThis line was added by the PHP script."; 
    echo "<h3>Updated Content:</h3>"; 
    echo "<pre>" . htmlspecialchars($newContent) . "</pre>"; echo "<p>File has been successfully updated.</p>"; 
    ?> 
