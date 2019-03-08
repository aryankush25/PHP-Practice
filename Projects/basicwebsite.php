<?php

	include('includes/header.php'); 
	include('includes/posts.php');

?>

	<main role="main" class="container">
		<div class="row">
			<div class="col-md-8 blog-main">
				<h3 class="pb-4 mb-4 font-italic border-bottom">
					From the Firehose
				</h3>


				<div class="blog-post">

				<?php foreach ($posts as $post ) { ?>
					<h2 class="blog-post-title"> <?php echo $post["blog-title"]; ?> </h2>
					<p class="blog-post-meta"> <?php echo $post["blob-date"]; ?> </p>
					<?php echo $post["blog-text"]; ?>

				<?php } ?>

				</div>


				<nav class="blog-pagination">
					<a class="btn btn-outline-primary" href="#">Older</a>
					<a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">Newer</a>
				</nav>

			</div>

			<?php include('includes/sidebar.php'); ?>

		</div>

	</main>

	<?php include('includes/footer.php'); ?>