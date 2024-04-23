<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

 


 
    <h1>Hello, world!</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


    <?php
        $dayofweek = date("w");
       
        switch ($dayofweek) {
            case 1:
                echo "It is Monday!";
                break; 
            case 2:
                echo "It is Tuesday!";
                break;
            case 3:
                echo "<p>It is Wednesday!</p>";
                 break;  
            case 4:
                echo "It is Thursday!";
                break;   
            case 5:
                echo "It is Friday!";
                break;
            case 6:
                echo "It is Saturday!";
                break;  
            case 0:
                echo "It is Sunday!";
                break;      
        }
    ?>



</body>
</html>