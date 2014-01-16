<?php 
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); ?>
	
	<div class="clear"></div>
	<div class="row">
		<div id="left-sidebar-container" class="col-sm-4">

			<div id="left-sidebar-inner">
	
				<?php 
				$a = new Area('Sidebar');
				$a->display($c);
				?>
			
			</div>
	
		</div>

		<div id="main-content-container" class="col-sm-8">
			<div id="main-content-inner">
		
				<?php 
				$a = new Area('Main');
				$a->display($c);
				?>
			
			</div>
	
		</div>
	</div>	
	<!-- end main content columns -->
	
<?php $this->inc('elements/footer.php'); ?>
