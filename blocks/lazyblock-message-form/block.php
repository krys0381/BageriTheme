<!-- CONTACT US - MESSAGE FORM -->

<div class="contact-info-component container-fluid">
	<div class="contact-info-row g-0 container">
		<div class="row d-flex justify-content-between align-items-start">
			<div class="col-lg-12 col-sm-12 col-12 d-flex flex-column align-items-center">
				<div class="contact-info-header-container d-flex flex-column justify-content-between">
					<div class="contact-info-header">
						<h3><?php echo $attributes["header"]?></h3>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="message-form-component container-fluid overflow-hidden">
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center">

            <?php echo do_shortcode( $attributes["form-shortcode"] ); ?>

            <!-- <div class="contact-form-container d-flex justify-content-center flex-column col-lg-12 col-sm-12 col-12">
                <div class="contact-form-content-container d-flex justify-content-center">
                    <form action="" class="form col-lg-6 col-sm-12 col-12" ref="form">
                        <div class="mb-3 d-flex flex-column align-items-start">
                            <input type="text" class="form-control" id="nameInput" placeholder="Name" required>
                        </div>
                        <div class="mb-3 d-flex flex-column align-items-start">
                            <input type="email" class="form-control" id="emailInput" placeholder="Email" required>
                        </div>
                        <div class="mb-3 d-flex flex-column align-items-start">
                            <input type="text" class="form-control" id="subjectInput" placeholder="Subject" required>
                        </div>
                        <div class="mb-3 d-flex flex-column align-items-start">
                            <textarea type="text" class="form-control" id="messageInput" placeholder="Message" required></textarea>
                        </div>
                        <div class="form-button-container d-flex justify-content-center">
                            <a href="">
                                <button type="submit" class="btn btn-primary col-12 col-xl-12 btn-lg mt-3" name="send"></button>
                            </a>
                        </div>
                    </form>
                </div>
            </div> -->
        </div>
    </div>
</div>