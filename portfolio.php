<?php include 'layouts/header.php'; ?>

<main class="main">

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Portfolio</h2>
            <p>
                A showcase of my professional work including WordPress websites,
                Shopify stores, and custom-developed web applications built with
                performance, usability, and scalability in mind.
            </p>
        </div>
        <!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

                <!-- Portfolio Filters -->
                <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="200">
                    <li data-filter="*" class="filter-active">All</li>
                    <li data-filter=".filter-wordpress">WordPress</li>
                    <li data-filter=".filter-shopify">Shopify</li>
                    <li data-filter=".filter-custom">Custom Development</li>
                </ul>

                <!-- Portfolio Items -->
                <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="300">

                    <!-- WordPress Project -->
                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-wordpress">
                        <div class="portfolio-card">
                            <div class="portfolio-img">
                                <img src="assets/img/portfolio/Web1.jpg" alt="Looking Glass Academy" class="img-fluid">
                                <div class="portfolio-overlay">
                                    <a href="assets/img/portfolio/Web1.jpg" class="glightbox portfolio-lightbox">
                                        <i class="bi bi-plus"></i>
                                    </a>
                                    <a href="https://lookingglassacademy.net/" target="_blank"
                                        class="portfolio-details-link">
                                        <i class="bi bi-link"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="portfolio-info">
                                <h4>Looking Glass Academy</h4>
                                <p>Learning Management System (LMS)</p>
                                <div class="portfolio-tags">
                                    <span>WordPress</span>
                                    <span>LMS</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- WordPress E-Commerce -->
                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-wordpress">
                        <div class="portfolio-card">
                            <div class="portfolio-img">
                                <img src="assets/img/portfolio/Web2.jpg" alt="Sara Store" class="img-fluid">
                                <div class="portfolio-overlay">
                                    <a href="assets/img/portfolio/Web2.jpg" class="glightbox portfolio-lightbox">
                                        <i class="bi bi-plus"></i>
                                    </a>
                                    <a href="https://sarastore.pk/" class="portfolio-details-link">
                                        <i class="bi bi-link"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="portfolio-info">
                                <h4>Sara Store</h4>
                                <p>E-Commerce / Online Shopping Website</p>
                                <div class="portfolio-tags">
                                    <span>WordPress</span>
                                    <span>WooCommerce</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- WordPress Custom Design -->
                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-wordpress">
                        <div class="portfolio-card">
                            <div class="portfolio-img">
                                <img src="assets/img/portfolio/Web3.jpg" alt="Box Wala" class="img-fluid">
                                <div class="portfolio-overlay">
                                    <a href="assets/img/portfolio/Web3.jpg" class="glightbox portfolio-lightbox">
                                        <i class="bi bi-plus"></i>
                                    </a>
                                    <a href="https://boxwala.pk/" class="portfolio-details-link">
                                        <i class="bi bi-link"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="portfolio-info">
                                <h4>Box Wala</h4>
                                <p>Custom Packaging & Box Design Platform</p>
                                <div class="portfolio-tags">
                                    <span>WordPress</span>
                                    <span>Custom Design</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Custom Development -->
                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-custom">
                        <div class="portfolio-card">
                            <div class="portfolio-img">
                                <img src="assets/img/portfolio/Web4.jpg" alt="Cafe Chinos" class="img-fluid">
                                <div class="portfolio-overlay">
                                    <a href="assets/img/portfolio/Web4.jpg" class="glightbox portfolio-lightbox">
                                        <i class="bi bi-plus"></i>
                                    </a>
                                    <a href="https://cafechinos.cafe/" class="portfolio-details-link">
                                        <i class="bi bi-link"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="portfolio-info">
                                <h4>Cafe Chinos</h4>
                                <p>Online Food Ordering System</p>
                                <div class="portfolio-tags">
                                    <span>Custom Development</span>
                                    <span>PHP</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Shopify Store -->
                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-shopify">
                        <div class="portfolio-card">
                            <div class="portfolio-img">
                                <img src="assets/img/portfolio/Web5.jpg" alt="Niwali" class="img-fluid">
                                <div class="portfolio-overlay">
                                    <a href="assets/img/portfolio/Web5.jpg" class="glightbox portfolio-lightbox">
                                        <i class="bi bi-plus"></i>
                                    </a>
                                    <a href="https://niwali.com/" class="portfolio-details-link">
                                        <i class="bi bi-link"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="portfolio-info">
                                <h4>Niwali</h4>
                                <p>Herbal & Medicine E-Commerce Store</p>
                                <div class="portfolio-tags">
                                    <span>Shopify</span>
                                    <span>E-Commerce</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div><!-- End Portfolio Container -->

            </div>
        </div>

    </section>
    <!-- End Portfolio Section -->

</main>

<?php include 'layouts/footer.php'; ?>