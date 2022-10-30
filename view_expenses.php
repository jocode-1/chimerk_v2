<?php


include_once('inc/session.php');
include_once('header.php');

?>

<main class="content">
	<div class="container-fluid p-0">

		<h1 class="h3 mb-3">View Expenses </h1>

		
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">

					</div>
					<div class="card-body">
						<table id="datatables-buttons" class="table table-striped" style="width:100%">


						</table>
					</div>
				</div>
			</div>
		</div>

	</div>
</main>

<footer class="footer">
	<div class="container-fluid">
		<div class="row text-muted">
			<div class="col-6 text-start">
				<ul class="list-inline">
					<li class="list-inline-item">
						<a class="text-muted" href="#">Support</a>
					</li>
					<li class="list-inline-item">
						<a class="text-muted" href="#">Help Center</a>
					</li>
					<li class="list-inline-item">
						<a class="text-muted" href="#">Privacy</a>
					</li>
					<li class="list-inline-item">
						<a class="text-muted" href="#">Terms of Service</a>
					</li>
				</ul>
			</div>
			<div class="col-6 text-end">
				<p class="mb-0">
					&copy; 2022 - <a href="index.html" class="text-muted">Don Chimerk</a>
				</p>
			</div>
		</div>
	</div>
</footer>
</div>
</div>

<script src="js/sweet.js"></script>
<script src="js/app.js"></script>
<script src="js/view_expenses.js"></script>

<!-- <script>
		document.addEventListener("DOMContentLoaded", function() {
			// Datatables with Buttons
			var datatablesButtons = $("#datatables-buttons").DataTable({
				responsive: true,
				lengthChange: !1,
				buttons: ["copy", "print"]
			});
			datatablesButtons.buttons().container().appendTo("#datatables-buttons_wrapper .col-md-6:eq(0)");
		});
	</script> -->
</body>


</html>