<?php
function element($file, $variables = array())
{
    $output = NULL;
    $filePath = 'element/'.$file.'.php';

    if(file_exists($filePath)){
        // Extract the variables to a local namespace
        extract($variables);

        // Start output buffering
        ob_start();

        // Include the template file
        include $filePath;

        // End buffering and return its contents
        $output = ob_get_clean();

        //print $output;
    }

    return $output;

}
?>
