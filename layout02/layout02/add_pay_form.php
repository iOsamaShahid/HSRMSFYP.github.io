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
                <h5 class="breadcrumbs-title">Add Payment</h5>
                <ol class="breadcrumb">
                  <li><a href="dashboard.php">Dashboard</a>
                  </li>
                  <li><a href="#">Category</a>
                  </li>
                  <li class="active">Add Payment</li>
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
            <!--Basic Form-->
            <div id="basic-form" class="section">
              <div class="row">
                <div class="col s12 m12 l10 offset-l1">
                  <div class="card-panel">
                    <h4 class="header2">Add Payment</h4>
                 
                    <div class="row">
                      <form class="col s12" action="add_payment.php" method="post">
                      <div class="row">
                       

                  <div class="input-field col s12">
                    <label>User</label>
                    <br><br>
                    <select name="users">
                      <option>Select User</option>
                      <?php 
                           include "connection/connect.php";
                              $qry = "SELECT * FROM users";
                              $run = mysqli_query($conn,$qry);
                              while($row = mysqli_fetch_assoc($run)){
                              ?>
                      <option value="<?php echo $row['id'] ?>">
                          <?php echo $row['name'];?>      
                     </option>
                        <?php } ?> 
                    </select>

                  </div>
              </div>                           
                      <div class="row">
                          <div class="input-field col s12">
                            <input id="id" type="text" name="user_name">
                            <label for="id">Username</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input id="name" type="text" name="tot_pay">
                            <label for="category name">Total Payment</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input id="name" type="text" name="first_install">
                            <label for="category name">Installment 1</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input id="name" type="text" name="second_install">
                            <label for="category name">Installment 2</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input id="name" type="text" name="third_install">
                            <label for="category name">Installment 3</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input id="name" type="text" name="fourth_install">
                            <label for="category name">Installment 4</label>
                          </div>
                        </div>                                       
                                             
                                               
                          <div class="row">
                            <div class="input-field col s12">
                              <button class="btn cyan waves-effect waves-light right" type="submit" name="add_pay">Add Payment
                                <i class="mdi-content-send right"></i>
                              </button>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
      		</div>
      </section>

<?php include "footer.php"; ?>

 