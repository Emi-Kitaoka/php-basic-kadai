<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $array = [4, 10, 15, 18, 23];

    function sort_2way($array, $order){
        if($order === true ){
            sort($array);
            echo "昇順にソートします。" ;
            echo '<br>';
            
        }
            
        else{
            rsort($array);
            echo "降順にソートします。 " ;  
            echo '<br>';
           
        }

        foreach ($array as $number) {
            echo $number . '<br>' ;
        }

    
    }

    sort_2way([4, 10, 15, 18, 23], true);
    
    sort_2way([4, 10, 15, 18, 23], false);


?>
    
</body>
</html>