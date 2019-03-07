<?php 
					
					$app = JFactory::getApplication();
					$sitename = $app->getCfg('sitename');
					$desc =$app->getCfg('MetaDesc');
				?>
  
<div class='address <?php echo $params->get('customStyle');?>'>
	
	<?php if( $params->get('imgdesc')) { ?>
		<div><img src="<?php echo JURI::root();?><?php echo $params->get('imgdesc');?>" alt="<?php echo $sitename; ?>" class="img-responsive"/>
	</div> <?php } ?>
	
	<?php if( $params->get('showSitename')==1) { ?>
<h3>    	 <?php echo $sitename; ?></h3>
<?php } ?>
<?php if( $params->get('showdesc')==1) { ?>
<p>    	 <?php echo $desc; ?></p>
<?php } ?>
<address>
	<?php if( $params->get('direccion')) { ?>
	<p><i class="fa fa-map-marker"></i>	<?php echo $params->get('direccion');?>
	</p> <?php } ?>
	
	<?php if( $params->get('direccion2')) { ?>
	<p><i class="fa fa-map-marker"></i>	<?php echo $params->get('direccion2');?>
	</p> <?php } ?>
		
	
	<?php if( $params->get('email1')) { ?>
	<p><i class="fa fa-envelope"></i><a href="mailto:<?php echo $params->get('email1');?>"><?php echo $params->get('email1');?></a></p> <?php } ?>
	
	<?php if( $params->get('email2')) { ?>
	<p><i class="fa fa-envelope"></i><a href="mailto:<?php echo $params->get('email2');?>"><?php echo $params->get('email2');?></a></p> <?php } ?>
	
	<?php if( $params->get('showUrl')==1) { 
		
			
		$url =JURI::base();
			$url = 'www.'.preg_replace('#^https?://#', '', $url);
		?>
<p>	<i class="fa fa-globe"></i><a href="<?php echo JURI::base(); ?>"><?php echo $url; ?></a></p>
<?php } ?>
	<?php if( $params->get('telefono')) { ?>
	
	<p>
		<i class="fa fa-phone"></i>
		<a href="tel:<?php echo $params->get('telefono');?>"><?php echo $params->get('telefono');?></a></p><?php } ?>
		
		
			<?php if( $params->get('telefono2')) { ?>		
	<p>
		<i class="fa fa-phone"></i>
		<a href="tel:<?php echo $params->get('telefono2');?>"><?php echo $params->get('telefono2');?></a></p><?php } ?>
		
		
		<?php if( $params->get('movil')) { ?>
	<p>
		<i class="fa fa-mobile"></i>
		<a href="tel:<?php echo $params->get('movil');?>"><?php echo $params->get('movil');?></a></p><?php } ?>
	
	
				<?php if( $params->get('movil2')) { ?>
					<p>
		<i class="fa fa-mobile"></i>
		<a href="tel:<?php echo $params->get('movil2');?>"><?php echo $params->get('movil2');?></a></p><?php } ?>
	
		<?php if( $params->get('wmovil')) { ?>
	<p class="whatsup">
		<i class="fa fa-whatsapp"></i>
		<?php /*https://api.whatsapp.com/send?phone=5491128871969 */ 
		$whatsapp = '549'.str_replace('-', '',$params->get('wmovil'));
		
		?>
	<a href="https://api.whatsapp.com/send?phone=<?php echo $whatsapp;?>" target="_blank"><?php echo $params->get('wmovil');?></a></p><?php } ?>
	
				<?php if( $params->get('wmovil2')) { ?>		<p>
		<i class="fa fa-whatsapp"></i>
	<a href="tel:<?php echo $params->get('wmovil2');?>"><?php echo $params->get('wmovil2');?></a></p><?php } ?>
	
	<?php if( $params->get('skypeURL')) { ?>
		<p>
			<i class="fa fa-skype"></i>
		<a href="skype:<?php echo $params->get('skypeURL');?>"><?php echo $params->get('skypeURL');?></a></p><?php } ?>
</address>
</div>