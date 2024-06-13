<?php include 'header.php'; ?>
<div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcumb-bg.jpg">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Contact Us</h1>
            <ul class="breadcumb-menu">
                <li><a href="index.php">Home</a></li>
                <li>Contact Us</li>
            </ul>
        </div>
    </div>
</div>
<div class="space">
    <div class="container">
        <div class="row gy-40">
            <div class="col-xl-5">
                <div class="contact-info-wrap">
                    <div class="shape-img"><img src="assets/img/shape/contact_shape.png" alt="shape"></div>
                    <h3 class="border-title2">Contact Info</h3>
                    <div class="contact-info-box">
                        <div class="contact-info">
                            <h4 class="contact-info__title">Contact Number:</h4>
                            <div class="contact-info__icon"><i class="fal fa-phone"></i></div>
                            <div class="media-body"><span class="contact-info__text"><a href="tel:+91-8828468032">+91-8828468032</a></span></div>
                        </div>
                        <div class="contact-info">
                            <h4 class="contact-info__title">Mail Address:</h4>
                            <div class="contact-info__icon bg-theme"><i class="fal fa-envelope"></i></div>
                            <div class="media-body"><span class="contact-info__text"><a href="mailto:lavillagecelebration@gmail.com">lavillagecelebration@gmail.com</a> </span></div>
                        </div>
                       
                        <div class="contact-info">
                            <h4 class="contact-info__title"> Address:</h4>
                            <div class="contact-info__icon bg-title"><i class="fal fa-location-dot"></i></div>
                            <div class="media-body"><span class="contact-info__text">Lakeview 2, Flat no- 201
                                    Royal Palms,</br> Arey Milk Colony, Goregaon-East, Mumbai </span></div>
                        </div>
                        <div class="contact-info">
                            <h4 class="contact-info__title">Office Address:</h4>
                            <div class="contact-info__icon bg-title"><i class="fal fa-location-dot"></i></div>
                            <div class="media-body"><span class="contact-info__text">Lucknow office</br>
                                    Mateen Manzil</br>
                                    Abdul Aziz Road</br>
                                    Chowk , Lucknow  </span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-7">
                <div class="contact-map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3768.9113199766025!2d72.87937787073389!3d19.155358709864167!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b793280f43ab%3A0xbeef8daa002365d!2s2%2C%20201-B%2C%20Royal%20Palms%2C%20Aarey%20Colony%2C%20Goregaon%2C%20Mumbai%2C%20Maharashtra%20400065%2C%20India!5e0!3m2!1sen!2sbd!4v1688118051464!5m2!1sen!2sbd" allowfullscreen="" loading="lazy"></iframe></div>
            </div>
        </div>
    </div>
</div>
<div class="space-bottom" data-bg-src="assets/img/bg/contact_bg_1.html">
    <div class="container">
        <form action="send.php" method="POST" class="contact-form ">
            <h3 class="form-title">Make An Appointment</h3>
            <div class="row">
                <div class="form-group col-md-6"><input type="text" class="form-control style3" name="name" id="name" placeholder="Your Name"> <i class="fal fa-user"></i></div>
                <div class="form-group col-md-6"><input type="email" class="form-control style3" name="email" id="email" placeholder="Email Address"> <i class="fal fa-envelope"></i></div>
                <div class="form-group col-md-6"><input type="tel" class="form-control style3" name="number" id="number" placeholder="Phone Number"> <i class="fal fa-phone"></i></div>
                <div class="form-group col-md-6"><input type="text" class="form-control style3" name="subject" id="subject" placeholder="Subject"> <i class="fal fa-file-invoice"></i></div>
                <div class="form-group col-12"><textarea name="message" id="message" cols="30" rows="3" class="form-control style3" placeholder="Your Message"></textarea> <i class="fal fa-pencil"></i></div>
                <div class="form-btn col-12"><button class="ot-btn">Send Message Now</button></div>
            </div>
       
        </form>
    </div>
</div>

<?php include 'footer.php'; ?>