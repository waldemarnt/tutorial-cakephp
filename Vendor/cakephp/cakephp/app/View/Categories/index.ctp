                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <?php echo __('News List'); ?>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th><?php echo $this->Paginator->sort('id'); ?></th>
                                            <th><?php echo $this->Paginator->sort('name'); ?></th>
                                            <th><?php echo $this->Paginator->sort('created'); ?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
										<?php foreach ($categories as $category): ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo h($category['Category']['id']); ?>&nbsp;</td>
                                            <td><?php echo h($category['Category']['name']); ?>&nbsp;</td>
                                            <td><?php echo h($category['Category']['created']); ?>&nbsp;</td>
                                            <td><?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $category['Category']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $category['Category']['id']), null, __('Are you sure you want to delete # %s?', $category['Category']['id'])); ?> </td>
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
