<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            font-size: 50px;
        }
    </style>
</head>
<body>
    <?php

        // $data = array("kishan"=>199,"riya"=>450,"krishu"=>260,"pappu"=>400);

        // echo $data."<br>";
        // print_r($data);

        // foreach($data as $name=>$marks)
        // {
        //     echo "<h3>$name : $marks</h3>";
        // }
       
    ?>

    <hr>
    <?php
        // nested array

        $data = array(
            '101'=> array("rollno"=>'101',"name"=>"krishu","subject"=>"python"),
            '102'=> array("rollno"=>'102',"name"=>"vaibhav","subject"=>"php"),
            '103'=> array("rollno"=>'103',"name"=>"kishan","subject"=>"javascript"),
            '104'=> array("rollno"=>'104',"name"=>"pappu","subject"=>"Core java"),
            '105'=> array("rollno"=>'105',"name"=>"nitu","subject"=>"HTML"),
        );

        // print_r($data['103']);

    ?>
    <?php
    
        foreach($data as $roll=>$info)
        {

         ?>
            <p>
                <h1><?=$info['name']?></h1>
                <?=$info['subject']?>,<?=$info['rollno']?></p>
         <?php
        }
    ?>
</body>
</html>