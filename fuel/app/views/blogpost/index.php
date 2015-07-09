<h2>Listing <span class='muted'>Blogposts</span></h2>
<br>
<?php if ($blogposts): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Title</th>
			<th>Author</th>
			<th>Content</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($blogposts as $item): ?>		<tr>

			<td><?php echo $item->title; ?></td>
			<td><?php echo $item->author; ?></td>
			<td><?php echo $item->content; ?></td>
			<td>
				<div class="btn-toolbar">
					<div class="btn-group">
						<?php echo Html::anchor('blogpost/view/'.$item->id, '<i class="icon-eye-open"></i> View', array('class' => 'btn btn-default btn-sm')); ?>						<?php echo Html::anchor('blogpost/edit/'.$item->id, '<i class="icon-wrench"></i> Edit', array('class' => 'btn btn-default btn-sm')); ?>						<?php echo Html::anchor('blogpost/delete/'.$item->id, '<i class="icon-trash icon-white"></i> Delete', array('class' => 'btn btn-sm btn-danger', 'onclick' => "return confirm('Are you sure?')")); ?>					</div>
				</div>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Blogposts.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('blogpost/create', 'Add new Blogpost', array('class' => 'btn btn-success')); ?>

</p>
