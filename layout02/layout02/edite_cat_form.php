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
                <h5 class="breadcrumbs-title">update Category</h5>
                <ol class="breadcrumb">
                  <li><a href="index.html">Dashboard</a>
                  </li>
                  <li><a href="#">Category</a>
                  </li>
                  <li class="active">Update Category</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!--breadcrumbs end-->

        <?php 

            include "connection/connect.php";

            if(isset($_GET['cat_edt'])){
                $id = $_GET['cat_edt'];
              $qry = "SELECT * FROM cat where cat_id = '".$id."' ";
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
                    <h4 class="header2">Update Category</h4>
                    <div class="row">
                      <form class="col s12" action="edite_category.php" method="post">
                      <div class="row">
                          <div class="input-field col s12">
                            <input id="id" type="text" name="upcat_id" value="<?php echo $row['cat_id']; ?>">
                            <label for="id">ID</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input id="name" type="text" name="upcat_name" value="<?php echo $row['cat_name'];?>">
                            <label for="category name">Category Name</label>
                          </div>
                        </div>
                                               
                          <div class="row">
                            <div class="input-field col s12">
                              <button class="btn cyan waves-effect waves-light right" type="submit" name="update_cat">update category
                                <i class="mdi-content-send right"></i>
                              </button>
                              <input type="hidden" name="hid" value="<?php echo $row['cat_id']?>">
                            </div>
                          </div>
                        </div>
                      </form>
                      <?php }} ?>
                    </div>
                  </div>
                </div>

      </section>

<?php include "footer.php"; ?>

 