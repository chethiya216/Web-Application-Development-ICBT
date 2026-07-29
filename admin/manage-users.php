<div class="layout-wrapper layout-content-navbar">
  <div class="layout-container">
    <div class="layout-page">
      <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">

          <div class="d-flex align-items-center justify-content-between py-3 mb-4">
            <h4 class="fw-bold mb-0">Manage Users</h4>
            <a href="add-user.php" class="btn btn-primary">
              <i class="bx bx-plus me-1"></i> Add New User
            </a>
          </div>

          <!-- Stats cards (placeholder values) -->
          <div class="row mb-4">
            <div class="col-lg-3 col-md-6 mb-3">
              <div class="card">
                <div class="card-body">
                  <span class="fw-semibold d-block mb-1">Total Users</span>
                  <h3 class="card-title mb-0">210</h3>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-3">
              <div class="card">
                <div class="card-body">
                  <span class="fw-semibold d-block mb-1">Customers</span>
                  <h3 class="card-title mb-0 text-info">198</h3>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-3">
              <div class="card">
                <div class="card-body">
                  <span class="fw-semibold d-block mb-1">Admins</span>
                  <h3 class="card-title mb-0 text-primary">12</h3>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-3">
              <div class="card">
                <div class="card-body">
                  <span class="fw-semibold d-block mb-1">Suspended</span>
                  <h3 class="card-title mb-0 text-danger">3</h3>
                </div>
              </div>
            </div>
          </div>

          <!-- Users table -->
          <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between flex-wrap gap-2">
              <h5 class="card-title mb-0">All Users</h5>
              <div class="d-flex gap-2">
                <select class="form-select form-select-sm" style="width:auto;">
                  <option value="">All Roles</option>
                  <option value="customer">Customer</option>
                  <option value="admin">Admin</option>
                </select>
                <select class="form-select form-select-sm" style="width:auto;">
                  <option value="">All Status</option>
                  <option value="active">Active</option>
                  <option value="suspended">Suspended</option>
                </select>
                <input type="text" class="form-control form-control-sm" placeholder="Search users..." style="width:auto;">
              </div>
            </div>
            <div class="table-responsive text-nowrap">
              <table class="table">
                <thead>
                  <tr>
                    <th>User</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Role</th>
                    <th>Joined</th>
                    <th>Status</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                  <!-- Sample row 1 -->
                  <tr>
                    <td>
                      <div class="d-flex align-items-center">
                        <div class="avatar avatar-sm me-3">
                          <img src="assets/img/avatars/1.png" alt="Avatar" class="rounded-circle">
                        </div>
                        <strong>Nimal Perera</strong>
                      </div>
                    </td>
                    <td>nimal@example.com</td>
                    <td>077 123 4567</td>
                    <td><span class="badge bg-label-info">Customer</span></td>
                    <td>Jan 12, 2026</td>
                    <td><span class="badge bg-label-success">Active</span></td>
                    <td>
                      <div class="d-flex gap-2">
                        <a href="edit-user.php?id=1" class="btn btn-sm btn-icon btn-outline-primary" title="Edit">
                          <i class="bx bx-edit"></i>
                        </a>
                        <button type="button" class="btn btn-sm btn-icon btn-outline-warning" title="Suspend">
                          <i class="bx bx-block"></i>
                        </button>
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
                        <div class="avatar avatar-sm me-3">
                          <img src="assets/img/avatars/2.png" alt="Avatar" class="rounded-circle">
                        </div>
                        <strong>Kavindi Silva</strong>
                      </div>
                    </td>
                    <td>kavindi@example.com</td>
                    <td>071 987 6543</td>
                    <td><span class="badge bg-label-primary">Admin</span></td>
                    <td>Nov 03, 2025</td>
                    <td><span class="badge bg-label-success">Active</span></td>
                    <td>
                      <div class="d-flex gap-2">
                        <a href="edit-user.php?id=2" class="btn btn-sm btn-icon btn-outline-primary" title="Edit">
                          <i class="bx bx-edit"></i>
                        </a>
                        <button type="button" class="btn btn-sm btn-icon btn-outline-warning" title="Suspend">
                          <i class="bx bx-block"></i>
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
                        <div class="avatar avatar-sm me-3">
                          <img src="assets/img/avatars/3.png" alt="Avatar" class="rounded-circle">
                        </div>
                        <strong>Ruwan Fernando</strong>
                      </div>
                    </td>
                    <td>ruwan@example.com</td>
                    <td>070 555 1122</td>
                    <td><span class="badge bg-label-info">Customer</span></td>
                    <td>Jun 20, 2025</td>
                    <td><span class="badge bg-label-danger">Suspended</span></td>
                    <td>
                      <div class="d-flex gap-2">
                        <a href="edit-user.php?id=3" class="btn btn-sm btn-icon btn-outline-primary" title="Edit">
                          <i class="bx bx-edit"></i>
                        </a>
                        <button type="button" class="btn btn-sm btn-icon btn-outline-success" title="Reactivate">
                          <i class="bx bx-check-circle"></i>
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
