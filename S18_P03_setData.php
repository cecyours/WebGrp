<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        class Task{

            private $userName;
            private $userEmail;

            function setData($userName,$userEmail){
                $this->userName = $userName;
                $this->userEmail = $userEmail;
            }

            function getData()
            {
                return json_encode(array("userName"=>$this->userName,"UserEmail"=>$this->userEmail));
            }

           
        }
        $t = new Task();
         $t->setData("pankaj","pappu@you.com");
         
         $data = $t->getData();
         echo $data;

         

    ?>
</body>
</html>