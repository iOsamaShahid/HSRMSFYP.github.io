<?php include "header.php";?>
<?php include "sidebar.php";?>

<div class="container">
            <div class="row">
              <div class="col s12 m12 l12">
                <h5 class="breadcrumbs-title">Contact</h5>
                <ol class="breadcrumb">
                    <li><a href="dashboard.php">Dashboard</a></li>
                    <li><a href="#">Contact Details</a></li>
                    <li class="active">Contact Form</li>
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
              <h4 class="header">Contact Details</h4>
              <div class="row">
                <div class="col s12 m4 l3">
                 
                </div>
                <div class="col s12 m8 l9 offset-l1">
                  <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                    
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
							<th>Email</th>
                            <th>Phone</th>
							<th>Message</th>
                        </tr>
                    </thead>
                    <?php 

                        include "connection/connect.php";

                        $qry = "SELECT * FROM contact";
                        $result = mysqli_query($conn,$qry);
                        $sno = 0 ;
                        while($row = mysqli_fetch_assoc($result)){?>
                    <tbody>
                        <tr>
                            <td><?php echo $row['contact_id'] ?></td>
                            <td><?php echo $row['name'] ?></td>
                            <td><?php echo $row['email'] ?></td>
                            <td><?php echo $row['contact_no'] ?></td>
                            <td><?php echo $row['message'] ?></td>
                            <td><a href="delete_user.php?user_del=<?php echo $row['contact_
                            id'];?>"><i class="mdi-action-delete"></i></a></td>
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
