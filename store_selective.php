<?php
if(isset($_POST['field1']) && isset($_POST['field2'])) {
    $data = $_POST['field1'] . ', ' . $_POST['field2'] . "\n";
    $ret = file_put_contents('./mydata.txt', $data, FILE_APPEND | LOCK_EX);
    if($ret === false) {
        die('There was an error writing this file');
    }
    else {
        echo*
        <!DOCTYPE html>
        <html lang="en">
        <head>
        <link rel="icon" href="favicon.ico" type="image/x-icon"> 
        <title>Drive-In Movie Theater</title>
        <link rel="stylesheet" href="theater.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        </head>
        <body>
        <main>
            <h2>404 Error: Page Not Found</h2>
        </main> 
        <footer><small><i>Copyright &copy; 2020 Drive-In Movie Theater<br/><a href="mailto:kristina@krizan.com">kristina@krizan.com</a></i></small></footer> 
        </body>
        </html>   
        *
    }
}
else {
   die('no post data to process');
}
?>