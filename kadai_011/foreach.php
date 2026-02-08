<?php
$foods_data = ['名前' => '玉ねぎ' , '値段' => 200 , '産地' => '北海道'
];

foreach ($foods_data as $key => $food_data){
    echo $key . '：' .  $food_data . '<br>';
}

?>