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
                <h5 class="breadcrumbs-title">Manage House</h5>
                <ol class="breadcrumb">
                    <li><a href="dashboard.php">Dashboard</a></li>
                    <li><a href="#">House</a></li>
                    <li class="active">Manage House</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!--breadcrumbs end-->
        

        <!--start container-->
        <div class="container">
          <div class="section">

            <p class="caption">Manage House</p>
            <div class="divider"></div>
            
            <!--DataTables example-->
            <div id="table-datatables">
              <h4 class="header">Manage House</h4>
              
              <div class="row">
                
                <div class="col s12 m8 l9">
                  <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Sno</th>
                            <th>Category</th>
                            <th>City</th>
                            <th>society</th>
                            <th>Describtion</th>
                            <th>Property</th>
                            <th>Location</th>
                            <th>Price</th>
                            <th>Land Area</th>
                            <th>Unit</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <?php 
                        include "connection/connect.php";
                        $qry = "SELECT house.house_id, cat.cat_name, society.sty_name, house.city, house.property_type, house.describtion, house.location, house.price,house.land_area,house.unit FROM house, cat, society 
                                where house.cate_id = cat.cat_id and house.soc_id = society.id";
                         $run = mysqli_query($conn,$qry);
                         $sno = 0;
                         while($row = mysqli_fetch_assoc($run)){?>      
                    <tbody>
                        <tr>
                            <td><?php echo ++$sno; ?></td>
                            <td><?php echo $row['cat_name'];?></td>
                            <td><?php echo $row['city']?></td>
                            <td><?php echo $row['sty_name']?></td>
                            <td><?php echo $row['describtion'];?></td>
                            <td><?php echo $row['property_type']?></td>
                            <td><?php echo $row['location'];?></td>
                            <td><?php echo $row['price'];?></td>
                            <td><?php echo $row['land_area'];?></td>
                            <td><?php echo $row['unit'];?></td>
                            <td><a href="edite_house_form.php?edt_h=<?php echo $row['house_id'];?>"><i class="mdi-action-autorenew"></i></a></td>
                            <td><a href="delte_house.php?dlt_h=<?php echo $row['house_id'];?>"><i class="mdi-action-delete"></i></a></td>
                        </tr>
                    </tbody>
                    <?php }?>
                  </table>
                </div>
              </div>
            </div> 
            <br><br><br><br><br><br><br>
            <div class="divider"></div> 
            
<?php include "footer.php";?>