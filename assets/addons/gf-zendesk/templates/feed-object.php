<?php
if ( ! defined( 'ABSPATH' ) ) {
     exit;
 }                                            

  $form_id=$this->post('form_id',$feed);    
  $object=$this->post('object',$feed); 
   $forms = RGFormsModel::get_forms();   

  ?>

  <div class="vx_div">
        <div class="vx_head">
<div class="crm_head_div"> <?php _e('3. Select the Object to create when a form is submitted.', 'gravity-forms-zendesk-crm'); ?></div>
<div class="crm_btn_div" title="<?php _e('Expand / Collapse','gravity-forms-zendesk-crm') ?>"><i class="fa crm_toggle_btn vx_action_btn fa-minus"></i></div>
<div class="crm_clear"></div> 
  </div>

  <div class="vx_group">
    <div class="vx_row">
  <div class="vx_col1">
  <label for="vx_module" class="left_header"><?php _e("Zendesk Object", 'gravity-forms-zendesk-crm'); ?>
  <?php gform_tooltip("vx_sel_object") ?>
 </label>
  </div>
  <div class="vx_col2">
  <select id="vx_module" class="load_form crm_sel" name="object" autocomplete="off">
  <option value=""><?php _e("Select a Zendesk Object", 'gravity-forms-zendesk-crm'); ?></option>
  <?php
  
  foreach ($objects as $k=>$v){
  $sel=$feed['object'] == $k ? 'selected="selected"' : "";

  ?>
  <option value="<?php echo $k ?>" <?php echo $sel; ?>><?php echo $v ?></option>
  <?php
  }
  ?>
  </select>
    <span style="margin-left: 10px;"></span>
      <button class="button" id="vx_refresh_objects" title="<?php _e('Refresh Objects','gravity-forms-zendesk-crm'); ?>">
  <span class="reg_ok"><i class="fa fa-refresh"></i> <?php _e('Refresh Objects','gravity-forms-zendesk-crm') ?></span>
  <span class="reg_proc"><i class="fa fa-refresh fa-spin"></i> <?php _e('Refreshing...','gravity-forms-zendesk-crm') ?></span>
  </button>
  <button class="button" id="vx_refresh_fields" title="<?php _e('Refresh Fields','gravity-forms-zendesk-crm'); ?>">
  <span class="reg_ok"><i class="fa fa-refresh"></i> <?php _e('Refresh Fields','gravity-forms-zendesk-crm') ?></span>
  <span class="reg_proc"><i class="fa fa-refresh fa-spin"></i> <?php _e('Refreshing...','gravity-forms-zendesk-crm') ?></span>
  </button>
  </div>
  <div class="clear"></div>
  </div>
  
  </div>
  </div>

  
  <div id="crm_ajax_div" style="display:none; text-align: center; line-height: 100px;"><i> <?php _e('Loading, Please Wait...','gravity-forms-zendesk-crm'); ?></i></div>
  <div id="crm_err_div" class="alert_danger" style="display:none;"></div>
  
  <div id="crm_field_group" style="<?php if($object == "" || $form_id == "") {echo 'display:none';} ?>">


  
  <?php 
  if(!empty($object) && !empty($form_id)){
  $this->get_field_mapping($feed,$info);
  }
  ?>
  </div>

