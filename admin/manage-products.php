
  <div class="layout-container">

    <!-- Menu -->

    <!-- / Menu -->

    <div class="layout-page">
      <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">

          <div class="d-flex align-items-center justify-content-between py-3 mb-4">
            <h4 class="fw-bold mb-0">Manage Products</h4>
            <a href="add-product.php" class="btn btn-primary">
              <i class="bx bx-plus me-1"></i> Add New Product
            </a>
          </div>

          <!-- Stats cards (placeholder values) -->
          <div class="row mb-4">
            <div class="col-lg-3 col-md-6 mb-3">
              <div class="card">
                <div class="card-body">
                  <span class="fw-semibold d-block mb-1">Total Products</span>
                  <h3 class="card-title mb-0">64</h3>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-3">
              <div class="card">
                <div class="card-body">
                  <span class="fw-semibold d-block mb-1">Low Stock</span>
                  <h3 class="card-title mb-0 text-warning">7</h3>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-3">
              <div class="card">
                <div class="card-body">
                  <span class="fw-semibold d-block mb-1">Out of Stock</span>
                  <h3 class="card-title mb-0 text-danger">3</h3>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-3">
              <div class="card">
                <div class="card-body">
                  <span class="fw-semibold d-block mb-1">Categories</span>
                  <h3 class="card-title mb-0">9</h3>
                </div>
              </div>
            </div>
          </div>

          <!-- Products table -->
          <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between flex-wrap gap-2">
              <h5 class="card-title mb-0">All Products</h5>
              <div class="d-flex gap-2">
                <select class="form-select form-select-sm" style="width:auto;">
                  <option value="">All Categories</option>
                  <option value="electronics">Electronics</option>
                  <option value="fashion">Fashion</option>
                  <option value="home">Home &amp; Decor</option>
                  <option value="sports">Sports</option>
                </select>
                <select class="form-select form-select-sm" style="width:auto;">
                  <option value="">All Brands</option>
                  <option value="samsung">Samsung</option>
                  <option value="apple">Apple</option>
                  <option value="nike">Nike</option>
                </select>
                <input type="text" class="form-control form-control-sm" placeholder="Search products..." style="width:auto;">
              </div>
            </div>
            <div class="table-responsive text-nowrap">
              <table class="table">
                <thead>
                  <tr>
                    <th>Product</th>
                    <th>Category</th>
                    <th>Brand</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Status</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                  <!-- Sample row 1 -->
                  <tr>
                    <td>
                      <div class="d-flex align-items-center">
                        <img src="assets/img/products/placeholder.png" alt="Product" class="rounded me-3" width="40" height="40">
                        <div>
                          <strong>Wireless Earbuds Pro</strong><br>
                          <small class="text-muted">SKU: PRD-1001</small>
                        </div>
                      </div>
                    </td>
                    <td>Electronics</td>
                    <td>Samsung</td>
                    <td>$59.99</td>
                    <td>42</td>
                    <td><span class="badge bg-label-success">Active</span></td>
                    <td>
                      <div class="d-flex gap-2">
                        <a href="edit-product.php?id=1001" class="btn btn-sm btn-icon btn-outline-primary" title="Edit">
                          <i class="bx bx-edit"></i>
                        </a>
                        <button type="button" class="btn btn-sm btn-icon btn-outline-danger" title="Delete">
                          <i class="bx bx-trash"></i>
                        </button>
                      </div>
                    </td>
                  </tr>

                  <!-- Sample row 2 -->
                  <tr>
                    <td>
                      <div class="d-flex align-items-center">
                        <img src="assets/img/products/placeholder.png" alt="Product" class="rounded me-3" width="40" height="40">
                        <div>
                          <strong>Classic Cotton T-Shirt</strong><br>
                          <small class="text-muted">SKU: PRD-1002</small>
                        </div>
                      </div>
                    </td>
                    <td>Fashion</td>
                    <td>Nike</td>
                    <td>$19.99</td>
                    <td>5</td>
                    <td><span class="badge bg-label-warning">Low Stock</span></td>
                    <td>
                      <div class="d-flex gap-2">
                        <a href="edit-product.php?id=1002" class="btn btn-sm btn-icon btn-outline-primary" title="Edit">
                          <i class="bx bx-edit"></i>
                        </a>
                        <button type="button" class="btn btn-sm btn-icon btn-outline-danger" title="Delete">
                          <i class="bx bx-trash"></i>
                        </button>
                      </div>
                    </td>
                  </tr>

                  <!-- Sample row 3 -->
                  <tr>
                    <td>
                      <div class="d-flex align-items-center">
                        <img src="assets/img/products/placeholder.png" alt="Product" class="rounded me-3" width="40" height="40">
                        <div>
                          <strong>Ceramic Table Lamp</strong><br>
                          <small class="text-muted">SKU: PRD-1003</small>
                        </div>
                      </div>
                    </td>
                    <td>Home &amp; Decor</td>
                    <td>—</td>
                    <td>$34.50</td>
                    <td>0</td>
                    <td><span class="badge bg-label-danger">Out of Stock</span></td>
                    <td>
                      <div class="d-flex gap-2">
                        <a href="edit-product.php?id=1003" class="btn btn-sm btn-icon btn-outline-primary" title="Edit">
                          <i class="bx bx-edit"></i>
                        </a>
                        <button type="button" class="btn btn-sm btn-icon btn-outline-danger" title="Delete">
                          <i class="bx bx-trash"></i>
                        </button>
                      </div>
                    </td>
                  </tr>

                  <!-- Add more rows / loop here in PHP -->
                </tbody>
              </table>
            </div>
          </div>

        </div>
      </div>
