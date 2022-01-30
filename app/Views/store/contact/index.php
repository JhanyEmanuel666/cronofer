<?= $this->extend('store/layout/template'); ?>

<?= $this->section('content'); ?>

    <section class="intro-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="title-single-box">
                        <h1 class="title-single">Contact US</h1>
                        <span class="color-text-a">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum aut possimus provident eos necessitatibus tempora blanditiis labore, consequuntur nemo aliquid sit facilis nostrum accusamus pariatur! Possimus perferendis, quia nobis ad!</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="contact-map box">
                        <div id="map" class="contact-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d493.1166678375243!2d120.45807141446323!3d-8.602398673595838!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf9202d0b664f9989!2zOMKwMzYnMDguNiJTIDEyMMKwMjcnMzAuMCJF!5e0!3m2!1sen!2sid!4v1638559301934!5m2!1sen!2sid" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 section-t8">
                    <div class="row">
                        <div class="col-md-7">
                            <form action="<?= base_url('contact/sendMessage'); ?>" method="post">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <input type="text" name="fullname" class="form-control form-control-lg form-control-a" placeholder="Your Name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <input name="email" type="email" class="form-control form-control-lg form-control-a" placeholder="Your Email" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <div class="form-group">
                                            <input type="text" name="subject" class="form-control form-control-lg form-control-a" placeholder="Subject" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea name="message" class="form-control" name="message" cols="45" rows="8" placeholder="Message" required></textarea>
                                        </div>
                                    </div>
                                    <!-- <div class="col-md-12 my-3">
                                        <div class="mb-3">
                                            <div class="loading">Loading</div>
                                            <div class="error-message"></div>
                                            <div class="sent-message">Your message has been sent. Thank you!</div>
                                        </div>
                                    </div> -->
                                    <div class="col-md-12 text-center">
                                        <button type="submit" name="submit" class="btn btn-a">Kirim</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="col-md-5 section-md-t3">
                            <div class="icon-box section-b2">
                                <div class="icon-box-icon">
                                    <span class="bi bi-envelope"></span>
                                </div>
                                <div class="icon-box-content table-cell">
                                    <div class="icon-box-title">
                                        <h4 class="icon-title">Kontak Kami</h4>
                                    </div>
                                    <div class="icon-box-content">
                                        <p class="mb-1">Email.
                                            <span class="color-a"><?= $ct['email']; ?></span>
                                        </p>
                                        <p class="mb-1">Phone.
                                            <span class="color-a"><?= $ct['phone']; ?></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="icon-box section-b2">
                                <div class="icon-box-icon">
                                    <span class="bi bi-geo-alt"></span>
                                </div>
                                <div class="icon-box-content table-cell">
                                    <div class="icon-box-title">
                                        <h4 class="icon-title">Address</h4>
                                    </div>
                                    <div class="icon-box-content">
                                        <p class="mb-1"><?= $ct['alamat']; ?> <br>0385</p>
                                    </div>
                                </div>
                            </div>
                            <div class="icon-box">
                                <div class="icon-box-icon">
                                    <span class="bi bi-share"></span>
                                </div>
                                <div class="icon-box-content table-cell">
                                    <div class="icon-box-title">
                                        <h4 class="icon-title">Social networks</h4>
                                    </div>
                                    <div class="icon-box-content">
                                        <div class="socials-footer">
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <a href="<?= $ct['fb']; ?>" class="link-one">
                                                        <i class="bi bi-facebook" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="<?= $ct['twt']; ?>" class="link-one">
                                                        <i class="bi bi-twitter" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="<?= $ct['ig']; ?>" class="link-one">
                                                        <i class="bi bi-instagram" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="<?= $ct['ytb']; ?>" class="link-one">
                                                        <i class="bi bi-youtube"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?= $this->endSection(); ?>