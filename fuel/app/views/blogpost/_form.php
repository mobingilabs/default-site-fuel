<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('Title', 'title', array('class'=>'control-label')); ?>

				<?php echo Form::textarea('title', Input::post('title', isset($blogpost) ? $blogpost->title : ''), array('class' => 'col-md-8 form-control', 'rows' => 8, 'placeholder'=>'Title')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Author', 'author', array('class'=>'control-label')); ?>

				<?php echo Form::textarea('author', Input::post('author', isset($blogpost) ? $blogpost->author : ''), array('class' => 'col-md-8 form-control', 'rows' => 8, 'placeholder'=>'Author')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Content', 'content', array('class'=>'control-label')); ?>

				<?php echo Form::textarea('content', Input::post('content', isset($blogpost) ? $blogpost->content : ''), array('class' => 'col-md-8 form-control', 'rows' => 8, 'placeholder'=>'Content')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>