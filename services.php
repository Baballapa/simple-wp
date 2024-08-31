<?php
session_start();
$pageTitle = "Services Page";
?>

<?php require 'inc/header.inc.php'; ?>

<div class="container mt-5">
    <h1 class="text-center mb-4">Services</h1>

    <div class="row justify-content-center">
        <!-- Web Development Section (Larger Card) -->
        <div class="col-lg-10 mb-4 mx-auto">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h3 class="card-title">Web Development</h3>
                    <p class="card-text">From responsive front-end design to robust back-end systems, I provide full-stack development services tailored to your business needs.</p>
                    <ul>
                        <li>Frontend Development (HTML, CSS, JavaScript, React, etc.)</li>
                        <li>Backend Development (Node.js, PHP, Python, etc.)</li>
                        <li>Full Stack Development</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <!-- Smaller Service Cards -->
        <div class="col-lg-5 col-md-12 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h3 class="card-title">Web Design</h3>
                    <p class="card-text">Creating user-centric designs that are both visually appealing and functional, ensuring a seamless user experience across all devices.</p>
                    <ul>
                        <li>UX/UI Design</li>
                        <li>Responsive Design</li>
                        <li>Prototyping and Wireframing</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-lg-5 col-md-12 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h3 class="card-title">E-commerce Solutions</h3>
                    <p class="card-text">Delivering custom e-commerce solutions that drive sales and offer a seamless shopping experience for your customers.</p>
                    <ul>
                        <li>Custom E-commerce Development</li>
                        <li>CMS Integration (Shopify, WooCommerce, etc.)</li>
                        <li>Payment Gateway Integration</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-lg-5 col-md-12 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h3 class="card-title">SEO & Optimization</h3>
                    <p class="card-text">Improving your website's visibility and performance through effective SEO strategies and performance optimization techniques.</p>
                    <ul>
                        <li>On-Page SEO</li>
                        <li>Performance Optimization</li>
                        <li>Mobile Optimization</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-lg-5 col-md-12 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h3 class="card-title">Maintenance & Support</h3>
                    <p class="card-text">Ensuring your website remains up-to-date, secure, and functioning smoothly with ongoing maintenance and support services.</p>
                    <ul>
                        <li>Website Updates</li>
                        <li>Security Monitoring</li>
                        <li>Bug Fixes</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center mt-3 mb-5">
        <a href="contact.php" class="quote-btn btn-lg">Get a Free Quote</a>
    </div>
</div>

<?php require 'inc/footer.inc.php'; ?>