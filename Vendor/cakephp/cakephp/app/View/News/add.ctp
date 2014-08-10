    <div class="panel panel-default">
    <div class="panel-heading">
        Add news
    </div>
    <div class="panel-body">
    	<div class="row">
    		<div class="col-lg-6">
    			<?php echo $this->Form->create('News'); ?>
    			<div class="form-group">
    				<?php  echo $this->Form->input('title',array('label'=>'Title','class'=>'form-control')); ?>
    				<p class="help-block">Example block-level help text here.</p>
    			</div>
    			<div class="form-group">
    				<?php  echo $this->Form->input('description',array('type'=>'textarea','label'=>'Description','class'=>'form-control','rows'=>3)); ?>
    			</div>
    			<div class="form-group">
    				<?php  echo $this->Form->input('category_id',array('class'=>'form-control')); ?>
    			</div>
    			<button type="submit" class="btn btn-primary">Submit Button</button>
    			<button type="reset" class="btn btn-success">Reset Button</button>
    			<?php echo $this->Form->end(); ?> 
    			</div>
    		</div>
    	</div>
	</div>
