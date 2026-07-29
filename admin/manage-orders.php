<div class="layout-page">
    <div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">

        <h4 class="fw-bold py-3 mb-4">Manage Orders</h4>

        <!-- Stats cards (placeholder values) -->
        <div class="row mb-4">
        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card">
            <div class="card-body">
                <span class="fw-semibold d-block mb-1">Total Orders</span>
                <h3 class="card-title mb-0">128</h3>
            </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card">
            <div class="card-body">
                <span class="fw-semibold d-block mb-1">Pending</span>
                <h3 class="card-title mb-0 text-warning">14</h3>
            </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card">
            <div class="card-body">
                <span class="fw-semibold d-block mb-1">Delivered</span>
                <h3 class="card-title mb-0 text-success">96</h3>
            </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card">
            <div class="card-body">
                <span class="fw-semibold d-block mb-1">Revenue</span>
                <h3 class="card-title mb-0">$4,582.00</h3>
            </div>
            </div>
        </div>
        </div>

        <!-- Orders table -->
        <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="card-title mb-0">All Orders</h5>
            <select class="form-select form-select-sm" style="width:auto;">
            <option value="">All Statuses</option>
            <option value="pending">Pending</option>
            <option value="paid">Paid</option>
            <option value="shipped">Shipped</option>
            <option value="delivered">Delivered</option>
            <option value="cancelled">Cancelled</option>
            </select>
        </div>
        <div class="table-responsive text-nowrap">
            <table class="table">
            <thead>
                <tr>
                <th>Order ID</th>
                <th>Customer</th>
                <th>Items</th>
                <th>Total</th>
                <th>Status</th>
                <th>Date</th>
                <th>Actions</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                <!-- Sample row 1 -->
                <tr>
                <td>#1001</td>
                <td>
                    <strong>Nimal Perera</strong><br>
                    <small class="text-muted">nimal@example.com</small>
                </td>
                <td>3 item(s)</td>
                <td>$89.99</td>
                <td><span class="badge bg-label-warning">Pending</span></td>
                <td>Jul 24, 2026</td>
                <td>
                    <div class="d-flex gap-2">
                    <a href="order-details.php?id=1001" class="btn btn-sm btn-icon btn-outline-primary" title="View">
                        <i class="bx bx-show"></i>
                    </a>
                    <div class="d-flex align-items-center gap-1">
                        <select class="form-select form-select-sm">
                        <option value="pending" selected>Pending</option>
                        <option value="paid">Paid</option>
                        <option value="shipped">Shipped</option>
                        <option value="delivered">Delivered</option>
                        <option value="cancelled">Cancelled</option>
                        </select>
                        <button type="button" class="btn btn-sm btn-primary">Save</button>
                    </div>
                    </div>
                </td>
                </tr>

                <!-- Sample row 2 -->
                <tr>
                <td>#1002</td>
                <td>
                    <strong>Kavindi Silva</strong><br>
                    <small class="text-muted">kavindi@example.com</small>
                </td>
                <td>1 item(s)</td>
                <td>$24.50</td>
                <td><span class="badge bg-label-success">Delivered</span></td>
                <td>Jul 20, 2026</td>
                <td>
                    <div class="d-flex gap-2">
                    <a href="order-details.php?id=1002" class="btn btn-sm btn-icon btn-outline-primary" title="View">
                        <i class="bx bx-show"></i>
                    </a>
                    <div class="d-flex align-items-center gap-1">
                        <select class="form-select form-select-sm">
                        <option value="pending">Pending</option>
                        <option value="paid">Paid</option>
                        <option value="shipped">Shipped</option>
                        <option value="delivered" selected>Delivered</option>
                        <option value="cancelled">Cancelled</option>
                        </select>
                        <button type="button" class="btn btn-sm btn-primary">Save</button>
                    </div>
                    </div>
                </td>
                </tr>

                <!-- Sample row 3 -->
                <tr>
                <td>#1003</td>
                <td>
                    <strong>Ruwan Fernando</strong><br>
                    <small class="text-muted">ruwan@example.com</small>
                </td>
                <td>5 item(s)</td>
                <td>$142.00</td>
                <td><span class="badge bg-label-danger">Cancelled</span></td>
                <td>Jul 15, 2026</td>
                <td>
                    <div class="d-flex gap-2">
                    <a href="order-details.php?id=1003" class="btn btn-sm btn-icon btn-outline-primary" title="View">
                        <i class="bx bx-show"></i>
                    </a>
                    <div class="d-flex align-items-center gap-1">
                        <select class="form-select form-select-sm">
                        <option value="pending">Pending</option>
                        <option value="paid">Paid</option>
                        <option value="shipped">Shipped</option>
                        <option value="delivered">Delivered</option>
                        <option value="cancelled" selected>Cancelled</option>
                        </select>
                        <button type="button" class="btn btn-sm btn-primary">Save</button>
                    </div>
                    </div>
                </td>
                </tr>

                <!-- Add more rows / loop here in PHP -->
            </tbody>
            </table>
        </div>
        </div>
</div>
