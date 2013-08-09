<!-- Contact Form -->
	<section class="footer-one">
		<form action="<?php $contact_form->action(); ?>" method="post" id="addon-contact-form">
			<div>
				<div class="row half">
					<div class="6u">
						<input type="text" class="text" name="sender_name" id="sender_name" placeholder="Name" />
						<div id="error-sender_name-required" class="addon-contact-form-error" style="display: none;">
							Please enter your name.
						</div>
					</div>
					<div class="6u">
						<input type="text" class="text" name="sender_email" id="sender_email" placeholder="Email" />
						<div id="error-sender_email-required" class="addon-contact-form-error" style="display: none;">
							Please enter your email.
						</div>
						<div id="error-sender_email-invalid" class="addon-contact-form-error" style="display: none;">
							Please enter a valid email address.
						</div>
					</div>
				</div>
				<div class="row half">
					<div class="12u">
						<textarea id="message" name="message" placeholder="Message"></textarea>
						<div id="error-message-required" class="addon-contact-form-error" style="display: none;">
							Please enter a message.
						</div>
					</div>
				</div>
				<div class="row">
					<div class="12u">
					    <ul class="actions">
					    	<li><input type="submit" class="button button-style1" value="Send" /></li>
					    	<li><input type="reset" class="button button-style2" value="Reset" /></li>
					    </ul>
					</div>
				</div>
			</div>
		</form>
		<div class="row">
		<p id="addon-contact-form-success" style="display: none;">
		    Message sent. Thank you!
		</p>
		</div>
	</section>
<!-- /Contact Form -->