<div class="container-fluid bg-light py-4 mb-5">
        <div class="container text-center py-2">
            <h1 class="display-6 fw-bold text-dark mb-2">Account Login</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="index.html" class="text-primary text-decoration-none">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Login</li>
                </ol>
            </nav>
        </div>
    </div>
    
<!-- Login Form Section -->
    <div class="container-fluid py-3 mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="card border-0 shadow-sm rounded-4 p-4 p-md-5">
                        
                        <!-- Title & Subtitle -->
                        <div class="text-center mb-4">
                            <h2 class="fw-bold text-dark">Welcome Back!</h2>
                            <p class="text-muted">Sign in to manage your orders, wishlist, and profile.</p>
                        </div>

                        <!-- Form -->
                        <form action="login_process.php" method="POST">
                            
                            <!-- Email Input -->
                            <div class="mb-4">
                                <label for="email" class="form-label text-dark fw-medium">Email Address</label>
                                <div class="input-group border rounded-pill overflow-hidden">
                                    <span class="input-group-text bg-white border-0 ps-3 text-muted">
                                        <i class="fas fa-envelope"></i>
                                    </span>
                                    <input type="email" class="form-control border-0 py-3 pe-3" id="email" name="email" placeholder="name@example.com" required>
                                </div>
                            </div>

                            <!-- Password Input -->
                            <div class="mb-3">
                                <div class="d-flex justify-content-between align-items-center mb-1">
                                    <label for="password" class="form-label text-dark fw-medium mb-0">Password</label>
                                    <a href="forgot-password.php" class="small text-primary text-decoration-none">Forgot password?</a>
                                </div>
                                <div class="input-group border rounded-pill overflow-hidden">
                                    <span class="input-group-text bg-white border-0 ps-3 text-muted">
                                        <i class="fas fa-lock"></i>
                                    </span>
                                    <input type="password" class="form-control border-0 py-3 pe-3" id="password" name="password" placeholder="Enter your password" required>
                                </div>
                            </div>

                            <!-- Remember Me Checkbox -->
                            <div class="form-check mb-4 ms-1">
                                <input class="form-check-input" type="checkbox" id="remember" name="remember">
                                <label class="form-check-label text-muted" for="remember">
                                    Remember me on this device
                                </label>
                            </div>

                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-primary rounded-pill w-100 py-3 fw-bold text-white shadow-sm mb-3">
                                <i class="fas fa-sign-in-alt me-2"></i> Log In
                            </button>

                        </form>

                        <!-- Divider -->
                        <div class="position-relative text-center my-4">
                            <hr class="text-muted">
                            <span class="position-absolute top-50 start-50 translate-middle bg-white px-3 text-muted small">
                                OR
                            </span>
                        </div>

                        <!-- Register Link -->
                        <div class="text-center">
                            <p class="text-muted mb-0">Don't have an account yet? 
                                <a href="register.php" class="text-primary fw-bold text-decoration-none">Create an Account</a>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>