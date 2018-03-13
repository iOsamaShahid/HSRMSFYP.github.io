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
                <h5 class="breadcrumbs-title">Add Society</h5>
                <ol class="breadcrumb">
                  <li><a href="dashboard.php">Dashboard</a>
                  </li>
                  <li><a href="#">Society</a>
                  </li>
                  <li class="active">Add Society</li>
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
                    <h4 class="header2">Add Society</h4>
                    <div class="row">
                       <form class="col s12" action="add_society.php" method="post">
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input id="name" type="text" name="society_name">
                            <label for="name">Name</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input id="area" type="text" name="area_name">
                            <label for="area">Area</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input id="city" type="text" name="city">
                            <label for="city">City</label>
                          </div>
                                               
                          <div class="row">
                            <div class="input-field col s12">
                              <button class="btn cyan waves-effect waves-light right" type="submit" name="add_sty">Add society 
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
  <!-- END CONTENT -->

  <!-- //////////////////////////////////////////////////////////////////////////// -->
  <!-- START RIGHT SIDEBAR NAV-->

  <?php include "footer.php"; ?>