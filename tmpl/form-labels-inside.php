<?php

// labels inside

?>

<?php if( $params->get('intro_text')): ?>
<div class="well">
<?php echo $params->get('intro_text'); ?>
</div>
<?php endif; ?>

<form class="mod_as_contact_form" id="contact-form_<?php echo $module->id; ?>" novalidate >
<div class="mod_as_contact_form_message" id="message_<?php echo $module->id; ?>"></div>



<div class="row">


<!-- Name Field -->
<div class="form-group control-group-input <?php echo $params->get('errors_position');?> col-md-<?php echo $colsnf; ?>">

<div class="input-group margin-bottom-sm">
<span class="input-group-addon"><i class="fa fa-user fa-fw">&nbsp;</i></span>
<input name="name" type="text" class="mod_as_contact_form_input form-control" id="inputName_<?php echo $module->id; ?>"
<?php if($labels_pos): ?> placeholder="<?php echo $params->get('name_name'); ?>"<?php endif; ?> required>
</div>

</div>

<!-- Email Field -->
<?php if($params->get('email_publish')): ?>			  
<div class="form-group control-group-input <?php echo $params->get('errors_position');?> col-md-<?php echo $colsnf; ?>">
<div class="input-group margin-bottom-sm">
<span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>



<input name="email" type="email" class="mod_as_contact_form_input form-control" id="inputEmail_<?php echo $module->id; ?>"
<?php if($labels_pos): ?> placeholder="<?php echo $params->get('email_name'); ?>"<?php endif; ?> <?php echo $params->get('email_req'); ?>>
</div>
</div>
<?php endif; ?>
</div>






<div class="row">

<!-- Phone Field -->
<?php if($params->get('phone_publish')): ?>
<div class="form-group control-group-input <?php echo $params->get('errors_position');?> col-md-<?php echo $colsnf; ?>">

<div class="input-group margin-bottom-sm">
<span class="input-group-addon"><i class="fa fa-phone fa-fw"></i></span>

<input name="phone" type="text" class="mod_as_contact_form_input form-control" id="inputPhone_<?php echo $module->id; ?>"
<?php if($labels_pos): ?> placeholder="<?php echo $params->get('phone_name'); ?>"<?php endif; ?> <?php echo $params->get('phone_req'); ?>>
</div>
</div>
<?php endif; ?>

<!-- Subject Field -->
<?php if($params->get('subject_publish')): ?>
<div class="form-group control-group-input <?php echo $params->get('errors_position');?> col-md-<?php echo $colsnf; ?>">
<div class="input-group margin-bottom-sm">
<span class="input-group-addon"><i class="fa fa-bullhorn fa-fw"></i></span>

<input name="type" type="text" class="mod_as_contact_form_input form-control" id="selectSubject_<?php echo $module->id; ?>"
<?php if($labels_pos): ?> placeholder="<?php echo $params->get('subject_name'); ?>"<?php endif; ?> required>
</div>
</div>
<?php endif; ?>
</div>

<div class="row">

<!-- Message Field -->
<div class="form-group control-group-textarea <?php echo $params->get('errors_position');?> col-md-12">

<div class="input-group margin-bottom-sm">
<span class="input-group-addon"><i class="fa fa-comment fa-fw"></i></span>
<textarea name="message" class="mod_as_contact_form_textarea form-control" id="inputMessage_<?php echo $module->id; ?>"
<?php if($labels_pos): ?> placeholder="<?php echo $params->get('message_name'); ?>"<?php endif; ?> required></textarea>
</div>
</div>

</div>
<div class="row">


<!-- Submit Button -->
<?php if($params->get('admin_email') && ($params->get('form_m_req')==1)): ?>
<div class="control-group btn-group col-md-<?php echo $colsnf; ?>">
<div class="controls">


<button type="submit" name="button" value="Send" class="btn btn-primary mod_as_contact_form_btn"><?php echo $params->get('submitbtn_name');?></button> 
<?php if($params->get('clear_publish')): ?>
<button type="reset" name="button" id="clear_<?php echo $module->id; ?>" value="Clear" class="btn btn-primary mod_as_contact_form_btn">
<?php echo $params->get('clearbtn_name');?>
</button>
<?php endif; ?>     
</div>
</div>

</div>
<?php else: ?>
<p><?php echo JText::_('MOD_ASCONTACT_FORM_FIELD_ENTER_ADMIN_EMAIL'); ?></p>
<?php endif; ?>

</form>