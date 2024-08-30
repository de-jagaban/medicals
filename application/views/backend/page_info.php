<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title"><?php echo $page_title;?></h4> <!-- Page title is echoed out from the Admin Controller -->
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> 
                        <a href="tel:<?php echo $this->db->get_where('settings', array('type' => 'phone'))->row()->description;?>" target="_blank" class="btn btn-danger btn-sm pull-right m-l-20 btn-rounded  waves-effect waves-light">Call for Emergency</a>
                        <a href="<?php echo $this->db->get_where('settings', array('type' => 'website_url'))->row()->description;?>" target="_blank" class="btn btn-info btn-sm pull-right m-l-20 btn-rounded  waves-effect waves-light">Go to Website</a>
                        <ol class="breadcrumb">
                            <li><a href="#"><?php echo $system_name;?></a></li> <!-- System name is echoed out from the index page referencing the data in the database -->
                            <li class="active"><?php echo date('Y m d');?></li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>