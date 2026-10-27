<?php
ob_start();
?>

<div class="card shadow border-0 border-start border-5 border-primary mb-4">
    <div class="card-body">
        <h2 class="mb-1">Products</h2>
        <p class="text-muted mb-0">Manage and track all your portable Wi-Fi hotspots</p>
    </div>
</div>

<div class="card shadow-sm mb-4">
    <div class="card-body">
        <!-- Form Header -->
        <div class="row g-0 align-items-center mb-3">
            <div class="col">
                <h5 class="mb-0">
                    <i class="bi bi-pencil-square text-primary me-2"></i>
                    Product Form
                </h5>
                <small class="text-muted">Fill in the details of a product</small>
            </div>
            <div class="col-auto">
                <span class="badge bg-primary">* Required fields</span>
            </div>
        </div>

        <hr>

        <form action="" method="post" class="needs-validation" novalidate>
            <div class="row g-3">
                <div class="col-md-3">
                    <label for="pid" class="form-label">Product ID <span class="text-danger">*</span></label>
                    <input name="product_num" id="pid" type="text" class="form-control" placeholder="Enter Product ID" value="" required>
                </div>
                <div class="col-md-3">
                    <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
                    <input name="product_name" id="name" type="text" class="form-control" placeholder="Enter Product Name" value="" required>
                </div>
                <div class="col-md-3">
                    <label for="price" class="form-label">Price <span class="text-danger">*</span></label>
                    <input name="product_price" id="price" type="number" class="form-control" placeholder="Enter Price" value="" min="0" step="0.01" required>
                </div>
                <div class="col-md-3">
                    <label for="brand" class="form-label">Brand <span class="text-danger">*</span></label>
                    <select name="product_brand" id="brand" class="form-select" required>
                        <option value="">Select Brand</option>
                        <option value="Huawei">Huawei</option>
                        <option value="ZTE">ZTE</option>
                        <option value="TP-Link">TP-Link</option>
                        <option value="Netgear">Netgear</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <label for="network" class="form-label">Network Type <span class="text-danger">*</span></label>
                    <select name="product_network" id="network" class="form-select" required>
                        <option value="">Select Network Type</option>
                        <option value="4G LTE">4G LTE</option>
                        <option value="4G LTE-A">4G LTE-A</option>
                        <option value="5G">5G</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <label for="wifi" class="form-label">Wi-Fi Standard <span class="text-danger">*</span></label>
                    <select name="product_wifi" id="wifi" class="form-select" required>
                        <option value="">Select Wi-Fi Standard</option>
                        <option value="Wi-Fi 4">Wi-Fi 4</option>
                        <option value="Wi-Fi 5">Wi-Fi 5</option>
                        <option value="Wi-Fi 6">Wi-Fi 6</option>
                        <option value="Wi-Fi 6E">Wi-Fi 6E</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <label for="quantity" class="form-label">Quantity <span class="text-danger">*</span></label>
                    <input name="product_quantity" id="quantity" type="number" class="form-control" placeholder="Enter Quantity" value="" min="0" required>
                </div>
                <div class="col-md-3">
                    <label for="product_image" class="form-label">Image</label>
                    <input name="product_image" id="product_image" type="text" class="form-control" placeholder="Enter image filename" value="">
                </div>
            </div>

            <hr class="mt-4 mb-3">

            <div>
                <button type="submit" name="create" class="btn btn-primary">
                    <i class="bi bi-save me-1"></i>Create
                </button>
                <button type="reset" class="btn btn-secondary">
                    <i class="bi bi-arrow-counterclockwise me-1"></i>Clear
                </button>
            </div>
        </form>
    </div>
</div>

<div class="card shadow-sm">
    <div class="card-body">

        <div class="row align-items-center mb-3">
            <div class="col">
                <h5 class="mb-0">
                    <i class="bi bi-table text-primary me-2"></i>
                    Product List
                </h5>
                <small class="text-muted">View and manage all products in the inventory</small>
            </div>
            <div class="col-auto">
                <span class="badge bg-success">Total: 1 items</span>
            </div>
        </div>

        <hr>

        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>Product ID</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Brand</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>P001</td>
                        <td>Huawei 5G Mobile WiFi Pro</td>
                        <td>RM 899.00</td>
                        <td>Huawei</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <button type="button" class="btn btn-sm btn-info text-white">
                                <i class="bi bi-image"></i>
                            </button>
                            <a href="#" class="btn btn-sm btn-danger">
                                <i class="bi bi-trash"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="5" class="text-center">No products found</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
require_once 'layout.php';
?>
