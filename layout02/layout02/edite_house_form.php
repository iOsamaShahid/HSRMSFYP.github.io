<?php include "header.php"; ?>
<?php include "sidebar.php"; ?>


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
                <h5 class="breadcrumbs-title">Update House</h5>
                <ol class="breadcrumb">
                  <li><a href="index.html">Dashboard</a>
                  </li>
                  <li><a href="#">House</a>
                  </li>
                  <li class="active">Update House</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!--breadcrumbs end-->
        <!--start container-->

        <?php 

            include "connection/connect.php";

            if(isset($_GET['edt_h'])){
                $id = $_GET['edt_h'];
              $qry3 = "SELECT * FROM house where house_id = '".$id."' ";
              $run3 = mysqli_query($conn,$qry3);
              while($rowss = mysqli_fetch_assoc($run3)){ 
            
        ?>
        <div class="container">
          <div class="section">

            <p class="caption"><?php if(isset($_GET['msg'])){echo $_GET['msg'];}?></p>
        <div class="divider"></div>
            <!--Basic Form-->
            <div id="basic-form" class="section">
              <div class="row" >
                <div class="col s12 m12 l10 offset-l1" >
                  <div class="card-panel">
                    <h4 class="header2">Add House</h4>
                    <div class="row">
                      <form class="col s12" action="add_house.php" method="post">
                      <div class="row">
                       

                  <div class="input-field col s12">
                    <label>Category</label>
                    <br><br>
                    <select name="categories">
                      <option>Select Your Category</option>
                      <?php 
                           include "connection/connect.php";
                              $qry = "SELECT * FROM cat";
                              $run = mysqli_query($conn,$qry);
                              while($row = mysqli_fetch_assoc($run)){
                              ?>
                      <option value="<?php echo $row['cat_id']?>">
                          <?php echo $row['cat_name'];?>      
                     </option>
                        <?php } ?> 
                    </select>

                  </div>
              </div>

                 <div class="row">
                          <div class="input-field col s12">
                            <input id="city" type="text" name="city" value="<?php echo $rowss['city']?>">
                            <label for="city">City</label>
                          </div>
                        </div>

                         <div class="input-field col s12">
                            <label>Society</label>
                            <br><br>
                            <select name="societies">
                              <option value="" disabled selected>Select your society</option>
                              <?php 
                                 include "connection/connect.php";
                                    $qry2 = "SELECT * FROM society";
                                    $run2 = mysqli_query($conn,$qry2);
                                    while($row2 = mysqli_fetch_assoc($run2)){
                                ?>
                                <option value="<?php echo $row2['id'];?>">
                                  <?php echo $row2['sty_name'];?>
                               </option>
                                <?php } ?>
                            </select>
                          </div>
                        </div>
                        
                        <div class="row">
                          <div class="input-field col s12">
                            <input id="property" type="text" name="property" value="<?php echo $rowss['property_type']?>">
                            <label for="property">Property type</label>
                          </div>
                        </div>
                        
                        <div class="row">
                          <div class="input-field col s12">
                            <input id="property" type="text" name="descr" value="value="<?php echo $rowss['describtion']?>"">
                            <label for="property">describtion</label>
                          </div>
                        </div>
                          
                          <div class="row">
                          <div class="input-field col s12">
                            <input id="property" type="text" name="location" value="<?php echo $rowss['location']?>">
                            <label for="property"> location </label>
                          </div>
                        </div>

                          
                          <div class="row">
                          <div class="input-field col s12">
                            <input id="price" type="text" name="price" value="<?php echo $rowss['price']?>">
                            <label for="price">Price</label>
                          </div>
                        </div>

                          <div class="row">
                          <div class="input-field col s12">
                            <input id="price" type="text" name="garages" value="<?php echo $rowss['garages']?>">
                            <label for="price">Garages</label>
                          </div>
                        </div>

                        <div class="row">
                          <div class="input-field col s12">
                            <input id="price" type="text" name="floor" value="<?php echo $rowss['flor']?>">
                            <label for="price">Floor</label>
                          </div>
                        </div>

                        <div class="row">
                          <div class="input-field col s12">
                            <input id="price" type="text" name="bedroom" value="<?php echo $rowss['bedroom']?>">
                            <label for="price">Bedroom</label>
                          </div>
                        </div>

                        <div class="row">
                          <div class="input-field col s12">
                            <input id="price" type="text" name="bathroom" value="<?php echo $rowss['bathroom']?>">
                            <label for="price">Bathroom</label>
                          </div>
                        </div>


                                
                            <div class="row">
                          <div class="input-field col s12">
                            <input id="land" type="text" name="land_area" value="<?php echo $rowss['land_area']?>">
                            <label for="land">Land Area</label>
                          </div>
                        </div>
                        
                        <div class="row">
                          <div class="input-field col s12">
                            <input id="land" type="text" name="unit" value="<?php echo $rowss['unit']?>">
                            <label for="land">unit</label>
                          </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                              <button class="btn cyan waves-effect waves-light right" type="submit" name="add_house">Update house
                                <i class="mdi-content-send right"></i>
                              </button>
                            </div>
                          </div>
                        </div>
                      </form>
                      <?php } }?>
                    </div>
                  </div>
                </div>
      		</div>
  </section>
  <!-- END CONTENT -->

  <!-- //////////////////////////////////////////////////////////////////////////// -->
  <!-- START RIGHT SIDEBAR NAV-->

<?php include "footer.php"; ?>