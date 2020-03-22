<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Content-Type: application/json; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flower | Flowers</title>
    <link rel="stylesheet" type="text/css" href="/live/public/css/reset.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
</head>
<body>
    <div>
        <?php $this->view('blocks/header');?> 
    </div>
    <div>
         <?php $this->view('blocks/ads');?> 
         <?php
         if(!empty($data))
         {
            print_r($data);
            echo "</brt></br>";
         }
?> 
    </div>
</body>
</html>