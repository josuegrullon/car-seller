<div class="page-heading-two">
    <div class="container">
        <div class="col-md-7">
            <?php $title = ($this->session->userdata('renew')=='')?lang_key('payment_finish_title'):lang_key('payment_renew_title');?>
            <h5><?php echo $title;?></h5>
        </div>
        <div class="col-md-5">
        <div class="breads">
            <a href="<?php echo site_url(); ?>"><?php echo lang_key('home'); ?></a> / <?php echo $title; ?>
        </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
    
<!-- Container -->
<div class="container">

    <div class="contact-us-three">
        <div class="row">

            <div class="col-md-9 col-sm-9">

               <?php 
				if($this->session->userdata('renew')=='')
				echo lang_key('payment_finish_text');
				else
				echo lang_key('payment_renew_text');
				?>

            </div>

        </div>
    </div>

</div>