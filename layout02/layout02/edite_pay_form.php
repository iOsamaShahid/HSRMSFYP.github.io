<?php include "header.php"; ?>
<?php include "sidebar.php"; ?>

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
                <h5 class="breadcrumbs-title">update Society</h5>
                <ol class="breadcrumb">
                  <li><a href="index.html">Dashboard</a>
                  </li>
                  <li><a href="#">Society</a>
                  </li>
                  <li class="active">Update Society</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!--breadcrumbs end-->
          <?php 

            include "connection/connect.php";

            if(isset($_GET['pay_edt'])){
                $id = $_GET['pay_edt'];
              $qry = "SELECT * FROM payment where id = '".$id."' ";
              $run = mysqli_query($conn,$qry);
              while($row = mysqli_fetch_assoc($run)){ 
            
        ?>

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
                    <h4 class="header2">Update Payment</h4>
                    <div class="row">
                       <form class="col s12" action="edite_payment.php" method="post">
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input id="name" type="text" name="up_username" value="<?php echo $row['username'];?>">
                            <label for="name">Username</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input id="area" type="text" name="up_totpay" value="<?php echo $row['total_payments'];?>">
                            <label for="area">Total Payment</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input id="area" type="text" name="up_installfirst" value="<?php echo $row['installment_1'];?>">
                            <label for="area">Installment 1</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input id="area" type="text" name="up_installsecond" value="<?php echo $row['installment_2'];?>">
                            <label for="area">Installment 2</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input id="area" type="text" name="up_installthird" value="<?php echo $row['installment_3'];?>">
                            <label for="area">Installment 3</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input id="city" type="text" name="up_installfourth" value="<?php echo $row['installment_4'];?>">
                            <label for="city">Installment 4</label>
                          </div>
                  
                                               
                          <div class="row">
                            <div class="input-field col s12">
                              <button class="btn cyan waves-effect waves-light right" type="submit" name="upadd_pay">update Payment 
                                <i class="mdi-content-send right"></i>
                              </button>
                              <input type="hidden" name="hid" value="<?php echo $row['id'];?>">
                            </div>
                          </div>
                        </div>
                      </form>
                       <?php }} ?>
                    </div>
                  </div>
                </div>
              </div>
        </section>
  <!-- END CONTENT -->

  <!-- //////////////////////////////////////////////////////////////////////////// -->
  <!-- START RIGHT SIDEBAR NAV-->

  <?php include "footer.php"; ?>