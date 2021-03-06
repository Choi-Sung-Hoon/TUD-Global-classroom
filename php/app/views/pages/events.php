<!-- Header -->
<?php require APPROOT . '/views/inc/header.php'; ?>

<!-- Body -->

<header id="event_container" class="wrapper">
	<div class="container content">
		<!-- Page Heading -->
		<h1 class="my-4 text-white">
			<?php if ($data['orientation'] == 'indoor'): ?>
				Indoor Activity
			<?php else: ?>
				Outdoor Activity
			<?php endif ?>
		</h1>
		<div class="row">
			<?php foreach ($data['events'] as $event) : ?>
				<div class="col-lg-3 col-md-4 col-sm-6 mb-4">
					<div id="<?php echo $event->id; ?>" class="card 7-100">
						<a href="<?php echo URLROOT . 'pages/eventDetails?event_id=' . $event->id ?>">
							<img class="card-img-top" src="<?php echo URLROOT . 'img/' . $event->image; ?>" width="400" height="150" alt="">
						</a>
						<div class="card-body">
							<h4 class="card-title">
								<a href="<?php echo URLROOT . 'pages/eventDetails?event_id=' . $event->id ?>"><?php echo $event->name ?></a>
							</h4>
							<p class="card-text text-truncate">
								<?php echo $event->location; ?><br>
							</p>
						</div>
					</div>
				</div>
			<?php endforeach ?>
		</div>
		<!-- /.row -->

		<!-- Pagination -->
		<ul class="pagination justify-content-center content">
			<li class="page-item">
				<a class="page-link" href="#" aria-label="Previous">
					<span aria-hidden="true">&laquo;</span>
					<span class="sr-only">Previous</span>
				</a>
			</li>
			<li class="page-item">
				<a class="page-link" href="#">1</a>
			</li>
			<!-- <li class="page-item">
				<a class="page-link" href="#">2</a>
			</li>
			<li class="page-item">
				<a class="page-link" href="#">3</a>
			</li> -->
			<li class="page-item">
				<a class="page-link" href="#" aria-label="Next">
					<span aria-hidden="true">&raquo;</span>
					<span class="sr-only">Next</span>
				</a>
			</li>
		</ul>
	</div>
</header>

<!-- Footer -->
<?php require APPROOT . '/views/inc/footer.php'; ?>