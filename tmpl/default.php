<?phpdefined('_JEXEC') or die;?><?php $colsn = $params->get('presentacion'); $colsn2 = 12 -$params->get('presentacion'); if ($params->get('presentacion') ==12){	$colsn = 12;	$colsn2 = 12;}	if ($params->get('presentacion') ==6){		$colsn = 6;		$colsn2 = 6;		}	if ($params->get('presentacion') ==3){		$colsn = 8;		$colsn2 = 4;	}	$colsnf = $params->get('presentacionf'); 	if ($params->get('presentacionf') ==6){		$colsnf = 6;		}	if ($params->get('presentacionf') ==12){		$colsnf = 12;			}$labels_pos = $params->get('labels_pos'); ?>	<?php if( $params->get('standalone') ==1){ ?>		<?php //	mostrar standalone 	if($params->get('showonly')==='form'){ 	if($labels_pos==='1') { include('form-labels-inside.php');}		if($labels_pos==='0') {include('form.php'); }	 	}		if($params->get('showonly')==='contact-data'){ 	include('address.php');	} 		if($params->get('showonly')==='social'){ 	include('social-nav.php');	} 			if($params->get('showonly')==='multi'){ 		include('multi.php');	} 		?>			<?php } ?>		<?php if($params->get('standalone')==0){ ?>			<?php if( $params->get('renderbox')==1){ ?>	<div class="text-center"><button type="button" class="btn btn-primary btn-contact" data-toggle="modal" data-target="#contact-us">	<?php if($params->get('faicon')){?><i class="fa fa-<?php echo $params->get('faicon'); ?>"></i>  <?php } ?><?php echo $params->get('btntxt');?>  </button></div><!-- Modal --><div class="modal fade" id="contact-us" tabindex="-1" role="dialog" aria-labelledby="contact-title">  <div class="modal-dialog" role="document">    <div class="modal-content">      <div class="modal-header">        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>        <h4 class="modal-title" id="contact-title"><?phpecho $module->title;?></h4>      </div>      <div class="modal-body">     <?php /*FORM */ ?>	<?php 	if($labels_pos==='1') { include('form-labels-inside.php');}		if($labels_pos==='0') {include('form.php'); }	?> 		 <?php /* END FORM */ ?>      </div>      <div class="modal-footer">       <?php /* <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> */ ?>        <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $params->get('btnclose');?></button>      </div>    </div>  </div></div>			<?php } ?>		<?php if( $params->get('renderbox')==0){ ?>		<div class="row">	<?php if( $params->get('form_m_req')==1){ ?>		<div class="col-md-<?php echo $colsn; ?>">	<?php 	if($labels_pos==='1') { include('form-labels-inside.php');}		if($labels_pos==='0') {include('form.php'); }	?> 		</div>		<?php } ?><div class="col-md-<?php echo $colsn2; ?>"><?php if( ($params->get('contactinfo_m_req')==1) ) { ?><?php if( ($params->get('overrideCommon')==1) ) { ?><?php include('multi.php');?><?php } ?><?php if( ($params->get('overrideCommon')==0) ) { ?><?php include('address.php');?><?php } ?><?php } ?>	<?php if( $params->get('social_m_req')==1){ ?>		<?php include('social-nav.php'); ?>		<?php } ?>		<?php if( ($params->get('google_m_req_req')==1)) { ?>	<?php include('google-map.php') ?>		<?php } ?>		</div></div>	<?php } ?><?php  // end if modal ?><?php } ?><?php  // end if standlone False ?><?php if(  ($params->get('showmulti')==1)) { ?><?php if( ($params->get('overrideCommon')==0) ) { ?><?php include('multi.php');?><?php } ?><?php } ?><?php if( $params->get('form_m_req')==1){ ?><?php include ('scripts.php'); ?><?php } ?>