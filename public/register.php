<?php require '../include/header.php'; ?>

<div class="container">
	<div class="row">
		<div class="information">
			Information goes here.
		</div>
		<div class="form-reg-wrapper">
			<div class="form-reg-header">
				<div class="stepwizard col-md-offset-3">
					<div class="stepwizard-row setup-panel">
						<div class="stepwizard-step">
							<a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
							<p>Retailer Agreement</p>
						</div>
						<div class="stepwizard-step">
							<a href="#step-2" type="button" class="btn btn-circle" disabled="disabled">2</a>
							<p>Retailer Information</p>
						</div>
						<div class="stepwizard-step">
							<a href="#step-3" type="button" class="btn btn-circle" disabled="disabled">3</a>
							<p>Retailer Approval</p>
						</div>
					</div>
				</div>
			</div>

			<div class="form-reg-body">
				<form role="form" action="" method="post">
					<div class="row setup-content" id="step-1">
						<h3>Retailer Agreement</h3>
						<div class="col-xs-9 col-md-offset-2">
							<div class="col-md-12">

								<div class="form-input-wrapper">
									<label class="control-label">Company Legal Name</label>
									<input type="text" required="required" />
								</div>

								<div class="form-input-wrapper">
									<label class="control-label">Company Registration Number</label>
									<input type="text" required="required" />
								</div>

								<div class="form-input-wrapper">
									<label class="control-label">Contact Number</label>
									<input type="text" required="required" />
								</div>

								<div class="form-input-wrapper">
									<label class="control-label">Company Address <span>(not P.O.Box)</span></label>
									<textarea name="address" id="address"></textarea>
								</div>

								<div class="form-input-wrapper">
									<label for="city" class="control-label">City</label>
									<input type="text" name="city" id="city">
								</div>
								
								<div class="form-input-wrapper">
									<label for="country" class="control-label">Country</label>
									<select name="country" id="country">
										<option value="nigeria">Nigeria</option>
										<option value="ghana">Ghana</option>
										<option value="togo">Togo</option>
										<option value="sa">South Africa</option>
									</select>	
								</div>

								<div class="form-button-wrapper">
									<input type="submit" value="Next">
								</div>

							</div>
						</div>
					</div>
					<div class="row setup-content" id="step-2">
						<h3>Retailer Information</h3>
						<div class="col-xs-9 col-md-offset-2">
							<div class="col-md-12">
								<div class="form-input-wrapper">
									<label class="control-label">Email Address</label>
									<input type="email" name="email" required="required" />
								</div>

								<div class="form-input-wrapper">
									<label class="control-label">Password</label>
									<input type="password" name="password" required="required" />
								</div>

								<div class="form-input-wrapper">
									<label class="control-label">Confirm Password</label>
									<input type="password" name="confirm_password" required="required" />
								</div>

								<div class="form-input-wrapper">
									<label class="control-label">Do you have a website?</label>
									<input type="radio" name="website" id="website" /> Yes
									<input type="radio" name="website" id="website" /> No
								</div>

								<div class="form-button-wrapper">
									<input type="submit" value="Next">
								</div>

							</div>
						</div>
					</div>
					<div class="row setup-content" id="step-3">
						<h3>Retailer Approval</h3>
						<div class="col-xs-9 col-md-offset-2">
							<div class="col-md-12">
								<div class="form-button-wrapper">
									<input type="submit" value="Create Account">
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div> <!-- end form reg wrapper -->
	</div> <!-- end row div -->
</div> <!-- end container div -->

<?php require '../include/footer.php'; ?>
