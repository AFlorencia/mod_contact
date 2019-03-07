<?php
defined('_JEXEC') or die;
$labels_pos = $params->get('labels_pos');
?>


                <?php /*FORM */ ?>

          
                <?php if( $params->get('intro_text')): ?>
                <div class="well">
                    <?php echo $params->get('intro_text'); ?>
                </div>
                <?php endif; ?>
                <form class="mod_as_contact_form" id="contact-form_<?php echo $module->id; ?>" novalidate>
                    <div class="mod_as_contact_form_message" id="message_<?php echo $module->id; ?>"></div>
                    <fieldset>
                        <?php /**** CAMPOS OCULTOS */  ?>
                        <?php 
$input = JFactory::getApplication()->input;
$id = $input->getInt('id', 0);
if(
  $id > 0 
  && $id != 2
  && $input->getString('option') == 'com_content' 
  && $input->getString('view') == 'article'
) {
    $c = JTable::getInstance('content'); 
    $c->load($id);
	//echo $c->title;
	$url = JUri::current();
//echo $url;
?>
                        <div class="form-head">
                          <h4>
                              Realice su consulta
                          </h4>
                            
                        </div>

                        <input name="articulo" type="hidden" id="articulo_<?php echo $module->id; ?>"
                            value="<?php echo $c->title; ?>">
                        <input name="articulourl" type="hidden" id="articulourl_<?php echo $module->id; ?>"
                            value="<?php echo $url; ?>">

                        <?php } ?>




                        <?php /**** CAMPOS OCULTOS */  ?>

                        <!-- Name Field -->
                        <div class="form-group control-group-input <?php echo $params->get('errors_position');?>">
                            <?php if(!$labels_pos): ?>
                            <label for="inputName_<?php echo $module->id; ?>"><?php echo $params->get('name_name'); ?>:
                            </label>
                            <?php endif; ?>
                            <input name="name" type="text" class="mod_as_contact_form_input form-control"
                                id="inputName_<?php echo $module->id; ?>" <?php if($labels_pos): ?>
                                placeholder="<?php echo $params->get('name_name'); ?>" <?php endif; ?> required>
                        </div>
                        <!-- Email Field -->
                        <?php if($params->get('email_publish')): ?>
            <div class="form-group control-group-input <?php echo $params->get('errors_position');?>">
                            <?php if(!$labels_pos): ?>
                            <label
                                for="inputEmail_<?php echo $module->id; ?>"><?php echo $params->get('email_name'); ?>:
                            </label>
                            <?php endif; ?>

                            <input name="email" type="email" class="mod_as_contact_form_input form-control"
                                id="inputEmail_<?php echo $module->id; ?>" <?php if($labels_pos): ?>
                                placeholder="<?php echo $params->get('email_name'); ?>" <?php endif; ?>
                                <?php echo $params->get('email_req'); ?>>
                        </div>
                        <?php endif; ?>

                        <!-- Phone Field -->
                        <?php if($params->get('phone_publish')): ?>
                        <div class="form-group control-group-input <?php echo $params->get('errors_position');?>">
                            <?php if(!$labels_pos): ?>
                            <label
                                for="inputEmail_<?php echo $module->id; ?>"><?php echo $params->get('phone_name'); ?>:
                            </label>
                            <?php endif; ?>

                            <input name="phone" type="text" class="mod_as_contact_form_input form-control"
                                id="inputPhone_<?php echo $module->id; ?>" <?php if($labels_pos): ?>
                                placeholder="<?php echo $params->get('phone_name'); ?>" <?php endif; ?>
                                <?php echo $params->get('phone_req'); ?>>
                        </div>
                        <?php endif; ?>
                        <!-- Subject Field -->
                        <?php if($params->get('subject_publish')): ?>
                        <div class="form-group control-group-input <?php echo $params->get('errors_position');?>">
                            <?php if(!$labels_pos): ?>
                            <label
                                for="selectSubject_<?php echo $module->id; ?>"><?php echo $params->get('subject_name'); ?>:
                            </label>
                            <?php endif; ?>
                            <input name="type" type="text" class="mod_as_contact_form_input form-control"
                                id="selectSubject_<?php echo $module->id; ?>" <?php if($labels_pos): ?>
                                placeholder="<?php echo $params->get('subject_name'); ?>" <?php endif; ?> required>
                        </div>
                        <?php endif; ?>



                        <!-- Message Field -->
                        <div class="form-group control-group-textarea <?php echo $params->get('errors_position');?>">
                            <?php if(!$labels_pos): ?>
                            <label
                                for="inputMessage_<?php echo $module->id; ?>"><?php echo $params->get('message_name'); ?>:
                            </label>
                            <?php endif; ?>

                            <textarea name="message" class="mod_as_contact_form_textarea form-control"
                                id="inputMessage_<?php echo $module->id; ?>" <?php if($labels_pos): ?>
                                placeholder="<?php echo $params->get('message_name'); ?>" <?php endif; ?>
                                required></textarea>
                        </div>


                        <!-- Submit Button -->
                        <?php if($params->get('admin_email') && ($params->get('form_m_req')==1)): ?>
                        <div class="control-group btn-group">
                            <div class="controls">

                                <button type="submit" name="button" value="Send"
                                    class="btn btn-primary mod_as_contact_form_btn"><?php echo $params->get('submitbtn_name');?></button>
                                <?php if($params->get('clear_publish')): ?>
                                <button type="reset" name="button" id="clear_<?php echo $module->id; ?>" value="Clear"
                                    class="btn btn-primary mod_as_contact_form_btn">
                                    <?php echo $params->get('clearbtn_name');?>
                                </button>
                                <?php endif; ?>
                            </div>
                        </div>

                        <?php else: ?>
                        <p><?php echo JText::_('MOD_ASCONTACT_FORM_FIELD_ENTER_ADMIN_EMAIL'); ?></p>
                        <?php endif; ?>
                    </fieldset>
                </form>

<?php include ('scripts.php'); ?>