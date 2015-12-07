<div class="cont">

	<div class="users view">
		<?php if ( $user['User']['image'] != null ): ?>
			<?php echo $this->Html->image('user_imgs/' . $user['User']['image'], array('alt' => 'CakePHP', 'class' => 'user_img')); ?>
		<?php endif; ?>

		<div id="user_name">[<?php echo __($user['User']['username']); ?>]</div>

		<table cellpadding = "0" cellspacing = "0">
			<tr>
				<th>[full name]</th>
				<td><?php echo __($user['User']['name'].' '.$user['User']['last_name']); ?>
			</tr>
			<tr>
				<th>[biography]</th>
				<td><?php echo __($user['User']['biography']); ?>
			</tr>
			<tr>
				<th>[email]</th>
				<td><?php echo __($user['User']['email']); ?>
			</tr>
			<tr>
				<th>[languages]</th>
				<td><?php echo __($user['User']['languages']); ?>
			</tr>
		</table>

	</div>

	<?php if (!empty($user['Snippet'])): ?>
	<div class="related">
		<h3><?php echo __($user['User']['username']."'s Snippets"); ?></h3>
		<table cellpadding = "0" cellspacing = "0">
		<tr>
			<th><?php echo __('Description'); ?></th>
			<th><?php echo __('Language'); ?></th>
			<th><?php echo __('Likes'); ?></th>
			<th><?php echo __('Dislikes'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
		</tr>
			<?php foreach ($user['Snippet'] as $snippet): ?>
			<tr>
				<td><?php echo $snippet['description']; ?></td>
				<td><?php echo $snippet['language']; ?></td>
				<td><?php echo $snippet['likes']; ?></td>
				<td><?php echo $snippet['dislikes']; ?></td>			
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('controller' => 'snippets', 'action' => 'view', $snippet['id'])); ?>
				</td>
			</tr>
			<?php endforeach; ?>
		</table>
	</div>
	<?php endif; ?>

</div>