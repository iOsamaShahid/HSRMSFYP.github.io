 <?php include "header.php";?>
 <?php include "sidebar.php";?>
 
 <!-- START CONTENT -->
      <section id="content">
        
        <!--breadcrumbs start-->
        <div id="breadcrumbs-wrapper" class=" grey lighten-3">
            <!-- Search for small screen -->
            <div class="header-search-wrapper grey hide-on-large-only">
                <i class="mdi-action-search active"></i>
                <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize">
            </div>
          <div class="container">
            <div class="row">
              <div class="col s12 m12 l12">
                <h5 class="breadcrumbs-title">Manage Society</h5>
                <ol class="breadcrumb">
                    <li><a href="dashboard.php">Dashboard</a></li>
                    <li><a href="#">Society</a></li>
                    <li class="active">Manage Society</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!--breadcrumbs end-->
        

        <!--start container-->
        <div class="container">
          <div class="section">

            <p class="caption"><?php if(isset($_GET['msg'])){echo $_GET['msg'];}?></p>
            <div class="divider"></div>
            
            <!--DataTables example-->
            <div id="table-datatables">
              <h4 class="header">Manage Society</h4>
              <div class="row">
                <div class="col s12 m4 l3">
                 
                </div>
                <div class="col s12 m8 l9 offset-l1">
                  <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Area</th>
                            <th>City</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                       <?php 
                            include "connection/connect.php";
                            $qry = "SELECT * FROM society";
                            $result = mysqli_query($conn,$qry);
                            $sno = 0;
                            while($row = mysqli_fetch_assoc($result)){?> 
                    <tbody>
                        <tr>
                            <td><?php echo ++$sno;?></td>
                            <td><?php echo $row['sty_name']; ?></td>
                            <td><?php echo $row['sty_area'];?></td>
                            <td><?php echo $row['sty_city'];?></td>
                            <td><a href="edite_society_form.php?edt_sty=<?php echo $row['id'];?>"><i class="mdi-action-autorenew"></i></a></td>
                            <td><a href="delete_society.php?dlt_sty=<?php echo $row['id'];?>"><i class="mdi-action-delete"></i></a></td>
                        </tr>
                    </tbody>
                    <?php } ?>
                  </table>
                </div>
              </div>
            </div> 
            <br><br><br><br><br><br><br>
            <div class="divider"></div> 

    <?php include "footer.php"; ?>    