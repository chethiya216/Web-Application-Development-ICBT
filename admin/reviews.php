<div class="layout-wrapper layout-content-navbar">
  <div class="layout-container">
    <div class="layout-page">
      <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">

          <h4 class="fw-bold py-3 mb-4">Manage Reviews</h4>

          <!-- Stats cards (placeholder values) -->
          <div class="row mb-4">
            <div class="col-lg-3 col-md-6 mb-3">
              <div class="card">
                <div class="card-body">
                  <span class="fw-semibold d-block mb-1">Total Reviews</span>
                  <h3 class="card-title mb-0">356</h3>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-3">
              <div class="card">
                <div class="card-body">
                  <span class="fw-semibold d-block mb-1">Average Rating</span>
                  <h3 class="card-title mb-0 text-warning">4.3 <i class="bx bxs-star fs-5"></i></h3>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-3">
              <div class="card">
                <div class="card-body">
                  <span class="fw-semibold d-block mb-1">Pending Approval</span>
                  <h3 class="card-title mb-0 text-info">9</h3>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-3">
              <div class="card">
                <div class="card-body">
                  <span class="fw-semibold d-block mb-1">Flagged</span>
                  <h3 class="card-title mb-0 text-danger">2</h3>
                </div>
              </div>
            </div>
          </div>

          <!-- Reviews table -->
          <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between flex-wrap gap-2">
              <h5 class="card-title mb-0">All Reviews</h5>
              <div class="d-flex gap-2">
                <select class="form-select form-select-sm" style="width:auto;">
                  <option value="">All Ratings</option>
                  <option value="5">5 Stars</option>
                  <option value="4">4 Stars</option>
                  <option value="3">3 Stars</option>
                  <option value="2">2 Stars</option>
                  <option value="1">1 Star</option>
                </select>
                <select class="form-select form-select-sm" style="width:auto;">
                  <option value="">All Status</option>
                  <option value="approved">Approved</option>
                  <option value="pending">Pending</option>
                  <option value="flagged">Flagged</option>
                </select>
                <input type="text" class="form-control form-control-sm" placeholder="Search reviews..." style="width:auto;">
              </div>
            </div>
            <div class="table-responsive text-nowrap">
              <table class="table">
                <thead>
                  <tr>
                    <th>Product</th>
                    <th>Customer</th>
                    <th>Rating</th>
                    <th>Comment</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                  <!-- Sample row 1 -->
                  <tr>
                    <td>
                      <div class="d-flex align-items-center">
                        <img src="assets/img/products/placeholder.png" alt="Product" class="rounded me-3" width="36" height="36">
                        <strong>Wireless Earbuds Pro</strong>
                      </div>
                    </td>
                    <td>Nimal Perera</td>
                    <td>
                      <span class="text-warning">
                        <i class="bx bxs-star"></i><i class="bx bxs-star"></i><i class="bx bxs-star"></i><i class="bx bxs-star"></i><i class="bx bxs-star"></i>
                      </span>
                    </td>
                    <td class="text-wrap" style="max-width: 280px;">
                      Great sound quality and battery life lasts all day. Very happy with this purchase.
                    </td>
                    <td>Jul 22, 2026</td>
                    <td><span class="badge bg-label-success">Approved</span></td>
                    <td>
                      <div class="d-flex gap-2">
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
                        <img src="assets/img/products/placeholder.png" alt="Product" class="rounded me-3" width="36" height="36">
                        <strong>Classic Cotton T-Shirt</strong>
                      </div>
                    </td>
                    <td>Kavindi Silva</td>
                    <td>
                      <span class="text-warning">
                        <i class="bx bxs-star"></i><i class="bx bxs-star"></i><i class="bx bxs-star"></i>
                      </span>
                      <span class="text-muted"><i class="bx bx-star"></i><i class="bx bx-star"></i></span>
                    </td>
                    <td class="text-wrap" style="max-width: 280px;">
                      Fabric feels thinner than expected, sizing runs a bit small.
                    </td>
                    <td>Jul 18, 2026</td>
                    <td><span class="badge bg-label-info">Pending</span></td>
                    <td>
                      <div class="d-flex gap-2">
                        <button type="button" class="btn btn-sm btn-icon btn-outline-success" title="Approve">
                          <i class="bx bx-check"></i>
                        </button>
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
                        <img src="assets/img/products/placeholder.png" alt="Product" class="rounded me-3" width="36" height="36">
                        <strong>Ceramic Table Lamp</strong>
                      </div>
                    </td>
                    <td>Ruwan Fernando</td>
                    <td>
                      <span class="text-warning">
                        <i class="bx bxs-star"></i>
                      </span>
                      <span class="text-muted"><i class="bx bx-star"></i><i class="bx bx-star"></i><i class="bx bx-star"></i><i class="bx bx-star"></i></span>
                    </td>
                    <td class="text-wrap" style="max-width: 280px;">
                      This review contains inappropriate language and has been reported by another user.
                    </td>
                    <td>Jul 10, 2026</td>
                    <td><span class="badge bg-label-danger">Flagged</span></td>
                    <td>
                      <div class="d-flex gap-2">
                        <button type="button" class="btn btn-sm btn-icon btn-outline-success" title="Approve">
                          <i class="bx bx-check"></i>
                        </button>
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
