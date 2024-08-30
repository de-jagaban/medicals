
<div class="row">
	<div class="col-sm-12">
		<div class="panel panel-burnt panel-body" id="div_print">
            <div class="alert alert-info"> <?php echo get_phrase('SYSTEM_DOCUMENTATION');?>
            <button type="button" name="b_print" class="btn btn-xs btn-info pull-right" onClick="printdiv('div_print');"><i class="fa fa-print"></i>&nbsp;
            <?php echo get_phrase('print');?></button>
        
        </div>

            <div class="alert alert-default" align="center"><img src="<?php echo base_url() ?>uploads/logo.png"  class="img-circle" width="80" height="80"/>
                <h3><?php echo $system_name;?></h3>
                <?php $address = $this->db->get_where('settings', array('type' => 'address'))->row()->description;?>
                <?php echo $address; ?>
                <h5><?php $phone = $this->db->get_where('settings', array('type' => 'phone'))->row()->description;?></h5>
                <?php echo $phone; ?>&nbsp;&nbsp;Email:&nbsp;&nbsp;<?php $system_email = $this->db->get_where('settings', array('type' => 'system_email'))->row()->description;?>
                <?php echo $system_email; ?>

                </div>
                <hr>

            <div class="alert alert-info col-sm-4" > <?php echo get_phrase('System Overview');?></div>
            <p> 
            Below is the brief user documentation for the system, a comprehensive and detailed documentation of the system can be found on 
            the ‘About System’ page with both image and video illustrations.          

            </p>
            <h2>About the System</h2>
            <p>
            <b>System  Name:</b> WI-Enhanced Hospital Management System (Web App) <br>
            <b>Version:</b> 2.1 <br>
            <b>Creation year:</b> 2022 <br>
            <b>Author:</b> WIDA Ltd <br>
            <b>Purpose:</b> For management of hospitals’ day-to-day activities
            </p>
            
            <br>

            <div class="alert alert-info col-sm-4" > <?php echo get_phrase('Installation Guide');?></div>

            <section id="idocs_installation">
          <h2>How to Install the System</h2>
          <p class="lead">Follow the steps below to setup your site template:</p>
          <ol>
            <li>Unzip the downloaded source package and open the <strong>/'name'_hospital</strong> folder to find all the template files. You will need to upload these files to your hosting web server using FTP or localhost in order to use it on your website.</li>
            <li>Below is the folder structure and needs to be uploaded to your website or localhost root directory:
            <ul>
			<li><code>hospital/assets</code> - Contains all of the assets referenced
			  <ul>
                <li><code>hospital/css</code> - Stylesheet files</li>
                <li><code>hospital/images</code> - Images files</li>
                <li><code>hospital/js</code> - Javacript files</li>
                <li><code>hospital/sass</code> - Sass files</li>
                <li><code>hospital/vendor</code> – All external libs.</li>
              </ul>
			</li>
			<li><code>hospital/login.php</code> - Login Page
			</ul>
            </li>
            <li>You should upload all or specific HTML files as per your need.</li>
            <li>You are good to go for adding your content now!</li>
          </ol>
        </section>
        
		<hr class="divider">


            <br>
            <div class="alert alert-info col-sm-4" > <?php echo get_phrase('Video Documentation');?></div>
            <p> 
                This takes the system video overview

            </p>
            <div style="text-align:center"> 
                <button type="button" name="b_print" class="btn btn-xs btn-success" onclick="playPause()">Play/Pause</button> 
                <button type="button" name="b_print" class="btn btn-xs btn-default" onclick="makeBig()">Big</button>
                <button type="button" name="b_print" class="btn btn-xs btn-info" onclick="makeSmall()">Small</button>
                <button type="button" name="b_print" class="btn btn-xs btn-info" onclick="makeNormal()">Normal</button>
                <br><br>                
                
                <video id="video1" width="420" controls>
                    <source src="<?php echo base_url() ?>uploads/video/System_Overview.mp4" type="video/mp4">
                   
                </video>             
                
                
            </div>
            
        </div>


        <div>

        


        </div>
    </div>
</div>

<script> 
var myVideo = document.getElementById("video1"); 

function playPause() { 
  if (myVideo.paused) 
    myVideo.play(); 
  else 
    myVideo.pause(); 
} 

function makeBig() { 
    myVideo.width = 560; 
} 

function makeSmall() { 
    myVideo.width = 320; 
} 

function makeNormal() { 
    myVideo.width = 420; 
} 
</script> 

<!--This Jscript controls the print function on the page --> 
<script language="javascript">
function printdiv(printpage)
{
var headstr = "<html><head><title></title></head><body>";
var footstr = "</body>";
var newstr = document.all.item(printpage).innerHTML;
var oldstr = document.body.innerHTML;
document.body.innerHTML = headstr+newstr+footstr;
window.print();
document.body.innerHTML = oldstr;
return false;
}
</script>
