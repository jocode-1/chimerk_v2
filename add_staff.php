<?php

include_once('inc/session.php');
include_once('header.php');

?>

			<main class="content">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3">Add Staff</h1>

					<div class="row">

						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Form row</h5>
									<h6 class="card-subtitle text-muted">Bootstrap column layout.</h6>
								</div>
								<div class="card-body">
									<form>
									<div class="row">
									<div class="mb-3 col-md-6">
											<label class="form-label" for="inputAddress2"> Fullname</label>
											<input type="text" class="form-control" id="fullname" name="fullname"
												placeholder="Enter Staff Fullname">
										</div>
											<div class="mb-3 col-md-6">
												<label class="form-label" for="inputEmail4">Email</label>
												<input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Email Address">
											</div>
											
										</div>
										<div class="row">
											<div class="mb-3 col-md-6">
												<label class="form-label">Ansign Role</label>
												<select class="form-control" id="role" name="role">
													<option value="1"> Admin</option>
													<option value="2"> Vendor</option>
												</select>
											</div>

											<div class="mb-3 col-md-6">
												<label class="form-label" for="inputState">Phone Number</label>
												<input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Staff Phone Number">
											</div>

										</div>
										
										
										<div class="mb-3">
											<label class="form-label" for="inputAddress">Address</label>
											<input type="text" class="form-control" id="address" name="address"
												placeholder="Enter Staff Home-Address">
										</div>
										
										<button type="submit" class="btn btn-primary" id="submit" name="submit">Submit</button>
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
<script src="js/staff.js"></script>

</body>


</html>