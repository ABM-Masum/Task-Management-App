<?php require 'partials/head.php'; ?>

<h1>All Users</h1>

<?php foreach ($users as $user) : ?>
	
	<ul>
		<li><?= $user->name ?></li>
	</ul>

<?php endforeach; ?>	

<h1>Submit Your Name</h1>

<form method="POST" action="/users">
	
	<input name="name"></input>

	<button type="Submit">Submit</button>

</form>

	<!-- <ul>

		<?php foreach($tasks as $task) : ?>

		<li>
			<?php if($task->completed) : ?>

			<strike><?= $task->description; ?></strike>

			<?php else : ?>

			<?= $task->description ?>

			<?php endif ?>
			
		</li>

	<?php endforeach ?>

	</ul> -->

<?php require 'partials/footer.php'; ?>
