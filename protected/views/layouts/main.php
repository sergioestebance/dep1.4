<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<div id="mainMbMenu">
		<?php $this->widget('application.extensions.mbmenu.MbMenu',array(
            'items'=>array(
                
				array('label'=>'Home', 'url'=>array('/site/index'),
				),
				
				array('label'=>'Mantenedores',
                  'items'=>array(
                    array('label'=>'SubItem', 'url'=>array('/subitem/admin')),
					array('label'=>'Item', 'url'=>array('/item/admin')),
					array('label'=>'Proyecto', 'url'=>array('/proyecto/admin')),
					array('label'=>'Centro Costo', 'url'=>array('/centrocosto/admin')),
					array('label'=>'Tipo Aporte', 'url'=>array('/tipoaporte/admin')),
					),
                ),
				
				array('label'=>'Procesos',
				  'items'=>array(
					array('label'=>'Compra y Gasto', 'url'=>array('/proyecto/adminProyectoPc')),
					),
				),
				
				array('label'=>'Control de Seguimiento y Documentacion',
				 'items'=>array(
					array('label'=>'Ver Procesos Compra', 'url'=>array('/procesocompra/adminSeg')),
					),
				),
				
				array('label'=>'Rendicion',
				 'items'=>array(
					array('label'=>'Ver CSDL', 'url'=>array('/controlseguimiento/adminRendicion')),
					),
				),	

			   array('label'=>'Informes',
				 'items'=>array(
					array('label'=>'Graficas', 'url'=>array('/grafica/index')),
					array('label'=>'Exportar','items'=>array( 
                        array('label'=>'PDF', 'url'=>array('#','view'=>'subsub1')), 
                        array('label'=>'EXCEL', 'url'=>array('#','view'=>'subsub2')), 
                    ),),
					array('label'=>'Notificaciones',
							'items'=>array(
								array('label'=>'Urgentes', 'url'=>array('#')),
								array('label'=>'Todos', 'url'=>array('#')),
							),
						),
				  ),
			   ),
			  
			   array('label'=>'Entrar', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest), 
			  array('label'=>'Salir ['.Yii::app()->user->name.']', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
			
            ),
    )); ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div id="footer">
			Copyright &copy; <?php echo date('Y'); ?> by Direccion de Estudios y Proyectos. Universidad de Tarapaca.<br/>
			All Rights Reserved.<br/> 
			Developed by <a href="http://www.raboit.com">RABO I.T.</a>
			<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>