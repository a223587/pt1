<?php
ob_start();
?>

<div class="card shadow border-0 border-start border-5 border-primary mb-4">
    <div class="card-body">
        <h2 class="mb-1">Welcome to HotspotHub</h2>
        <p class="text-muted mb-0">Your one-stop shop for portable Wi-Fi hotspots</p>
    </div>
</div>

<div id="homeCarousel" class="carousel slide shadow-sm rounded mb-4" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner rounded">
        <div class="carousel-item active">
            <div class="bg-primary text-white text-center py-5 px-4">
                <i class="bi bi-wifi display-1"></i>
                <h3 class="mt-3">Stay Connected Anywhere</h3>
                <p class="mb-4">Pocket-sized 4G and 5G hotspots for work, travel and study.</p>
            </div>
        </div>
        <div class="carousel-item">
            <div class="bg-dark text-white text-center py-5 px-4">
                <i class="bi bi-lightning-charge-fill display-1"></i>
                <h3 class="mt-3">Blazing 5G Speeds</h3>
                <p class="mb-4">Latest Wi-Fi 6 and Wi-Fi 6E devices from Huawei, ZTE, TP-Link and Netgear.</p>
            </div>
        </div>
        <div class="carousel-item">
            <div class="bg-success text-white text-center py-5 px-4">
                <i class="bi bi-people-fill display-1"></i>
                <h3 class="mt-3">Share With Everyone</h3>
                <p class="mb-4">Connect multiple phones, laptops and tablets on a single hotspot.</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#homeCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#homeCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<div class="row g-4">
    <div class="col-md-6 col-xl-3">
        <div class="card shadow-sm h-100">
            <div class="card-body">
                <h5><i class="bi bi-router-fill text-primary me-2"></i>Products</h5>
                <p class="text-muted">Manage portable Wi-Fi hotspot stock, prices and specs.</p>
                <a href="products.php" class="btn btn-primary btn-sm">Go to Products</a>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-3">
        <div class="card shadow-sm h-100">
            <div class="card-body">
                <h5><i class="bi bi-person-vcard-fill text-primary me-2"></i>Customers</h5>
                <p class="text-muted">Keep track of registered customers and their contacts.</p>
                <a href="customers.php" class="btn btn-primary btn-sm">Go to Customers</a>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-3">
        <div class="card shadow-sm h-100">
            <div class="card-body">
                <h5><i class="bi bi-person-badge-fill text-primary me-2"></i>Staffs</h5>
                <p class="text-muted">Manage the staff members who handle orders.</p>
                <a href="staffs.php" class="btn btn-primary btn-sm">Go to Staffs</a>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-3">
        <div class="card shadow-sm h-100">
            <div class="card-body">
                <h5><i class="bi bi-cart-fill text-primary me-2"></i>Orders</h5>
                <p class="text-muted">Create orders, add products and print invoices.</p>
                <a href="orders.php" class="btn btn-primary btn-sm">Go to Orders</a>
            </div>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
require_once 'layout.php';
?>
