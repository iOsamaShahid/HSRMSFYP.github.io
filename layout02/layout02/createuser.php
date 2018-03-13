<?php
include ('connection/connect.php');

if (isset($_POST['create'])) {
  $name = $_POST['name'];
   $email = $_POST['email'];
   $contact = $_POST['contact'];
   $pass = $_POST['pass'];
   $address = $_POST['address'];

   $query = "insert into users (name, email, contact, password, address) values ('$name', '$email', '$contact', '$pass', '$address')";
   if (mysqli_query($conn,$query)) {
     header("location:view_users.php");

   }
};

 ?>
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
                <h5 class="breadcrumbs-title">Create User</h5>
                <ol class="breadcrumb">
                  <li><a href="dashboard.php">Dashboard</a>
                  </li>
                  <li><a href="#">User</a>
                  </li>
                  <li class="active">Create User</li>
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
                    <h4 class="header2">Create User</h4>
                    <div class="row">
                       <form class="col s12" action="createuser.php" method="post">
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input id="name" type="text" name="name">
                            <label for="name">Name</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input  type="text" name="email">
                            <label for="area">Email</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input  type="text" name="contact">
                            <label for="city">Contact</label>
                          </div>
                           <div class="row">
                          <div class="input-field col s12">
                            <input  type="text" name="pass">
                            <label for="city">Password</label>
                          </div>
                           <div class="row">
                          <div class="input-field col s12">
                            <input  type="text" name="address">
                            <label for="city">Address</label>
                          </div>
                                               
                          <div class="row">
                            <div class="input-field col s12">
                              <input type="submit" name="create" class="btn brn-sm btn-default btn-static right" value="Create User" />
                                
                             
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