<!-- Main Content -->
    <div class="container-fluid py-3 mb-5">
        <div class="container">
            
            <!-- Quick Summary Counters -->
            <div class="row g-3 mb-4">
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm rounded-4 p-3 bg-white d-flex flex-row align-items-center">
                        <div class="rounded-circle btn-md-square bg-primary text-white me-3 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                            <i class="fas fa-box fa-lg"></i>
                        </div>
                        <div>
                            <span class="text-muted small">Total Orders</span>
                            <h4 class="fw-bold mb-0 text-dark">12</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm rounded-4 p-3 bg-white d-flex flex-row align-items-center">
                        <div class="rounded-circle btn-md-square bg-warning text-white me-3 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                            <i class="fas fa-truck fa-lg"></i>
                        </div>
                        <div>
                            <span class="text-muted small">In Transit</span>
                            <h4 class="fw-bold mb-0 text-dark">2</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm rounded-4 p-3 bg-white d-flex flex-row align-items-center">
                        <div class="rounded-circle btn-md-square bg-success text-white me-3 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                            <i class="fas fa-check-circle fa-lg"></i>
                        </div>
                        <div>
                            <span class="text-muted small">Completed</span>
                            <h4 class="fw-bold mb-0 text-dark">10</h4>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Filter Controls -->
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-4 gap-3">
                <div class="d-flex gap-2">
                    <button class="btn btn-primary rounded-pill px-4">All Orders</button>
                    <button class="btn btn-outline-secondary rounded-pill px-4">In Transit</button>
                    <button class="btn btn-outline-secondary rounded-pill px-4">Completed</button>
                    <button class="btn btn-outline-secondary rounded-pill px-4 d-none d-md-inline-block">Cancelled</button>
                </div>
                <div class="position-relative" style="max-width: 300px;">
                    <input type="text" class="form-control rounded-pill pe-5 ps-3" placeholder="Search by Order ID...">
                    <button class="btn border-0 position-absolute end-0 top-50 translate-middle-y me-2 text-muted" type="button">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>

            <!-- Orders Stack -->
            <div class="d-flex flex-column gap-4">

                <!-- Order Card 1: In Transit -->
                <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
                    <div class="card-header bg-light py-3 px-4 border-0">
                        <div class="row align-items-center g-2">
                            <div class="col-6 col-md-3">
                                <small class="text-muted d-block">Order Placed</small>
                                <span class="fw-bold text-dark">July 24, 2026</span>
                            </div>
                            <div class="col-6 col-md-3">
                                <small class="text-muted d-block">Total</small>
                                <span class="fw-bold text-primary">$189.50</span>
                            </div>
                            <div class="col-6 col-md-3">
                                <small class="text-muted d-block">Order ID</small>
                                <span class="fw-bold text-dark">#CM-94821</span>
                            </div>
                            <div class="col-6 col-md-3 text-end">
                                <span class="badge bg-warning text-dark px-3 py-2 rounded-pill fw-medium">
                                    <i class="fas fa-truck me-1"></i> In Transit
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-4">
                        <div class="row align-items-center gy-3">
                            <div class="col-md-8">
                                <div class="d-flex align-items-center gap-3 mb-3">
                                    <img src="https://via.placeholder.com/70" alt="Product" class="rounded-3 border p-1" style="width: 70px; height: 70px; object-fit: cover;">
                                    <div>
                                        <h6 class="fw-bold mb-1 text-dark">Wireless Noise-Canceling Headphones</h6>
                                        <small class="text-muted">Qty: 1 | Color: Midnight Black</small>
                                        <div class="text-primary fw-bold">$149.50</div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center gap-3">
                                    <img src="https://via.placeholder.com/70" alt="Product" class="rounded-3 border p-1" style="width: 70px; height: 70px; object-fit: cover;">
                                    <div>
                                        <h6 class="fw-bold mb-1 text-dark">Fast Charging USB-C Cable (6ft)</h6>
                                        <small class="text-muted">Qty: 2 | Length: 2 meters</small>
                                        <div class="text-primary fw-bold">$40.00</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 text-md-end border-start-md ps-md-4">
                                <p class="small text-muted mb-2"><i class="fas fa-shipping-fast text-primary me-1"></i> Est. Delivery: <strong>July 29, 2026</strong></p>
                                <button class="btn btn-outline-primary rounded-pill w-100 mb-2" data-bs-toggle="modal" data-bs-target="#orderDetailsModal">
                                    View Details
                                </button>
                                <button class="btn btn-primary rounded-pill w-100 text-white">
                                    Track Package
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Order Card 2: Delivered -->
                <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
                    <div class="card-header bg-light py-3 px-4 border-0">
                        <div class="row align-items-center g-2">
                            <div class="col-6 col-md-3">
                                <small class="text-muted d-block">Order Placed</small>
                                <span class="fw-bold text-dark">June 12, 2026</span>
                            </div>
                            <div class="col-6 col-md-3">
                                <small class="text-muted d-block">Total</small>
                                <span class="fw-bold text-primary">$899.00</span>
                            </div>
                            <div class="col-6 col-md-3">
                                <small class="text-muted d-block">Order ID</small>
                                <span class="fw-bold text-dark">#CM-83204</span>
                            </div>
                            <div class="col-6 col-md-3 text-end">
                                <span class="badge bg-success px-3 py-2 rounded-pill fw-medium">
                                    <i class="fas fa-check-circle me-1"></i> Delivered
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-4">
                        <div class="row align-items-center gy-3">
                            <div class="col-md-8">
                                <div class="d-flex align-items-center gap-3">
                                    <img src="https://via.placeholder.com/70" alt="Product" class="rounded-3 border p-1" style="width: 70px; height: 70px; object-fit: cover;">
                                    <div>
                                        <h6 class="fw-bold mb-1 text-dark">4K Ultra HD Smart LED TV (55 Inch)</h6>
                                        <small class="text-muted">Qty: 1 | Model: 2026 Series</small>
                                        <div class="text-primary fw-bold">$899.00</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 text-md-end border-start-md ps-md-4">
                                <p class="small text-muted mb-2">Delivered on June 15, 2026</p>
                                <button class="btn btn-outline-primary rounded-pill w-100 mb-2" data-bs-toggle="modal" data-bs-target="#orderDetailsModal">
                                    View Details
                                </button>
                                <button class="btn btn-secondary rounded-pill w-100">
                                    <i class="fas fa-redo me-1"></i> Buy Again
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Pagination -->
            <nav class="mt-5" aria-label="Order history navigation">
                <ul class="pagination justify-content-center d-flex flex-row flex-nowrap align-items-center mb-0">
                    <li class="page-item disabled"><a class="page-link rounded-circle mx-1" href="#"><i class="fas fa-chevron-left"></i></a></li>
                    <li class="page-item active"><a class="page-link rounded-circle mx-1" href="#">1</a></li>
                    <li class="page-item"><a class="page-link rounded-circle mx-1" href="#">2</a></li>
                    <li class="page-item"><a class="page-link rounded-circle mx-1" href="#"><i class="fas fa-chevron-right"></i></a></li>
                </ul>
            </nav>

        </div>
    </div>

    <!-- Order Details Modal -->
    <div class="modal fade" id="orderDetailsModal" tabindex="-1" aria-labelledby="orderDetailsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content rounded-4 border-0 shadow">
                <div class="modal-header border-bottom-0 pb-0 px-4 pt-4">
                    <div>
                        <h5 class="modal-title fw-bold text-dark" id="orderDetailsModalLabel">Order Details</h5>
                        <small class="text-muted">Order ID: #CM-94821</small>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    
                    <!-- Delivery Info Grid -->
                    <div class="row g-3 p-3 bg-light rounded-4 mb-4">
                        <div class="col-md-6">
                            <h6 class="fw-bold text-dark mb-1"><i class="fas fa-map-marker-alt text-primary me-2"></i>Shipping Address</h6>
                            <p class="small text-muted mb-0">John Doe<br>123 Shopping Blvd, Suite 400<br>New York, NY 10001</p>
                        </div>
                        <div class="col-md-6">
                            <h6 class="fw-bold text-dark mb-1"><i class="fas fa-credit-card text-primary me-2"></i>Payment Method</h6>
                            <p class="small text-muted mb-0">Visa ending in <strong>4242</strong><br>Status: <span class="text-success">Paid</span></p>
                        </div>
                    </div>

                    <!-- Items Summary -->
                    <h6 class="fw-bold text-dark mb-3">Items Summary</h6>
                    <ul class="list-group list-group-flush mb-4">
                        <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                            <div>
                                <span class="fw-bold text-dark">Wireless Headphones</span>
                                <small class="text-muted d-block">Qty: 1 x $149.50</small>
                            </div>
                            <span class="fw-bold text-dark">$149.50</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                            <div>
                                <span class="fw-bold text-dark">Fast Charging Cable</span>
                                <small class="text-muted d-block">Qty: 2 x $20.00</small>
                            </div>
                            <span class="fw-bold text-dark">$40.00</span>
                        </li>
                    </ul>

                    <!-- Financial Breakdown -->
                    <div class="border-top pt-3">
                        <div class="d-flex justify-content-between mb-2">
                            <span class="text-muted">Subtotal</span>
                            <span class="fw-medium text-dark">$189.50</span>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <span class="text-muted">Shipping</span>
                            <span class="text-success fw-medium">FREE</span>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <span class="text-muted">Tax</span>
                            <span class="fw-medium text-dark">$0.00</span>
                        </div>
                        <div class="d-flex justify-content-between pt-2 border-top">
                            <span class="fw-bold text-dark h5 mb-0">Total</span>
                            <span class="fw-bold text-primary h5 mb-0">$189.50</span>
                        </div>
                    </div>

                </div>
                <div class="modal-footer border-top-0 px-4 pb-4 pt-0">
                    <button type="button" class="btn btn-secondary rounded-pill px-4" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary rounded-pill px-4 text-white"><i class="fas fa-print me-1"></i> Print Invoice</button>
                </div>
            </div>
        </div>
    </div>