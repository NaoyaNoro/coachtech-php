<?php

$people = array(
    array(
        "name" => "Taro",
        "age" => "25歳" ,
        "gender"   => "men"
    ),
    array(
        "name" => "Jiro",
        "age" => "20歳" ,
        "gender"   => "men"
    ),
    array(
        "name" => "Hanako",
        "age" => "20歳" ,
        "gender"   => "women"
    )
);

foreach($people as $person){
    print $person["name"] ."(" .$person["age"] . $person["gender"] . ")" ."<br / >";
}
