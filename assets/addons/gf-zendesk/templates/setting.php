<?php
if ( ! defined( 'ABSPATH' ) ) {
     exit;
 }  
// var_dump($info);                                          
$name=$this->post('name',$info);    
 ?>
  <div class="crm_fields_table">
    <div class="crm_field">
  <div class="crm_field_cell1"><label for="vx_name"><?php _e("Account Name",'gravity-forms-zendesk-crm'); ?></label>
  </div>
  <div class="crm_field_cell2">
  <input type="text" name="crm[name]" value="<?php echo !empty($name) ? $name : 'Account #'.$id; ?>" id="vx_name" class="crm_text">

  </div>
  <div class="clear"></div>
  </div>
  

  
                
    <?php if(isset($info['api_key'])  && $info['api_key']!="") {
  ?>
      <div class="crm_field">
  <div class="crm_field_cell1"><label><?php _e("Test Connection",'gravity-forms-zendesk-crm'); ?></label></div>
  <div class="crm_field_cell2">      <button type="submit" class="button button-secondary" name="vx_test_connection"><i class="fa fa-refresh"></i> <?php _e("Test Connection",'gravity-forms-zendesk-crm'); ?></button>
  </div>
  <div class="clear"></div>
  </div> 
  <?php
    }
  ?>
    <div class="crm_field">
  <div class="crm_field_cell1"><label for="vx_url"><?php _e('URL','contact-form-zendesk-crm'); ?></label></div>
  <div class="crm_field_cell2">

  <input type="url" id="vx_url" name="crm[url]" class="crm_text" placeholder="<?php _e('https://example.zendesk.com','contact-form-zendesk-crm'); ?>" value="<?php echo esc_html($this->post('url',$info)); ?>" required>

  </div>
  <div class="clear"></div>
  </div>
      <div class="crm_field">
  <div class="crm_field_cell1"><label for="vx_email"><?php _e('Email','contact-form-zendesk-crm'); ?></label></div>
  <div class="crm_field_cell2">

  <input type="email" id="vx_email" name="crm[email]" class="crm_text" placeholder="<?php _e('Zendesk Login email','contact-form-zendesk-crm'); ?>" value="<?php echo esc_html($this->post('email',$info)); ?>" required>

  </div>
  <div class="clear"></div>
  </div>
  <div class="crm_field">
  <div class="crm_field_cell1"><label for="vx_pass"><?php _e('API Key','contact-form-zendesk-crm'); ?></label></div>
  <div class="crm_field_cell2">
  <div class="vx_tr" >
  <div class="vx_td">
  <input type="password" id="vx_pass" name="crm[api_key]" class="crm_text" placeholder="<?php _e('API Key','contact-form-zendesk-crm'); ?>" value="<?php echo esc_html($this->post('api_key',$info)); ?>" required>
  </div>
  <div class="vx_td2">
  <a href="#" class="button vx_toggle_btn vx_toggle_key" title="<?php _e('Toggle Key','contact-form-zendesk-crm'); ?>"><?php _e('Show Key','contact-form-zendesk-crm') ?></a>
  
  </div>
  </div>
  </div>
  <div class="clear"></div>
  </div>
  
  <div class="crm_field">
  <div class="crm_field_cell1"><label for="vx_error_email"><?php _e("Notify by Email on Errors",'gravity-forms-zendesk-crm'); ?></label></div>
  <div class="crm_field_cell2"><textarea name="crm[error_email]" id="vx_error_email" placeholder="<?php _e("Enter comma separated email addresses",'gravity-forms-zendesk-crm'); ?>" class="crm_text" style="height: 70px"><?php echo isset($info['error_email']) ? $info['error_email'] : ""; ?></textarea>
  <span class="howto"><?php _e("Enter comma separated email addresses. An email will be sent to these email addresses if an order is not properly added to Zendesk. Leave blank to disable.",'gravity-forms-zendesk-crm'); ?></span>
  </div>
  <div class="clear"></div>
  </div>  
   
  
  
   <div class="crm_field">
  <div class="crm_field_cell1"><label for="vx_cache">
  <?php _e("Remote Cache Time", 'gravity-forms-zendesk-crm'); ?>
  </label>
 </div>
 <div class="crm_field_cell2">
    <div style="display: table">
  <div style="display: table-cell; width: 85%;">
  <select id="vx_cache" name="crm[cache_time]" style="width: 100%">
  <?php
  $cache=array("60"=>"One Minute (for testing only)","3600"=>"One Hour","21600"=>"Six Hours","43200"=>"12 Hours","86400"=>"One Day","172800"=>"2 Days","259200"=>"3 Days","432000"=>"5 Days","604800"=>"7 Days","18144000"=>"1 Month");
  if($this->post('cache_time',$info) == ""){
   $info['cache_time']="86400";
  }
  foreach($cache as $secs=>$label){
   $sel="";
   if($this->post('cache_time',$info) == $secs){
       $sel='selected="selected"';
   }
  echo "<option value='$secs' $sel>$label</option>";     
  }   
  ?>
  </select></div><div style="display: table-cell;">
  <button name="vx_tab_action" value="refresh_lists_<?php echo $this->id ?>" class="button" style="margin-left: 10px; vertical-align: baseline; width: 110px" autocomplete="off" title="<?php _e('Refresh Picklists','gravity-forms-zendesk-crm'); ?>">Refresh Now</button>
  </div></div>
  <span class="howto">
  <?php _e("How long should form and field data be stored? This affects how often remote picklists will be checked for the Live Remote Field Mapping feature. This is an advanced setting. You likely won't need to change this.",'gravity-forms-zendesk-crm'); ?>
  </span></div>
  </div>
  

<p class="submit">
  <button type="submit" value="save" class="button-primary" title="<?php _e('Save Changes','gravity-forms-zendesk-crm'); ?>" name="save"><?php _e('Save Changes','gravity-forms-zendesk-crm'); ?></button></p>  
  </div>  

 