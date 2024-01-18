
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="php">
        <?php 
        $number = array( 1,2,3,4,5,6,7,8,10);
        $i = 0;

        foreach ($number as $numerDef ) {
            $number[$numerDef];
            echo "$numerDef<p>-</p>";
        
            
        }
        
        for ( $i = 0; $i < 31; $i++ )
        echo "<br> $i";
        

        ?>
</div>
<style>
    .php {
        display: flex;
        
    }
    p{
        display: flex;
        margin: 0px;
    }
    p:nth-child(9){
        display: none;

    }
</style>



</body>
</html>