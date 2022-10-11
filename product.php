<?php


include_once('inc/session.php');
include_once('header.php');

?>

<main class="content">
	<div class="container-fluid p-0">

		<h1 class="h3 mb-3">DataTables Buttons</h1>

		
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<button type="button" class="btn btn-primary my-1" data-bs-toggle="modal"
							data-bs-target="#sizedModalSm">
							Add Product
						</button>

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
						<h5 class="modal-title">Add Product</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="card">
						<div class="card-body">
								<div class="mb-3">
									<label class="form-label">Product Name</label>
									<input type="text" class="form-control" placeholder="Enter Product Name" id="product_name" name="product_name">
								</div>
								<div class="mb-3">
									<label class="form-label">Cost Price</label>
									<input type="number" class="form-control" placeholder="Enter Cost Price" id="cost_price" name="cost_price">
								</div>
								<div class="mb-3">
									<label class="form-label">Quantity</label>
									<input type="number" class="form-control" placeholder="Enter Product Quantity" id="quantity" name="quantity">
								</div>
								<div class="mb-3">
									<label class="form-label">Selling Price</label>
									<input type="number" class="form-control" placeholder="Enter Selling Price" id="selling_price" name="selling_price">
								</div>
								<div class="mb-3">
									<label class="form-label">Product Date</label>
									<input type="date" class="form-control" id="date" name="date">
								</div>
								<div class="mb-3">
												<label class="form-label" for="inputState">Select Product Category</label>
												<select class="form-control" id="product_category" name="product_category">
													<!-- <option value="1">Active</option>
													<option value="2">Deactive</option> -->
												</select>
											</div>
								<div class="mb-3">
												<label class="form-label" for="inputState">Product Status</label>
												<select class="form-control" id="payment_status" name="status">
													<option value="1"> In-Stock </option>
													<option value="2"> Out-of-Stock </option>
												</select>
											</div>
								
								<input type="submit" class="btn btn-primary" id="submit" value="Submit"></input>
							
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
<script src="js/product.js"></script>

</body>


</html>