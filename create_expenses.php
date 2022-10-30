<?php

include_once('inc/session.php');
include_once('header.php');

?>

			<main class="content">
				<div class="container-fluid p-0">


					<h1 class="h3 mb-3"> Expenses</h1>

					<div class="row">
						

						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Create Expenses</h5>
								</div>
								<div class="card-body">
										<div class="row">
											
											<div class="mb-3 col-md-6">
												<label class="form-label">Expenses Name</label>
												<input type="text" class="form-control" id="exp_name" name="exp_name" >
											</div>
                                            <div class="mb-3 col-md-6">
											<label class="form-label" for="inputAddress">Expenses Description</label>
											<input type="text" class="form-control" id="exp_description" name="exp_description"
											>
										</div>
										</div>
                                        <div class="row">
										
										<div class="mb-3 col-md-6">
												<label class="form-label">Expenses Category</label>
                                                <select id="exp_category" name="exp_category" class="form-control">
                                                <option selected>... Select Expenses Category ...</option>
													<option value = "House"> House </option>
													<option value = "Office" > Office </option>
													
												</select>
											</div>
                                        <div class="mb-3 col-md-6">
												<label class="form-label" for="inputCity">Expenses Amount</label>
												<input type="number" class="form-control" id="exp_amount" name="exp_amount">
											</div>
</div>
										<div class="row">
											
											
										<div class="mb-3 col-md-6">
												<label class="form-label">Money From</label>
                                                <select id="money_from" name="money_from" class="form-control">
                                                <option selected>... Select Money From ...</option>
													<option value = "Cash"> Cash </option>
													<option value = "Bank / Transfer" > Bank / Transfer </option>
													
												</select>
											</div>
											<div class="mb-3 col-md-6">
												<label class="form-label" for="inputZip">Expenses Date</label>
												<input type="date" class="form-control" id="exp_date" name="exp_date">
											</div>
											

</div>
										<button type="submit" class="btn btn-primary" id="create_exp">Create Expenses</button>
									
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
<script src="js/expenses.js"></script>

</body>

</html>