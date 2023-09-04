<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> kites </title>
    
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <!-- bootstarp css -->
    <link rel="stylesheet" href="./src/min.css">

    <!-- js query cdn -->
    <script src="./src/jq.js"></script>
    <style>
        .img-action-edit{
            width:24px;
        }
        table{
            width: 100%;
            padding: 10px;
        }
        thead{
            background: #ef3466;
            color:white;
        }
        th,td{
            padding: 10px;
        }

        tr:nth-child(even)
        {
            background: #eee;
        }
        
    </style>
    <?php
    $con = mysqli_connect("localhost", "root", "", "db_student_data") or die("kites are flying..");

    ?>
</head>

<body>


    <section class="document">

        <?php

        $sql = "SELECT * FROM tbl_data;";

        $result = mysqli_query($con, $sql);
        ?>
        <table>
            <thead>
            <tr>

                <th> ID </th>
                <th> name </th>
                <th> marks </th>
                <th> action </th>
            </tr>
    </thead>
    <tbody>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr>

                    <td>
                        <?= $row['id'] ?>
                    </td>
                    <td>
                        <?= $row['student_name'] ?>
                    </td>
                    <td>
                        <?= $row['student_mark'] ?>
                    </td>
                    <td> 
                        <img class="img-action-edit btn_edit" data-stu_id="<?=$row['id']?>" src="./src/imgs/icons8-edit-24.png" alt="">
                        <img class="img-action-edit btn_delete" data-stu_id="<?=$row['id']?>" src="./src/imgs/icons8-delete-48.png" alt="">
                        
                    </td>
                </tr>

                <?php
            }
            ?>
            </tbody>
                 
            </table>


    </section>

</body>

<!-- jquqery function / main method -->

<script>

            $(document).ready(function(){
                $(".btn_edit").click(function(){
                    var stu_id = $(this).data("stu_id");
                    alert(stu_id)
                })
                
                $(".btn_delete").click(function(){
                    console.log("kites")
                    var stu_id = $(this).data("stu_id");

                    $.ajax({
                        url:'./S13_P01_delete.php',
                        type:'post',
                        data:{
                            'id':stu_id
                        },
                        dataType:'json',
                        success:function(response){
                            console.log(response)
                            alert(response.message)
                            window.location.reload();
                            
                        }
                    })
                })
            })

</script>

</html>