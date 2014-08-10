    <div class="panel panel-default">
    <div class="panel-heading">
        Edit category
    </div>
    <div class="panel-body">
    	<div class="row">
    		<div class="col-lg-6">
    			<?php echo $this->Form->create('Category'); ?>
    			<?php  echo $this->Form->input('id'); ?>
    			<div class="form-group">
    				<?php  echo $this->Form->input('name',array('label'=>'Name','class'=>'form-control')); ?>
    				<p class="help-block">Enter category name.</p>
    			</div>
    			<button type="submit" class="btn btn-primary">Submit Button</button>
    			<button type="reset" class="btn btn-success">Reset Button</button>
    			<?php echo $this->Form->end(); ?> 
    			</div>
    		</div>
    	</div>
	</div>
