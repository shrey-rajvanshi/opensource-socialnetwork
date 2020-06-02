<?php
/**
 * Open Source Social Network
 *
 * @package   (softlab24.com).ossn
 * @author    OSSN Core Team <info@softlab24.com>
 * @copyright 2014-2017 SOFTLAB24 LIMITED
 * @license   Open Source Social Network License (OSSN LICENSE)  http://www.opensource-socialnetwork.org/licence
 * @link      https://www.opensource-socialnetwork.org/
 */
?>
<script>
	$(document).ready(function(){
		$('footer').find('.col-md-11').addClass('col-md-12').removeClass('col-md-11');						   
	});
</script>

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://appointmentcore.com/frontend/etc/custom/js/iframe-resizer/iframeResizer.min.js"></script>


<div class="row ossn-page-contents">
		<div class="col-md-6 home-left-contents">
            <div class="description">
            	<?php echo 'AJA is a social network connecting healthcare professionals.  It is launching in January 2020, providing a platform for nurses and doctors to connect across Sub-Saharan Africa, Asia and South America, providing community groups for nurses and doctors in their hospitals, councils, associations, countries and across the globe.'; ?>
            </div><br />

<div style="width:100%;">
            <img style="margin-left:auto; margin-right:auto; 
 display:block;" src="<?php echo ossn_theme_url();?>images/users.png" />
</div>

            <div class="description">
            	<?php echo 'Access your FREE Continuing Personal Development (CPD) portal by clicking the Icon below.  Create an AJA account and registered healthcare professionals in qualifying countries will automatically get access to a learning management system with content from leading educators.'; ?>
            </div><br />

<div style="width:100%;">
<a href="https://cpd.wcea.education" target="_blank">
            <img style="margin-left:auto; margin-right:auto; 
 display:block;" src="https://s.wcea.education/assets/22648412b6_2ac9310d/images/wcea_logo_footer.png" />
</a>
</div>

 	   </div>   
       <div class="col-md-6">
<?php echo '<iframe id="accountIframe" style="margin-top:-55px"  src="https://engagement.wcea.education/social?source_code=AJA" width="100%" frameBorder="0" height="650"></iframe>';?> 


<?php echo '<script>
  iFrameResize({ log: false }, "#accountIframe");
</script>';?>
	       			
       </div>     
</div>	
