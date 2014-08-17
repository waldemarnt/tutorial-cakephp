    <div class="panel panel-default">
    <div class="panel-heading">
        Add product
    </div>
    <div class="panel-body">
    	<div class="row">
        	<div class="col-lg-6">
    			<?php echo $this->Form->create('Product'); ?>
    			<div class="form-group">
    				<?php  echo $this->Form->input('title',array('label'=>'Title','class'=>'form-control')); ?>
    				<p class="help-block">Example block-level help text here.</p>
    			</div>
                <div class="form-group">
                    <?php  echo $this->Form->input('ref',array('label'=>'Reference number','class'=>'form-control')); ?>
                    <p class="help-block">Example block-level help text here.</p>
                </div>


    			<div class="form-group">
    				<?php  echo $this->Form->input('description',array('type'=>'textarea','label'=>'Description','class'=>'form-control','rows'=>3)); ?>
    			</div>

                <div class="form-group">
                    Categories
                    <?php  echo $this->Form->input('ProductCategory',array('type'=>'select','multiple','label'=>false,'id'=>'selectCategory','name'=>'ProductCategory[]','style'=>'width:200px','options'=>$product_categories)); ?>

                    <p class="help-block">You can select multiple categories for this product.</p>
                </div>

                <div class="form-group">
                    <?php  echo $this->Form->input('tags',array('type'=>'hidden','label'=>'Tags','id'=>'inputTags','style'=>'width:200px')); ?>
                    <p class="help-block">You can select multiple tags for this product.</p>
                </div>

    			<button type="submit" class="btn btn-primary">Submit Button</button>
    			<button type="reset" class="btn btn-success">Reset Button</button>
    			<?php echo $this->Form->end(); ?> 
    			</div>
    		</div>
    	</div>
	</div>
