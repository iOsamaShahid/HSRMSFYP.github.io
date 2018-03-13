<!-- START MAIN -->
    <div id="main">
        <!-- START WRAPPER -->
        <div class="wrapper">

            <!-- START LEFT SIDEBAR NAV-->
            <aside id="left-sidebar-nav">
                <ul id="slide-out" class="side-nav fixed leftside-navigation">
                    <li class="user-details cyan darken-2">
                        <div class="row">
                            <div class="col col s4 m4 l4">
                                <img src="images/admin2.png" alt="" class="circle responsive-img valign profile-image">
                            </div>
                            <div class="col col s8 m8 l8">
                                <ul id="profile-dropdown" class="dropdown-content">
                                    <li class="divider"></li>
                                    <li><a href="logout.php"><i class="mdi-hardware-keyboard-tab"></i> Logout</a>
                                    </li>
                                </ul>
                                <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown"><?php echo $_SESSION['user_name'];?><i class="mdi-navigation-arrow-drop-down right"></i></a>
                                <p class="user-roal">Administrator</p>
                            </div>
                        </div>
                    </li>
                    <li class="bold active"><a href="dashboard.php" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> Dashboard</a>
					</li>
                    
                          
                         <li class="no-padding">
                      	  <ul class="collapsible collapsible-accordion">
                            <li class="bold"><a class="collapsible-header  waves-effect waves-cyan"><i class="mdi-editor-border-all"></i> Category</a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li><a href="add_cat_form.php">Add Category</a>
                                        </li>
                                        <li><a href="manage_category_form.php">Manage Category</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            
                            <li class="bold"><a class="collapsible-header  waves-effect waves-cyan"><i class="mdi-action-home"></i> House</a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li><a href="Add_house_form.php">Add House</a>
                                        </li>
                                        <li><a href="manage_house_form.php">Manage House</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="bold"><a class="collapsible-header  waves-effect waves-cyan"><i class="mdi-action-store"></i> Society</a>
                                <div class="collapsible-body">
                                    <ul>                                        
                                        <li><a href="Add_Society_form.php">Add Society</a>
                                        </li>
                                        <li><a href="manage_society_form.php">Manage Society</a>
                                        </li>
									</ul>
                                </div>
                            </li>
                            
                            <li class="bold"><a class="collapsible-header  waves-effect waves-cyan"><i class="mdi-action-credit-card"></i> Payment</a>
                                <div class="collapsible-body">
                                    <ul>                                        
                                        <li><a href="add_pay_form.php">Add Payment</a>
                                        </li>
                                        <li><a href="manage_payment_form.php">Manage Payment</a>
                                        </li>
									</ul>
                                </div>
                            </li>
                           
                           
                            <li class="bold"><a class="collapsible-header  waves-effect waves-cyan"><i class="mdi-action-account-circle"></i> User</a>
                                <div class="collapsible-body">
                                    <ul>     
                                        <li><a href="view_users.php">View User</a>
                                        </li>                                   
                                    </ul>
                                </div>
                            </li>
                          </ul>
                  	  </li>
                       <li class="bold"><a href="contact.php" class="collapsible-header  waves-effect waves-cyan"><i class="mdi-action-account-circle"></i> Contact Details</a>
                                
                            </li>
                             <li class="bold"><a href="createuser.php" class="collapsible-header  waves-effect waves-cyan"><i class="mdi-action-account-circle"></i>Create User</a>
                                
                            </li>
                          
                      </li>
                            
                                                
                  
                <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only cyan"><i class="mdi-navigation-menu"></i></a>
            </aside>
            <!-- END LEFT SIDEBAR NAV-->

            <!-- //////////////////////////////////////////////////////////////////////////// -->
