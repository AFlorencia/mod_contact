
<?php $item = $params->get('contacto');
// loop 
/*  function ic($preffix){
	return '<i class="fa fa-'.$preffix.'">&nbsp;</i>';

}
function contar($items){	
	$j =0;
	foreach ( $items as $i ){
		$j++;
	}
	return $j;
}  */
$app = JFactory::getApplication();
$sitename = $app->getCfg('sitename');
$desc =$app->getCfg('MetaDesc');

if ($params->get('customStyle3') =='calc') { $columnas = 12/contar($item); }

if ($params->get('customStyle3')=='12') { $columnas = 12; } ?>

<?php if($item) { ?>
<div class="row">
<?php foreach ( $item as $datos ) { ?>
	<div class="col-md-<?php echo $columnas; ?>">
	<div class="contact-item <?php echo $params->get('customStyle2');?>">
	<?php if( strlen($datos->imgdesc2)>0) { ?>
		<img src="<?php echo JURI::root();?><?php echo $datos->imgdesc2;?>" alt="<?php echo $sitename; ?>" class="img-responsive"/>
		<?php } ?>

	<address>
	
	<?php if( strlen($datos->titulo)>0) { ?> <h4><?php echo $datos->titulo;  ?>                 </h4><?php } ?>
	<?php if( strlen($datos->descp)>0)  { ?> <div class="desc"><p> <?php echo $datos->descp; ?> </p>  </div> <?php } ?>
	<?php if( strlen($datos->aemail)>0) { ?> <p><?php echo ic('envelope').$datos->aemail;  ?>    </p><?php } ?>
	<?php if( strlen($datos->aemail2) > 0){ ?> <p><?php echo ic('envelope').$datos->aemail2; ?>     </p><?php } ?>
	<?php if( strlen($datos->dir1)>0)   { ?> <p><?php echo ic('map-marker').$datos->dir1; 	?>	</p><?php } ?>
	<?php if( strlen($datos->dir2)>0)   { ?> <p><?php echo ic('map-marker').$datos->dir2;	?> </p><?php } ?>
	<?php if( strlen($datos->tel)>0)    { ?> <p><?php echo ic('phone').$datos->tel;       ?>    </p><?php } ?>
	<?php if( strlen($datos->tel2)>0)   { ?> <p><?php echo ic('phone').$datos->tel2;       ?>    </p><?php } ?>
	<?php if( strlen($datos->wp)>0)     { ?> <p><?php echo ic('whatsapp').$datos->wp;      ?>   </p><?php } ?>
	<?php if( strlen($datos->wp2)>0)    { ?> <p><?php echo ic('whatsapp').$datos->wp2;      ?>   </p><?php } ?>
	<?php if( strlen($datos->movile)>0) { ?> <p><?php echo ic('mobile').$datos->movile;      ?>  </p><?php } ?>
	<?php if( strlen($datos->movile2)>0){ ?> <p><?php echo ic('mobile').$datos->movile2;     ?> </p><?php } ?>
	</address>
	<?php if( $datos->googlemap) {?>
		<div class="embed-responsive embed-responsive-16by9 gmap">
		<iframe class="embed-responsive-item" src="<?php echo $datos->googlemap; ?>"></iframe>
		</div>

		<? } ?>
	</div>

	</div>

	<?php } ?>
</div>
<?php } ?>