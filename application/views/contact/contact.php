<!-- Contact Info -->

<div class="contact_info">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="contact_info_container d-flex flex-lg-row flex-column justify-content-between align-items-between">

                    <!-- Contact Item -->
                    <div class="contact_info_item d-flex flex-row align-items-center justify-content-start">
                        <div class="contact_info_image"><i class="fas fa-mobile-alt"></i></div>
                        <div class="contact_info_content">
                            <div class="contact_info_title">Phone</div>
                            <div class="contact_info_text">+62 8524 5667 810</div>
                        </div>
                    </div>

                    <!-- Contact Item -->
                    <div class="contact_info_item d-flex flex-row align-items-center justify-content-start">
                        <div class="contact_info_image"><i class="far fa-envelope"></i></div>
                        <div class="contact_info_content">
                            <div class="contact_info_title">Email</div>
                            <div class="contact_info_text">mediaarraihan@gmail.com</div>
                        </div>
                    </div>

                    <!-- Contact Item -->
                    <div class="contact_info_item d-flex flex-row align-items-center justify-content-start">
                        <div class="contact_info_image"><i class="fas fa-map-marker-alt"></i></div>
                        <div class="contact_info_content">
                                <a href="#google_map">
                            <div class="contact_info_title">Address</div>
                            <div class="contact_info_text">Kraksaan, Kabupaten Probolinggo</div>
                        </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Contact Form -->

<div class="contact_form">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="contact_form_container">
                    <div class="contact_form_title">Contact Us</div>

                    <form action="<?= base_url('contact/send') ?>" method="POST" id="contact_form">
                        <div class="contact_form_inputs d-flex flex-md-row flex-column justify-content-between align-items-between">
                            <input type="text" id="contact_form_name" name="name_contact" class="contact_form_name input_field" placeholder="Your name" required="required" data-error="Name is required.">
                            <input type="text" id="contact_form_email" name="email_contact" class="contact_form_email input_field" placeholder="Your email" required="required" data-error="Email is required.">
                            <input type="text" id="contact_form_phone" name="phone_contact" class="contact_form_phone input_field" placeholder="Your phone number">
                        </div>
                        <div class="contact_form_text">
                            <textarea id="contact_form_message" class="text_field contact_form_message" name="message_contact" rows="4" placeholder="Message" required="required" data-error="Please, write us a message."></textarea>
                        </div>
                        <div class="contact_form_button">
                            <button type="submit" class="button contact_submit_button coklat">Send Message</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <div class="panel" id="google_map"></div>
</div>

<!-- Map -->

<div class="contact_map" >
    <div class="google_map">
        <div class="map_container">
            <iframe width="100%" height="100%" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJeUNdYv8A1y0RRp8YwlJHwn8&key=AIzaSyB8yh-a0Zf4l6OaJHY6WBXHMTgfJUkeIxU" allowfullscreen></iframe>
        </div>
    </div>
</div>