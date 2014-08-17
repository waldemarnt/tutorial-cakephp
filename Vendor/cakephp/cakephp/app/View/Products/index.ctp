                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <?php echo __('Products List'); ?>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th><?php echo $this->Paginator->sort('id'); ?></th>
                                            <th><?php echo $this->Paginator->sort('title'); ?></th>
                                            <th><?php echo $this->Paginator->sort('ref'); ?></th>
                                            <th><?php echo $this->Paginator->sort('description'); ?></th>
                                            <th><?php echo $this->Paginator->sort('created'); ?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
										<?php foreach ($products as $product): ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo h($product['Product']['id']); ?>&nbsp;</td>
                                            <td><?php echo h($product['Product']['title']); ?>&nbsp;</td>
                                            <td><?php echo h($product['Product']['ref']); ?>&nbsp;</td>
                                            <td><?php echo h($product['Product']['description']); ?>&nbsp;</td>
                                            <td class="center"><?php echo h($product['Product']['created']); ?>&nbsp;</td>
                                            <td><?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $product['Product']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $product['Product']['id']), null, __('Are you sure you want to delete # %s?', $product['Product']['id'])); ?> </td>
                                        </tr>
										<?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
