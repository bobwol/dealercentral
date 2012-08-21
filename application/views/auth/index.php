<?php
	$username = array(
		'type' => 'text',
		'name' => 'username',
		'id' => 'username',
		//'class' => 'span2'
	);
	
	$password = array(
		'type' => 'password',
		'name' => 'password',
		'id' => 'password',
		//'class' => 'span2'
	);
	
	$submit = array(
		'type' => 'submit',
		'class' => 'btn btn-primary'
	);
?>

<div class="row-fluid">
	<div class="span4 offset4">
		<div class="page-header">
			<h1>Dealer Central</h1>
		</div>
		<div class="box">
			<h4 class="box-header round-top">
				Login
			</h4><!-- /.box-header -->
			<div class="box-container-toggle">
				<div class="box-content">
					<?php echo form_open('login', array('class' => 'form-horizontal'));?>
						<?php echo form_fieldset();?>
							<div class="control-group">
								<?php echo form_label('Username', $username['id'], array('class' => 'control-label'));?>
								<div class="controls">
									<?php echo form_input($username);?>	
								</div><!-- /.controls -->	
							</div><!-- /.control-group -->
							
							<div class="control-group">
								<?php echo form_label('Password', $password['id'], array('class' => 'control-label'));?>
								<div class="controls">
									<?php echo form_input($password);?>	
								</div><!-- /.controls -->	
							</div><!-- /.control-group -->
							
							<div class="form-actions">
								<?php echo form_button($submit, 'Login');?>
							</div><!-- /.form-actions -->
						<?php echo form_fieldset_close();?>
					<?php echo form_close();?>
				</div><!-- box-content -->
			</div><!-- /.box-container-toggle -->	
		</div><!-- /.box -->
	</div><!-- /.span4 -->
</div><!-- /.row-fluid -->