    <div class="panel panel-default">
    <div class="panel-heading">
        Add Product Category
    </div>
    <div class="panel-body">
    	<div class="row">
    		<div class="col-lg-6">
    			<?php echo $this->Form->create('ProductCategory'); ?>
    			<div class="form-group">
    				<?php  echo $this->Form->input('name',array('label'=>'Title','class'=>'form-control')); ?>
    				<p class="help-block">Example block-level help text here.</p>
    			</div>

    			<button type="submit" class="btn btn-primary">Submit Button</button>
    			<button type="reset" class="btn btn-success">Reset Button</button>
    			<?php echo $this->Form->end(); ?> 
    			</div>
    		</div>
    	</div>
	</div>
