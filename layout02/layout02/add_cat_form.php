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
                <h5 class="breadcrumbs-title">Add Category</h5>
                <ol class="breadcrumb">
                  <li><a href="dashboard.php">Dashboard</a>
                  </li>
                  <li><a href="#">Category</a>
                  </li>
                  <li class="active">Add Category</li>
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
                    <h4 class="header2">Add Category</h4>
                    <div class="row">
                      <form class="col s12" action="add_category.php" method="post">
                      <div class="row">
                          <div class="input-field col s12">
                            <input id="id" type="text" name="categ_id">
                            <label for="id">ID</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input id="name" type="text" name="categ_name">
                            <label for="category name">Category Name</label>
                          </div>
                        </div>
                                               
                          <div class="row">
                            <div class="input-field col s12">
                              <button class="btn cyan waves-effect waves-light right" type="submit" name="add_cat">Add category
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

 