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
                                            <th><?php echo $this->Paginator->sort('title'); ?></th>
                                            <th><?php echo $this->Paginator->sort('description'); ?></th>
                                            <th><?php echo $this->Paginator->sort('category_id'); ?></th>
                                            <th><?php echo $this->Paginator->sort('created'); ?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
										<?php foreach ($news as $news): ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo h($news['News']['id']); ?>&nbsp;</td>
                                            <td><?php echo h($news['News']['title']); ?>&nbsp;</td>
                                            <td><?php echo h($news['News']['description']); ?>&nbsp;</td>
                                            <td class="center"><?php echo h($news['Category']['name']); ?>&nbsp;</td>
                                            <td class="center"><?php echo h($news['News']['created']); ?>&nbsp;</td>
                                            <td><?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $news['News']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $news['News']['id']), null, __('Are you sure you want to delete # %s?', $news['News']['id'])); ?> </td>
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
