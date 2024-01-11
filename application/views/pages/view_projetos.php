<main class="flex-shrink-0 py-5">
	<!-- Page Content-->
	<div class="container">
		<section class="">
			<div class="text-start mb-5">
				<h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Projects</span></h1>
			</div>
			<div class="row justify-content-center">
				<div class="col-12 col-md-6">
					<!-- Project Card 1-->
					<div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
						<div class="card-body p-0">
							<div class="d-flex align-items-center">
								<div class="p-5">
									<h2 class="fw-bolder">Project Name 1</h2>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius at enim eum illum aperiam placeat esse? Mollitia omnis minima saepe recusandae libero, iste ad asperiores! Explicabo commodi quo itaque! Ipsam!</p>
								</div>
								<img class="img-fluid" src="https://dummyimage.com/300x400/343a40/6c757d" alt="..." />
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6">

					<!-- Project Card 2-->
					<div class="card overflow-hidden shadow rounded-4 border-0">
						<div class="card-body p-0">
							<div class="d-flex align-items-center">
								<div class="p-5">
									<h2 class="fw-bolder">Project Name 2</h2>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius at enim eum illum aperiam placeat esse? Mollitia omnis minima saepe recusandae libero, iste ad asperiores! Explicabo commodi quo itaque! Ipsam!</p>
								</div>
								<img class="img-fluid" src="https://dummyimage.com/300x400/343a40/6c757d" alt="..." />
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="bg-<?php echo empty($this->session->userdata('theme_global')) ? 'dark' : $this->session->userdata('theme_global') ?> rounded-4 py-5 px-4 px-md-5" id="contato">
				<div class="text-center mb-5">
					<div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
					<h1 class="fw-bolder contato-title">Get in touch</h1>
					<p class="lead fw-normal text-muted mb-0">Let's work together!</p>
				</div>
				<div class="row gx-5 justify-content-center">
					<div class="col-12 col-md-10 col-lg-8">
						<!-- * * * * * * * * * * * * * * *-->
						<!-- * * SB Forms Contact Form * *-->
						<!-- * * * * * * * * * * * * * * *-->
						<!-- This form is pre-integrated with SB Forms.-->
						<!-- To make this form functional, sign up at-->
						<!-- https://startbootstrap.com/solution/contact-forms-->
						<!-- to get an API token!-->
						<form id="contactForm" data-sb-form-api-token="API_TOKEN">
							<!-- Name input-->
							<div class="form-floating mb-3">
								<input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
								<label for="name">Full name</label>
								<div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
							</div>
							<!-- Email address input-->
							<div class="form-floating mb-3">
								<input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
								<label for="email">Email address</label>
								<div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
								<div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
							</div>
							<!-- Phone number input-->
							<div class="form-floating mb-3">
								<input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
								<label for="phone">Phone number</label>
								<div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
							</div>
							<!-- Message input-->
							<div class="form-floating mb-3">
								<textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
								<label for="message">Message</label>
								<div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
							</div>
							<!-- Submit success message-->
							<!---->
							<!-- This is what your users will see when the form-->
							<!-- has successfully submitted-->
							<div class="d-none" id="submitSuccessMessage">
								<div class="text-center mb-3">
									<div class="fw-bolder">Form submission successful!</div>
									To activate this form, sign up at
									<br />
									<a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
								</div>
							</div>
							<!-- Submit error message-->
							<!---->
							<!-- This is what your users will see when there is-->
							<!-- an error submitting the form-->
							<div class="d-none" id="submitErrorMessage">
								<div class="text-center text-danger mb-3">Error sending message!</div>
							</div>
							<!-- Submit Button-->
							<div class="d-grid"><button class="btn btn-primary btn-lg disabled" id="submitButton" type="submit">Submit</button></div>
						</form>
					</div>
				</div>
			</div>
		</section>

	</div>
</main>