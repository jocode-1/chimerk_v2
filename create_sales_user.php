<?php

include_once('inc/session.php');
include_once('header.php');

?>

			<main class="content">
				<div class="container-fluid p-0">

                <p id="staff_id" hidden> <?php echo $userDetails['staff_id']; ?> </p>
                <p id="fullname" hidden> <?php echo $userDetails['fullname']; ?> </p>

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
												<select id="product_name" name="product_name" class="form-control">
													<!-- <option>Ethanol</option> -->
													<!-- <option>...</option> -->
												</select>
											</div>
                                            <div class="mb-3 col-md-6">
												<label class="form-label">Product Price</label>
                                                <select id="product_price" name="product_price" class="form-control">
                                                <option selected>... Select Product Price ...</option>
													<option> 650</option>
													<option> 670 </option>
													<option> 700 </option>
													<option> 750 </option>
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
											<input type="number" class="form-control" id="total_amount" name="total_amount"
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
												<input type="number" class="form-control" id="amount_owing" name="amount_owing" disabled>
											</div>
</div>
										<div class="row">
											
											
											<div class="mb-3 col-md-6">
												<label class="form-label" for="inputZip">Customer Name</label>
												<input type="text" class="form-control" id="customer_name" name="customer_name">
											</div>
                                        <div class="mb-3 col-md-6">
												<label class="form-label">Payment Type</label>
												<select id="payment_type" name="payment_type" class="form-control">
                                                <option selected>... Select Payment Type</option>
													<option value="Cash"> Cash</option>
													<option value="Bank / Transfer"> Bank / Transfer</option>
													<option value="On Credit"> On Credit</option>
												</select>
											</div>

</div>
										<button type="submit" class="btn btn-primary" id="create_sales">Create Sales</button>
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

	<script src="js/sweet.js"></script>
<script src="js/app.js"></script>
<script src="js/sales.js"></script>

</body>

</html>