<?php
	session_start();

if($_SESSION['uname'] == '')
{
	echo "<meta http-equiv = 'refresh' content = '0; url = mem_login.php'>";	
}
	$garages = $_GET['garages'];
	$title = $_GET['title'];
	$location = $_GET['location'];
	$bathroom = $_GET['bathrrom'];
	$date = $_GET['date'];
	$bedroom = $_GET['bedroom'];
	$flor = $_GET['flor'];
	$cat = $_GET['txtcat'];
	$land_area = $_GET['land_area'];
	$descp = $_GET['descp'];
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<!-- TemplateBeginEditable name="doctitle" -->
<title>Untitled Document</title>
<!-- TemplateEndEditable -->
<!-- TemplateBeginEditable name="head" -->
<!-- TemplateEndEditable -->
</head>

<body>
</body>

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
                <h5 class="breadcrumbs-title">Add House</h5>
                <ol class="breadcrumb">
                  <li><a href="dashboard.php">Dashboard</a>
                  </li>
                  <li><a href="#">House</a>
                  </li>
                  <li class="active">Add House</li>
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
              <div class="row" >
                <div class="col s12 m12 l10 offset-l1" >
                  <div class="card-panel">
                    <h4 class="header2">Add House</h4>
                    <div class="row">
                      <form class="col s12" action="mem_ads_upload.php" method="post" enctype="multipart/form-data">
                      <div class="row">
                       

                  <div class="input-field col s12">
                  <!--  <label>Category</label>
                    <br><br>
                    <select name="categories">
                      <option>Select Your Category</option>
                      //<?php 
                           //include "connection/connect.php";
                              //$qry = "SELECT * FROM cat";
                              //$run = mysqli_query($conn,$qry);
                            //while($row = mysqli_fetch_assoc($run)){
                             ?>
                      <option value="//<?php echo $row['cat_id']?>">
                          //<?php echo $row['cat_name'];?>      
                     </option>
                        //<?php //} ?> 
                    </select>-->
                    
                    
                    <label>	Category   	
		<?php
			include 'connectdb.php';
			echo "<select name = txtcat value ='' class='field' >";
			$query="SELECT cat_id,cat_name from cat";
			$result = mysql_query($query);
				echo "<option value = ''>Select...</option>";
			while($nt=mysql_fetch_array($result))
			{
				echo "<option value=$nt[cat_id]>$nt[cat_name]</option>";
			}
			echo "</select>";
		?>
		</label>

                  </div>
                  
              </div>

                 <div class="row">
                          <div class="input-field col s12">
                            <input id="city" type="text" name="city" value="<?php echo $location; ?>">
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
                            <input id="property" type="text" name="property">
                            <label for="property">Property Type</label>
                          </div>
                        </div>
                        
                        <div class="row">
                          <div class="input-field col s12">
                            <input id="property" type="text" name="descp" value=" <?php echo $descp; ?>">
                            <label for="property">Description</label>
                          </div>
                        </div>
                          
                          <div class="row">
                          <div class="input-field col s12">
                            <input id="property" type="text" name="location" value="<?php echo $location; ?>">
                            <label for="property">Location</label>
                          </div>
                        </div>

                          
                          <div class="row">
                          <div class="input-field col s12">
                            <input id="price" type="text" name="price" value="">
                            <label for="price">Price</label>
                          </div>
                        </div>

                          <div class="row">
                          <div class="input-field col s12">
                            <input id="price" type="text" name="garages">
                            <label for="price">Garages</label>
                          </div>
                        </div>

                        <div class="row">
                          <div class="input-field col s12">
                            <input id="price" type="text" name="floor">
                            <label for="price">Floor</label>
                          </div>
                        </div>

                        <div class="row">
                          <div class="input-field col s12">
                            <input id="price" type="text" name="bedroom">
                            <label for="price">Bedroom</label>
                          </div>
                        </div>

                        <div class="row">
                          <div class="input-field col s12">
                            <input id="price" type="text" name="bathroom">
                            <label for="price">Bathroom</label>
                          </div>
                        </div>


                                
                            <div class="row">
                          <div class="input-field col s12">
                            <input id="land" type="text" name="land_area">
                            <label for="land">Land Area</label>
                          </div>
                        </div>
                        
                        <div class="row">
                          <div class="input-field col s12">
                            <input id="land" type="text" name="unit">
                            <label for="land">Unit</label>
                          </div>
                        </div>
                        <div class="file-field input-field">
                      		<input class="file-path validate" type="text" name="uploadedimage1" id="uploadedimage1" />
                      		<div class="btn">
                        		<span>IMG-1</span>
                        		<input type="file" />
                      		</div>
                    	</div>
                       <div class="file-field input-field">
                      		<input class="file-path validate" type="text" name="uploadedimage2" id="uploadedimage2" />
                      		<div class="btn">
                        		<span>IMG-2</span>
                        		<input type="file" />
                      		</div>
                    	</div>
						<div class="file-field input-field">
                      		<input class="file-path validate" type="text" name="uploadedimage3" id="uploadedimage3" />
                      		<div class="btn">
                        		<span>IMG-3</span>
                        		<input type="file" />
                      		</div>
                    	</div>
                    	
                    	
                    	
						<div class="file-field input-field">
                      		<input class="file-path validate" type="text" />
                      		<div class="btn">
                        		<span>VIDEO</span>
                        		<input type="file" name="file" />
                      		</div>
                    	</div>
                        <div class="row">
                            <div class="input-field col s12">
                              <button class="btn cyan waves-effect waves-light right" type="submit" name="submit">Add house
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
</html>
