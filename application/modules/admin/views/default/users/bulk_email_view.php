<!-- file added on version 1.5 -->
<div class="row">
  <div class="col-md-12">
    <?php echo $this->session->flashdata('msg');?>

       <form class="form-horizontal" action="<?php echo site_url('admin/users/sendbulkemail');?>" method="post">

        <div class="box">

          <div class="box-title">
            <h3><i class="fa fa-bars"></i><?php echo lang_key('bulk_email'); ?></h3>
            <div class="box-tool">
              <a href="#" data-action="collapse"><i class="fa fa-chevron-up"></i></a>
            </div>
          </div>

          <div class="box-content">

         <div class="form-group">
              <label class="col-sm-3 col-lg-2 control-label">To :</label>
              <div class="col-sm-4 col-lg-5 controls">
                <select class="form-control col-md-12 to-emails" name="to[]" id="to" multiple="multiple">
                  <?php
                  $emails = array();
                  foreach($posts->result() as $row){  
            
                      $sel = (isset($_POST['to']) && in_array($row->user_email, $_POST['to']))?'selected="selected"':'';

                      $sel = (isset($sel_email) && $sel_email!='' && $row->user_email==$sel_email)?'selected="selected"':'';

                  ?>
                    <option value="<?php echo $row->user_email;?>" <?php echo $sel;?>><?php echo $row->user_email;?></option>
                  <?php
                  }
                  ?>
                </select>
                <?php echo form_error('to');?>
                <span class="help-inline"><a href="#" onclick="jQuery('#to option').prop('selected', true);">All</a>&nbsp;|&nbsp;<a href="#" onclick="jQuery('#to option').prop('selected', false);">None</a></span>
              </div>    
        </div>
        <div style="clear:both"></div>

        <div class="form-group">
              <label class="col-sm-3 col-lg-2 control-label"><?php echo lang_key('subject'); ?> :</label>
              <div class="col-sm-4 col-lg-5 controls">
                <input class="form-control col-md-12" type="text" name="subject" value="<?php echo set_value('subject');?>" />
                <?php echo form_error('subject');?>
                <span class="help-inline">&nbsp;</span>
              </div>
        </div>      
        <div style="clear:both"></div>

        <div class="form-group">
              <label class="col-sm-3 col-lg-2 control-label"><?php echo lang_key('message'); ?> :</label>
              <div class="col-sm-4 col-lg-5 controls">
                <textarea class="form-control rich" name="message" style="min-height:300px"><?php echo set_value('message');?></textarea>
                <?php echo form_error('message');?>
              <span class="help-inline">&nbsp;</span>
              </div>  
        </div>
        <div style="clear:both"></div>

        <div class="form-group">
              <label class="col-sm-3 col-lg-2 control-label">&nbsp;</label>
              <div class="col-sm-4 col-lg-5 controls">
              <button class="btn btn-primary" type="submit"><?php echo lang_key('send'); ?></button>
              <span class="help-inline">&nbsp;</span>
              </div>  
        </div>
        <div style="clear:both"></div>
        

        </div>
      </div>  

      </form>
  </div>
</div>      
<script type="text/javascript" src="<?php echo base_url('assets/tinymce/tinymce.min.js');?>"></script>
<!--Rich text editor-->
<script type="text/javascript">

tinymce.init({
    convert_urls : 0,
    selector: ".rich",
    menubar: false,
    toolbar: "styleselect | bold | link | bullist | code | fullscreen",
    language_url : '<?php echo get_tinymce_translate_url();?>',
    plugins: [

         "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",

         "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",

         "save code table contextmenu directionality emoticons template paste textcolor"

   ]

 });
</script>