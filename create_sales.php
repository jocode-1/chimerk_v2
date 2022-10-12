<?php

include_once('inc/session.php');
include_once('header.php');

?>

			<main class="content">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3">Sales</h1>

					<div class="row">
						

						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Create Sales</h5>
									<h6 class="card-subtitle text-muted">Bootstrap column layout.</h6>
								</div>
								<div class="card-body">
									<form>
                                    <div class="row">
                                    <div class="mb-3 col-md-6">
												<label class="form-label">Select Product</label>
												<select id="inputState" class="form-control">
													<option>Ethanol</option>
													<!-- <option>...</option> -->
												</select>
											</div>
                                            <div class="mb-3 col-md-6">
												<label class="form-label">Product Price</label>
                                                <select id="product_price" name="product_price" class="form-control">
                                                <option selected>... Select Product Price ...</option>
													<option value="1"> 650</option>
													<option value="2"> 670 </option>
													<option value="3"> 700 </option>
													<option value="3"> 750 </option>
												</select>
											</div>
											</div>
										<div class="row">
											
											<div class="mb-3 col-md-6">
												<label class="form-label">Litres</label>
												<input type="number" class="form-control" id="product_quantity" name="product_quantity"
												min="1"	value="1">
											</div>
                                            <div class="mb-3 col-md-6">
											<label class="form-label" for="inputAddress">Total Amount</label>
											<input type="text" class="form-control" id="total_amount" name="total_amount"
											disabled>
										</div>
										</div>
                                        <div class="row">
										
										<div class="mb-3 col-md-6">
											<label class="form-label" for="inputAddress2">Amount Paid</label>
											<input type="text" class="form-control" id="amount_paid" name="amount_paid"
												placeholder="Enter Amount Paid ">
										</div>
                                        <div class="mb-3 col-md-6">
												<label class="form-label" for="inputCity">Amount Owing</label>
												<input type="text" class="form-control" id="amount_owing" name="amount_owing">
											</div>
</div>
										<div class="row">
											
											
											<div class="mb-3 col-md-6">
												<label class="form-label" for="inputZip">Customer Name</label>
												<input type="text" class="form-control" id="customer_name" name="customer_name">
											</div>
                                        <div class="mb-3 col-md-6">
												<label class="form-label">Payment Type</label>
												<select id="inputState" class="form-control">
                                                <option selected>... Select Payment Type</option>
													<option value="1"> Cash</option>
													<option value="2"> Bank / Transfer</option>
													<option value="3"> On Credit</option>
												</select>
											</div>

</div>
										<button type="submit" class="btn btn-primary">Submit</button>
									</form>
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
								&copy; 2022 - <a href="index.html" class="text-muted">AppStack</a>
							</p>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>

	<script src="js/app.js"></script>

</body>


<!-- Mirrored from appstack.bootlab.io/forms-layouts.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Sep 2022 10:43:45 GMT -->

</html>