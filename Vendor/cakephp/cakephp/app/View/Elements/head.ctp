<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		
		echo $this->Html->css('bootstrap');
		echo $this->Html->css(
			array(
				'dataTables.bootstrap',
				'main-style',
				'morris-0.4.3.min',
				'pace-theme-big-counter',
				'social-buttons',
				'style',
				'timeline',
				'select2',
				'dropzone'
				)
			);

		echo $this->fetch('meta');
		echo $this->fetch('css');
		

		echo $this->Html->script('jquery-2.1.1');
		echo $this->Html->script('bootstrap');
		echo $this->Html->script(
			array(
			'select2',
			'script',
			'dataTables.bootstrap',
			'jquery.dataTables',
			'excanvas.min',
			'flot-demo',
			'jquery.flot',
			'jquery.flot.pie',
			'jquery.flot.resize',
			'jquery.flot.tooltip.min',
			'jquery.metisMenu',
			'dashboard-demo.js',
			'morris',
			'morris-demo',
			'pace',
			'raphael-2.1.0.min',
			'siminta',
			'dropzone'
			)
		);
	?>
		<?php echo $this->fetch('script'); ?>

</head>