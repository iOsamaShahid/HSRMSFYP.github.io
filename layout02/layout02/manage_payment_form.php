<?php include "header.php";?>
<?php include "sidebar.php";?>

<div class="container">
            <div class="row">
              <div class="col s12 m12 l12">
                <h5 class="breadcrumbs-title">Manage Payment</h5>
                <ol class="breadcrumb">
                    <li><a href="dashboard.php">Dashboard</a></li>
                    <li><a href="#">Tables</a></li>
                    <li class="active">Manage Payment</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!--breadcrumbs end-->
        

        <!--start container-->
        <div class="container">
          <div class="section">

            <p class="caption"><?php if(isset($_GET['msg'])){echo $_GET['msg']; }?> </p>
            <div class="divider"></div>
            
            <!--DataTables example-->
            <div id="table-datatables">
              <h4 class="header">Manage Payment</h4>
              <div class="row">
                <div class="col s12 m4 l3">
                 
                </div>
                <div class="col s12 m8 l9 offset-l1">
                  <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                    
                    <thead>
                        <tr>
                            <th>Username</th>
                            <th>Total Payment</th>
                            <th>Installment 1</th>
                            <th>Installment 2</th>
                            <th>Installment 3</th>
                            <th>Installment 4</th>
                            <th>Update</th>
                            <th>Delete</th>
                            
                        </tr>
                    </thead>
                    <?php 

                        include "connection/connect.php";

                        $qry = "SELECT * FROM payment";
                        $result = mysqli_query($conn,$qry);
                        $sno = 0 ;
                        while($row = mysqli_fetch_assoc($result)){?>
                    <tbody>
                        <tr>
                            <td><?php echo $row['username']?></td>
                            <td><?php echo $row['total_payments']?></td>
                            <td><?php echo $row['installment_1']?></td>
                            <td><?php echo $row['installment_2']?></td>
                            <td><?php echo $row['installment_3']?></td>
                            <td><?php echo $row['installment_4']?></td>
                           <td><a href="edite_pay_form.php?pay_edt=<?php echo $row['id'];?>"><i class="mdi-action-autorenew"></i></a></td>
                            <td><a href="delete_pay.php?pay_del=<?php echo $row['id'];?>"><i class="mdi-action-delete"></i></a></td>
                        </tr>
                    </tbody>
                        <?php } ?> 
                  </table>

                </div>
              </div>
            </div> 
            <br><br><br><br><br><br><br>
            <div class="divider"></div> 
        </div>
      </div>  
      </div>
      
     <?php include "footer.php"; ?>   
