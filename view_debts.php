<?php


include_once('inc/session.php');
include_once('header.php');

?>

<main class="content">
	<div class="container-fluid p-0">
		
		<div class="row">
			<div class="col-12">
				<div class="card">
					<!-- <div class="card-header">
						<button type="button" class="btn btn-primary my-1" data-bs-toggle="modal"
							data-bs-target="#sizedModalSm">
							Add Product
						</button>

					</div> -->

					</div>
					<div class="card-body">
						<table id="datatables-buttons" class="table table-striped" style="width:100%">


						</table>
					</div>
				</div>
			</div>
		</div>

		<!-- BEGIN  modal -->

		<div class="modal fade" id="sizedModalSm" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-sm" role="document">

				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Edit Customers Sales</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="card">
						<div class="card-body">
								<div class="mb-3">
									<label class="form-label">Product Name</label>
									<input type="text" class="form-control"  id="product_name" name="product_name">
								</div>
								<div class="mb-3">
									<label class="form-label">Product Price</label>
									<input type="number" class="form-control" id="product_price" name="product_price">
								</div>
								<div class="mb-3">
									<label class="form-label">Litres</label>
									<input type="number" class="form-control" id="product_quantity" name="product_quantity">
								</div>
								<div class="mb-3">
									<label class="form-label">Total Amount</label>
									<input type="number" class="form-control"  id="total_amount" name="total_amount">
								</div>
								<div class="mb-3">
									<label class="form-label">Amount Paid</label>
									<input type="text" class="form-control" id="amount_paid" name="amount_paid">
								</div>
								<div class="mb-3">
									<label class="form-label">Amount Owing</label>
									<input type="text" class="form-control" id="amount_owing" name="amount_owing">
								<div class="mb-3">
									<label class="form-label">Customer Name</label>
									<input type="text" class="form-control" id="customer_name" name="customer_name">
								</div>
							
								<input type="submit" class="btn btn-primary" id="update_sales" value="Update Sales"></input>
							
						</div>


					</div>
					<!-- END  modal -->


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
					&copy; 2022 - <a href="index.html" class="text-muted">AppStack</a>
				</p>
			</div>
		</div>
	</div>
</footer>
</div>
</div>

<script src="js/sweet.js"></script>
<script src="js/app.js"></script>
<script src="js/view_debts.js"></script>

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