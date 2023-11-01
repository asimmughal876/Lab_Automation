<?php
require("shared/config.php");
include("shared/_navbar.php");


?>


<div class="container-fluid page-body-wrapper">
    <!-- partial:../../partials/_sidebar.html -->
    <?php
    include("shared/_sidebar.php");
    ?>
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper" style="background-color:black;">
            <div class="page-header">
                <h3 class="page-title text-white"> Tester Table</h3>
            </div>
            <div class="col-12 grid-margin stretch-card">
                <div class="card" style="box-shadow:1px 1px 18px 7px  rgb(0, 37, 117);background: black">
                    <div class="card-body">
                        <h4 class="card-title mb-3 text-white">Tester_Table</h4>
                        <table class="table text-white">
                            <thead>
                                <tr>
                                    <th scope="col">Tester Name</th>
                                    <th scope="col">Tester Email</th>
                                    <th scope="col">Tester Password</th>
                                    <th scope="col">Tester Description</th>
                                    <th scope="col">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                            <?php 
                                $query ="SELECT * FROM `tester`";
                                $run = mysqli_query($conn, $query);
                                while ($data = mysqli_fetch_assoc($run))
                                {
                                
                                ?>
                                <tr>
                                    <td><?php echo $data['tester_name']?></td>
                                    <td><?php echo $data['tester_email']?></td>
                                    <td><?php echo $data['tester_password']?></td>
                                    <td style="white-space: pre-line;"><?php echo $data['tester_description']?></td>
                                    <td>
                                 <a href="tester_del.php?deleteid=<?php echo $data['tester_id']?>" class="btn btn-danger">Delete</a>
                                 </td>
                                </tr>
                                
                        <?php
                            }
                        ?>
                             
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include("shared/_footer.php");
?>