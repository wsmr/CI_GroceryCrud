<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php 
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
</head>
<body>
	<div>
		<a href='<?php echo site_url('examples/objective_management')?>'>Objectives</a> |
		<a href='<?php echo site_url('examples/action_item_management')?>'>Action Items</a> |
		<a href='<?php echo site_url('examples/country_management')?>'>Countries</a> |
		<a href='<?php echo site_url('examples/owner_management')?>'>Owner</a> |
		<a href='<?php echo site_url('examples/status_management')?>'>Status</a> |
		<a href='<?php echo site_url('examples/type_management')?>'>Type</a> | 
		<a href='<?php echo site_url('examples/order_management')?>'>order</a>
	</div>
	<div style='height:20px;'></div>  
    <div style="padding: 10px">
		<?php echo $output; ?>
    </div>
    <?php foreach($js_files as $file): ?>
        <script src="<?php echo $file; ?>"></script>
    <?php endforeach; ?>
</body>
</html>
