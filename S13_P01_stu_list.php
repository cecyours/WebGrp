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
    <script src="./src/boot.js"></script>
    <style>
        .img-action-edit {
            width: 24px;
        }

        table {
            width: 100%;
            padding: 10px;
        }

        thead {
            background: #ef3466;
            color: white;
        }

        th,
        td {
            padding: 10px;
        }

        tr:nth-child(even) {
            background: #eee;
        }
    </style>
    <?php
    $con = mysqli_connect("localhost", "root", "", "db_student_data") or die("kites are flying..");

    ?>
</head>

<body>


    <section class="document">
        <!-- Modal -->
        <div class="modal fade" id="editDetails" tabindex="-1" aria-labelledby="editDetailsLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editDetailsLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <form style='width:100%;'>
                                        <div class="mb-3">
                                            <input type="hidden" id="id" class="form-control">
                                            <label for="student_name" class="form-label">student_name</label>
                                            <input type="text" class="form-control" id="student_name">
                                        </div>
                                        <div class="mb-3">
                                            <label for="student_mark" class="form-label">student_mark</label>
                                            <input type="number" class="form-control" id="student_mark">
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-12">
                                    <div id="output">
                                        <span id="msg"></span>
                                        <div id="describe"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="btnSubmitEdit">Save changes</button>

                    </div>
                </div>
            </div>
        </div>
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
                $srNo = 0;
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>

                        <td>
                            <?= ++$srNo ?>
                        </td>
                        <td>
                            <?= $row['student_name'] ?>
                        </td>
                        <td>
                            <?= $row['student_mark'] ?>
                        </td>
                        <td>
                            <img class="img-action-edit btn_edit" data-stu_name="<?= $row['student_name'] ?>"
                                data-stu_mark="<?= $row['student_mark'] ?>" data-bs-toggle="modal"
                                data-bs-target="#editDetails" data-stu_id="<?= $row['id'] ?>"
                                src="./src/imgs/icons8-edit-24.png" alt="">
                            <img class="img-action-edit btn_delete" data-stu_id="<?= $row['id'] ?>"
                                src="./src/imgs/icons8-delete-48.png" alt="">

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

    $(document).ready(function () {

        $("#btnSubmitEdit").click(function () {


            // send ajax request
            $.ajax({
                url: "./S14_edit_student_data.php",
                type: "POST",
                data: {
                    id:$("#id").val(),
                    student_name: $("#student_name").val(),
                    student_mark: $("#student_mark").val()
                },
                success: function (response) {
                    // $("#output").html(response);
                    $(".btn-close").click();
                    console.log(response);
                    window.location.reload();
                    // alert(response)
                }

            });
        })
        $(".btn_edit").click(function () {
            var stu_id = $(this).data("stu_id");
            // alert(stu_id)
            var x = $(this).data("stu_name");
            var y = $(this).data("stu_mark");
            var id = $(this).data("stu_id");
            $("#id").val(id);
            $("#student_name").val(x);
            $("#student_mark").val(y);
        })

        $(".btn_delete").click(function () {

            var f = confirm("are you sure ?")

            if (!f)
                return

            console.log("kites")
            var stu_id = $(this).data("stu_id");

            $.ajax({
                url: './S13_P01_delete.php',
                type: 'post',
                data: {
                    'id': stu_id
                },
                dataType: 'json',
                success: function (response) {
                    console.log(response)
                    alert(response.message)
                    window.location.reload();

                }
            })
        })
    })

</script>

</html>

<!-- 

    step 1 : bootstarp model
    step 2: add data to edit button
    step 3: code to display data on model form
    step 4: code to submit edit button
    step 5: hadle ajax request on edit button submit
    step 6: create php script 

 -->