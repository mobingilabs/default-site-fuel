<h2>Viewing <span class='muted'>#<?php echo $blogpost->id; ?></span></h2>

<p>
	<strong>Title:</strong>
	<?php echo $blogpost->title; ?></p>
<p>
	<strong>Author:</strong>
	<?php echo $blogpost->author; ?></p>
<p>
	<strong>Content:</strong>
	<?php echo $blogpost->content; ?></p>

<?php echo Html::anchor('blogpost/edit/'.$blogpost->id, 'Edit'); ?> |
<?php echo Html::anchor('blogpost', 'Back'); ?>