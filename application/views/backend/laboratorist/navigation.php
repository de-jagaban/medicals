    <!-- Left navbar-header -->
    <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse slimscrollsidebar">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                        <!-- input-group -->
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search..."> <span class="input-group-btn">
            <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
            </span> </div>
                        <!-- /input-group -->
                    </li>
                    <li class="user-pro">
                    <?php 
                    //This loads the user profile image to the user dashboard
                    $key = $this->session->userdata('login_type') . '_id'; 
                    $image_path = 'uploads/' . $this->session->userdata('login_type') . '_image/' . $this->session->userdata($key) . '.jpg';

                    //Process if the user image does not exist
                    if(!file_exists($image_path)){
                        $image_path = 'uploads/default.jpg';
                    }

                    
                    ?>

                        <a href="#" class="waves-effect"><img src="<?php echo base_url(). $image_path; ?>" alt="user-img" class="img-circle"> 
                    
                    <?php
                    //This selects the user id by the login_type
                    $account_type    = $this->session->userdata('login_type');
                    $account_id      = $account_type.'_id';
                    //Picks from the Crud_model.php a function which selects the user by the id from the db and echoes the username on the dashboard
                    $name = $this->crud_model->get_type_name_by_id($account_type, $this->session->userdata($account_id), 'name');

                    ?>

                        <span class="hide-menu"><?php echo $name;?><span class="fa arrow"></span></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo base_url();?>laboratorist/change_profile"><i class="ti-user"></i> My Profile</a></li>
                           <li><a href="<?php echo base_url();?>login/logout"><i class="fa fa-sign-out-off"></i> Logout</a></li>
                        </ul>
                    </li>

                    <li class="<?php if($page_name == 'dashboard') echo 'active';?>"> 
                    <a href="<?php echo base_url();?>laboratorist/dashboard" class="waves-effect">
                    <i class="ti-dashboard p-r-10"></i>
                    <span class="hide-menu"><?php echo get_phrase('Dashboard');?></span></a> 
                    </li>
                
                <!-- 
                    THESE CONTROL THE NAVIGATION MENU AND THE MODULE FUNCTIONS IN THE DASHBOARD
                -->
                                 


                <li> 
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-tint p-r-10"></i> <span class="hide-menu"> <?php echo get_phrase('Manage Blood');?> <span class="fa arrow"></span></span></a>
                    <ul class="nav nav-second-level"<?php if($page_name == 'manage_donor' || $page_name == 'manage_blood') echo 'active';?>>

                            <li class="<?php if($page_name == 'manage_donor') echo 'active';?>"> 
                                <a href="<?php echo base_url();?>donor/manage_donor">
                                    <i class="fa fa-angle-double-right p-r-10"></i>
                                    <span class="hide-menu"><?php echo get_phrase('Manage Donor');?></span>
                                </a> 
                            </li>

                            <li class="<?php if($page_name == 'manage_blood') echo 'active';?>"> 
                                <a href="<?php echo base_url();?>blood/manage_blood">
                                    <i class="fa fa-angle-double-right p-r-10"></i>
                                    <span class="hide-menu"><?php echo get_phrase('Manage Blood');?></span>
                                </a> 
                            </li>

                            
                    </ul>
                </li>


                <li> 
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-eyedropper p-r-10"></i> <span class="hide-menu"> <?php echo get_phrase('Manage Test');?> <span class="fa arrow"></span></span></a>
                    <ul class="nav nav-second-level"<?php if($page_name == 'add_test' 
                     || $page_name == 'edit_test' || $page_name == 'list_test') echo 'active';?>>

                            <li class="<?php if($page_name == 'add_test') echo 'active';?>"> 
                            <a href="<?php echo base_url();?>test/add_test">
                            <i class="fa fa-angle-double-right p-r-10"></i>
                            <span class="hide-menu"><?php echo get_phrase('Add Test');?></span>
                            </a> 
                            </li>

                            <li class="<?php if($page_name == 'list_test') echo 'active';?>"> 
                            <a href="<?php echo base_url();?>test/list_test">
                            <i class="fa fa-angle-double-right p-r-10"></i>
                            <span class="hide-menu"><?php echo get_phrase('List Test');?></span>
                            </a> 
                            </li>

                    </ul>
                </li>

                
                <li> 
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-bell p-r-10"></i> <span class="hide-menu"> <?php echo get_phrase('Manage Notification');?> <span class="fa arrow"></span></span></a>
                    <ul class="nav nav-second-level"<?php if($page_name == 'notification') echo 'active';?>>

                            <li class="<?php if($page_name == 'notification') echo 'active';?>"> 
                                <a href="<?php echo base_url();?>laboratorist/notification">
                                    <i class="fa fa-angle-double-right p-r-10"></i>
                                    <span class="hide-menu"><?php echo get_phrase('New Notification');?></span>
                                </a> 
                            </li>
                    </ul>
                </li>


                <li class="<?php if($page_name == 'change_profile') echo 'active';?>"> 
                    <a href="<?php echo base_url();?>laboratorist/change_profile" class="waves-effect">
                        <i class="ti-user p-r-10"></i>
                        <span class="hide-menu"><?php echo get_phrase('Update Profile');?></span></a> 
                </li>

                <li> 
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-info-circle p-r-10"></i> <span class="hide-menu"> <?php echo get_phrase('System Info');?> <span class="fa arrow"></span></span></a>
                    <ul class="nav nav-second-level"<?php if($page_name == 'about_system') echo 'active';?>>

                            <li class="<?php if($page_name == 'about_system') echo 'active';?>"> 
                            <a href="<?php echo base_url();?>setting/about_system">
                            <i class="fa fa-angle-double-right p-r-10"></i>
                            <span class="hide-menu"><?php echo get_phrase('About System');?></span>
                            </a> 
                            </li>
                    </ul>
                </li>
            

                <li> 
                    <a href="<?php echo base_url();?>login/logout" class="waves-effect">
                    <i class="fa fa-sign-out p-r-10"></i>
                    <span class="hide-menu"><?php echo get_phrase('Logout');?></span></a> 
                </li>
                    
                </ul>
            </div>
        </div>
        <!-- Left navbar-header end -->