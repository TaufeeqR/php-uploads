<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>File-uploads</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
        <script src="main.js"></script>
    </head>
    <body>
        
    <form action="upload.php" method="post" enctype="multipart/form-data">

    <input type="file" name="image">
    <input type="file" name="image1">
    <input type="file" name="image2">
    <input type="file" name="image3">
    <input type="file" name="image4">
    <input type="file" name="image5">
    <input type="submit" value="submit">
    
    </form>
        
    </body>
</html>