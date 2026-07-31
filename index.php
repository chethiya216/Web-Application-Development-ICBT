<!DOCTYPE html>
<html lang="en">
<head>
    <title>CMart</title>
</head>
<body>
    <?php 
        session_start();
        require_once 'config/config.php';
        include('includes/header.php');

        $sql_categories = "SELECT c.id, c.name AS category_name, COUNT(p.id) AS product_count 
                        FROM categories c
                        LEFT JOIN products p ON c.id = p.category_id
                        GROUP BY c.id, c.name
                        ORDER BY c.name ASC";
        $stmt_cat = $conn->prepare($sql_categories);
        $stmt_cat->execute();
        $categories = $stmt_cat->get_result()->fetch_all(MYSQLI_ASSOC);

        $sql_products = "SELECT p.*, c.name AS category_name 
                        FROM products p
                        LEFT JOIN categories c ON p.category_id = c.id
                        ORDER BY p.id DESC";
        $stmt_prod = $conn->prepare($sql_products);
        $stmt_prod->execute();
        $products = $stmt_prod->get_result()->fetch_all(MYSQLI_ASSOC);
    ?>
    
    <!-- Carousel Start -->
    <div class="container-fluid carousel bg-light px-0">
        <div class="row g-0 justify-content-end">
            <div class="col-12 col-lg-7 col-xl-9">
                <div class="header-carousel owl-carousel bg-light py-5">
                    <div class="row g-0 header-carousel-item align-items-center">
                        <div class="col-xl-6 carousel-img wow fadeInLeft" data-wow-delay="0.1s">
                            <img src="img/carousel-1.png" class="img-fluid w-100" alt="Image">
                        </div>
                        <div class="col-xl-6 carousel-content p-4">
                            <h4 class="text-uppercase fw-bold mb-4 wow fadeInRight" data-wow-delay="0.1s"
                                style="letter-spacing: 3px;">Save Up To A $400</h4>
                            <h1 class="display-3 text-capitalize mb-4 wow fadeInRight" data-wow-delay="0.3s">On Selected
                                Laptops & Desktop Or Smartphone</h1>
                            <p class="text-dark wow fadeInRight" data-wow-delay="0.5s">Terms and Condition Apply</p>
                            <a class="btn btn-primary rounded-pill py-3 px-5 wow fadeInRight" data-wow-delay="0.7s"
                                href="#">Shop Now</a>
                        </div>
                    </div>
                    <div class="row g-0 header-carousel-item align-items-center">
                        <div class="col-xl-6 carousel-img wow fadeInLeft" data-wow-delay="0.1s">
                            <img src="img/carousel-2.png" class="img-fluid w-100" alt="Image">
                        </div>
                        <div class="col-xl-6 carousel-content p-4">
                            <h4 class="text-uppercase fw-bold mb-4 wow fadeInRight" data-wow-delay="0.1s"
                                style="letter-spacing: 3px;">Save Up To A $200</h4>
                            <h1 class="display-3 text-capitalize mb-4 wow fadeInRight" data-wow-delay="0.3s">On Selected
                                Laptops & Desktop Or Smartphone</h1>
                            <p class="text-dark wow fadeInRight" data-wow-delay="0.5s">Terms and Condition Apply</p>
                            <a class="btn btn-primary rounded-pill py-3 px-5 wow fadeInRight" data-wow-delay="0.7s"
                                href="#">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- Services Start -->
    <div class="container-fluid px-0">
        <div class="row g-0">
            <div class="col-6 col-md-4 col-lg-2 border-start border-end wow fadeInUp" data-wow-delay="0.1s">
                <div class="p-4">
                    <div class="d-inline-flex align-items-center">
                        <i class="fa fa-sync-alt fa-2x text-primary"></i>
                        <div class="ms-4">
                            <h6 class="text-uppercase mb-2">Free Return</h6>
                            <p class="mb-0">30 days money back guarantee!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2 border-end wow fadeInUp" data-wow-delay="0.2s">
                <div class="p-4">
                    <div class="d-flex align-items-center">
                        <i class="fab fa-telegram-plane fa-2x text-primary"></i>
                        <div class="ms-4">
                            <h6 class="text-uppercase mb-2">Free Shipping</h6>
                            <p class="mb-0">Free shipping on all order</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2 border-end wow fadeInUp" data-wow-delay="0.3s">
                <div class="p-4">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-life-ring fa-2x text-primary"></i>
                        <div class="ms-4">
                            <h6 class="text-uppercase mb-2">Support 24/7</h6>
                            <p class="mb-0">We support online 24 hrs a day</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2 border-end wow fadeInUp" data-wow-delay="0.4s">
                <div class="p-4">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-credit-card fa-2x text-primary"></i>
                        <div class="ms-4">
                            <h6 class="text-uppercase mb-2">Receive Gift Card</h6>
                            <p class="mb-0">Receive gift all over order $50</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2 border-end wow fadeInUp" data-wow-delay="0.5s">
                <div class="p-4">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-lock fa-2x text-primary"></i>
                        <div class="ms-4">
                            <h6 class="text-uppercase mb-2">Secure Payment</h6>
                            <p class="mb-0">We Value Your Security</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2 border-end wow fadeInUp" data-wow-delay="0.6s">
                <div class="p-4">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-blog fa-2x text-primary"></i>
                        <div class="ms-4">
                            <h6 class="text-uppercase mb-2">Online Service</h6>
                            <p class="mb-0">Free return products in 30 days</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->

    <!-- Products Offer Start -->
    <div class="container-fluid bg-light py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                    <a href="#" class="d-flex align-items-center justify-content-between border bg-white rounded p-4">
                        <div>
                            <p class="text-muted mb-3">Find The Best Camera for You!</p>
                            <h3 class="text-primary">Smart Camera</h3>
                            <h1 class="display-3 text-secondary mb-0">40% <span class="text-primary fw-normal">Off</span></h1>
                        </div>
                        <img src="img/product-1.png" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.3s">
                    <a href="#" class="d-flex align-items-center justify-content-between border bg-white rounded p-4">
                        <div>
                            <p class="text-muted mb-3">Find The Best Watches for You!</p>
                            <h3 class="text-primary">Smart Watch</h3>
                            <h1 class="display-3 text-secondary mb-0">20% <span class="text-primary fw-normal">Off</span></h1>
                        </div>
                        <img src="img/product-2.png" class="img-fluid" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Products Offer End -->

    <!-- Our Products Start -->
    <div class="container-fluid product py-5">
        <div class="container py-5">
            <div class="tab-class">
                <div class="row g-4">
                    <div class="col-lg-4 text-start wow fadeInLeft" data-wow-delay="0.1s">
                        <h1>Our Products</h1>
                    </div>
                    <div class="col-lg-8 text-end wow fadeInRight" data-wow-delay="0.1s">
                        <ul class="nav nav-pills d-inline-flex text-center mb-5">
                            <li class="nav-item mb-4">
                                <a class="d-flex mx-2 py-2 bg-light rounded-pill active" data-bs-toggle="pill" href="#tab-1">
                                    <span class="text-dark" style="width: 130px;">All Products</span>
                                </a>
                            </li>
                            <li class="nav-item mb-4">
                                <a class="d-flex py-2 mx-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-2">
                                    <span class="text-dark" style="width: 130px;">New Arrivals</span>
                                </a>
                            </li>
                            <li class="nav-item mb-4">
                                <a class="d-flex mx-2 py-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-3">
                                    <span class="text-dark" style="width: 130px;">Featured</span>
                                </a>
                            </li>
                            <li class="nav-item mb-4">
                                <a class="d-flex mx-2 py-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-4">
                                    <span class="text-dark" style="width: 130px;">Top Selling</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-content">
                    <!-- Tab 1: All Products (Dynamic) -->
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            <?php foreach ($products as $product) : ?>
                                <div class="col-md-6 col-lg-4 col-xl-3">
                                    <div class="product-item rounded wow fadeInUp" data-wow-delay="0.1s">
                                        <div class="product-item-inner border rounded">
                                            <div class="product-item-inner-item">
                                                <img src="uploads/products/<?= htmlspecialchars($product['image'] ?? 'default.png') ?>" 
                                                    class="img-fluid w-100 rounded-top" 
                                                    alt="<?= htmlspecialchars($product['name'] ?? 'Product Image') ?>">
                                                
                                                <?php if (!empty($product['is_new'])) : ?>
                                                    <div class="product-new">New</div>
                                                <?php endif; ?>

                                                <div class="product-details">
                                                    <a href="product-details.php?id=<?= $product['id'] ?>"><i class="fa fa-eye fa-1x"></i></a>
                                                </div>
                                            </div>

                                            <div class="text-center rounded-bottom p-4">
                                                <a href="category.php?id=<?= $product['category_id'] ?>" class="d-block mb-2">
                                                    <?= htmlspecialchars($product['category_name'] ?? 'Uncategorized') ?>
                                                </a>
                                                <a href="product-details.php?id=<?= $product['id'] ?>" class="d-block h4">
                                                    <?= htmlspecialchars($product['name']) ?>
                                                </a>
                                                <span class="text-primary fs-5">$<?= number_format($product['price'], 2) ?></span>
                                            </div>
                                        </div>

                                        <div class="product-item-add border border-top-0 rounded-bottom text-center p-4 pt-0">
                                            <form action="cart.php" method="POST">
                                                <input type="hidden" name="product_id" value="<?= $product['id'] ?>">
                                                <button type="submit" name="add_to_cart" class="btn btn-primary border-secondary rounded-pill py-2 px-4 mb-4">
                                                    <i class="fas fa-shopping-cart me-2"></i> Add To Cart
                                                </button>
                                            </form>

                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="d-flex">
                                                    <?php 
                                                    $rating = (int)($product['rating'] ?? 5); 
                                                    for ($i = 1; $i <= 5; $i++) : 
                                                    ?>
                                                        <i class="fas fa-star <?= $i <= $rating ? 'text-primary' : 'text-muted' ?>"></i>
                                                    <?php endfor; ?>
                                                </div>
                                                <div class="d-flex">
                                                    <a href="compare.php?id=<?= $product['id'] ?>" class="text-primary d-flex align-items-center justify-content-center me-3">
                                                        <span class="rounded-circle btn-sm-square border"><i class="fas fa-random"></i></span>
                                                    </a>
                                                    <a href="wishlist.php?id=<?= $product['id'] ?>" class="text-primary d-flex align-items-center justify-content-center me-0">
                                                        <span class="rounded-circle btn-sm-square border"><i class="fas fa-heart"></i></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <!-- Tab 2: New Arrivals (products marked is_new, fallback to first 8) -->
                    <div id="tab-2" class="tab-pane fade p-0">
                        <div class="row g-4">
                            <?php 
                            $new_products = array_filter($products, fn($p) => !empty($p['is_new']));
                            if (empty($new_products)) {
                                $new_products = array_slice($products, 0, 8);
                            }
                            foreach ($new_products as $product) : 
                            ?>
                                <div class="col-md-6 col-lg-4 col-xl-3">
                                    <div class="product-item rounded wow fadeInUp" data-wow-delay="0.1s">
                                        <div class="product-item-inner border rounded">
                                            <div class="product-item-inner-item">
                                                <img src="uploads/products/<?= htmlspecialchars($product['image'] ?? 'default.png') ?>" 
                                                    class="img-fluid w-100 rounded-top" 
                                                    alt="<?= htmlspecialchars($product['name'] ?? 'Product Image') ?>">
                                                <div class="product-new">New</div>
                                                <div class="product-details">
                                                    <a href="product-details.php?id=<?= $product['id'] ?>"><i class="fa fa-eye fa-1x"></i></a>
                                                </div>
                                            </div>
                                            <div class="text-center rounded-bottom p-4">
                                                <a href="category.php?id=<?= $product['category_id'] ?>" class="d-block mb-2">
                                                    <?= htmlspecialchars($product['category_name'] ?? 'Uncategorized') ?>
                                                </a>
                                                <a href="product-details.php?id=<?= $product['id'] ?>" class="d-block h4">
                                                    <?= htmlspecialchars($product['name']) ?>
                                                </a>
                                                <span class="text-primary fs-5">$<?= number_format($product['price'], 2) ?></span>
                                            </div>
                                        </div>
                                        <div class="product-item-add border border-top-0 rounded-bottom text-center p-4 pt-0">
                                            <form action="cart.php" method="POST">
                                                <input type="hidden" name="product_id" value="<?= $product['id'] ?>">
                                                <button type="submit" name="add_to_cart" class="btn btn-primary border-secondary rounded-pill py-2 px-4 mb-4">
                                                    <i class="fas fa-shopping-cart me-2"></i> Add To Cart
                                                </button>
                                            </form>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="d-flex">
                                                    <?php 
                                                    $rating = (int)($product['rating'] ?? 5); 
                                                    for ($i = 1; $i <= 5; $i++) : 
                                                    ?>
                                                        <i class="fas fa-star <?= $i <= $rating ? 'text-primary' : 'text-muted' ?>"></i>
                                                    <?php endfor; ?>
                                                </div>
                                                <div class="d-flex">
                                                    <a href="compare.php?id=<?= $product['id'] ?>" class="text-primary d-flex align-items-center justify-content-center me-3">
                                                        <span class="rounded-circle btn-sm-square border"><i class="fas fa-random"></i></span>
                                                    </a>
                                                    <a href="wishlist.php?id=<?= $product['id'] ?>" class="text-primary d-flex align-items-center justify-content-center me-0">
                                                        <span class="rounded-circle btn-sm-square border"><i class="fas fa-heart"></i></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <!-- Tab 3: Featured (first 8 products as placeholder) -->
                    <div id="tab-3" class="tab-pane fade p-0">
                        <div class="row g-4">
                            <?php foreach (array_slice($products, 0, 8) as $product) : ?>
                                <div class="col-md-6 col-lg-4 col-xl-3">
                                    <div class="product-item rounded wow fadeInUp" data-wow-delay="0.1s">
                                        <div class="product-item-inner border rounded">
                                            <div class="product-item-inner-item">
                                                <img src="uploads/products/<?= htmlspecialchars($product['image'] ?? 'default.png') ?>" 
                                                    class="img-fluid w-100 rounded-top" 
                                                    alt="<?= htmlspecialchars($product['name'] ?? 'Product Image') ?>">
                                                <div class="product-details">
                                                    <a href="product-details.php?id=<?= $product['id'] ?>"><i class="fa fa-eye fa-1x"></i></a>
                                                </div>
                                            </div>
                                            <div class="text-center rounded-bottom p-4">
                                                <a href="category.php?id=<?= $product['category_id'] ?>" class="d-block mb-2">
                                                    <?= htmlspecialchars($product['category_name'] ?? 'Uncategorized') ?>
                                                </a>
                                                <a href="product-details.php?id=<?= $product['id'] ?>" class="d-block h4">
                                                    <?= htmlspecialchars($product['name']) ?>
                                                </a>
                                                <span class="text-primary fs-5">$<?= number_format($product['price'], 2) ?></span>
                                            </div>
                                        </div>
                                        <div class="product-item-add border border-top-0 rounded-bottom text-center p-4 pt-0">
                                            <form action="cart.php" method="POST">
                                                <input type="hidden" name="product_id" value="<?= $product['id'] ?>">
                                                <button type="submit" name="add_to_cart" class="btn btn-primary border-secondary rounded-pill py-2 px-4 mb-4">
                                                    <i class="fas fa-shopping-cart me-2"></i> Add To Cart
                                                </button>
                                            </form>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="d-flex">
                                                    <?php 
                                                    $rating = (int)($product['rating'] ?? 5); 
                                                    for ($i = 1; $i <= 5; $i++) : 
                                                    ?>
                                                        <i class="fas fa-star <?= $i <= $rating ? 'text-primary' : 'text-muted' ?>"></i>
                                                    <?php endfor; ?>
                                                </div>
                                                <div class="d-flex">
                                                    <a href="compare.php?id=<?= $product['id'] ?>" class="text-primary d-flex align-items-center justify-content-center me-3">
                                                        <span class="rounded-circle btn-sm-square border"><i class="fas fa-random"></i></span>
                                                    </a>
                                                    <a href="wishlist.php?id=<?= $product['id'] ?>" class="text-primary d-flex align-items-center justify-content-center me-0">
                                                        <span class="rounded-circle btn-sm-square border"><i class="fas fa-heart"></i></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <!-- Tab 4: Top Selling (first 8 products as placeholder) -->
                    <div id="tab-4" class="tab-pane fade p-0">
                        <div class="row g-4">
                            <?php foreach (array_slice($products, 0, 8) as $product) : ?>
                                <div class="col-md-6 col-lg-4 col-xl-3">
                                    <div class="product-item rounded wow fadeInUp" data-wow-delay="0.1s">
                                        <div class="product-item-inner border rounded">
                                            <div class="product-item-inner-item">
                                                <img src="uploads/products/<?= htmlspecialchars($product['image'] ?? 'default.png') ?>" 
                                                    class="img-fluid w-100 rounded-top" 
                                                    alt="<?= htmlspecialchars($product['name'] ?? 'Product Image') ?>">
                                                <div class="product-details">
                                                    <a href="product-details.php?id=<?= $product['id'] ?>"><i class="fa fa-eye fa-1x"></i></a>
                                                </div>
                                            </div>
                                            <div class="text-center rounded-bottom p-4">
                                                <a href="category.php?id=<?= $product['category_id'] ?>" class="d-block mb-2">
                                                    <?= htmlspecialchars($product['category_name'] ?? 'Uncategorized') ?>
                                                </a>
                                                <a href="product-details.php?id=<?= $product['id'] ?>" class="d-block h4">
                                                    <?= htmlspecialchars($product['name']) ?>
                                                </a>
                                                <span class="text-primary fs-5">$<?= number_format($product['price'], 2) ?></span>
                                            </div>
                                        </div>
                                        <div class="product-item-add border border-top-0 rounded-bottom text-center p-4 pt-0">
                                            <form action="cart.php" method="POST">
                                                <input type="hidden" name="product_id" value="<?= $product['id'] ?>">
                                                <button type="submit" name="add_to_cart" class="btn btn-primary border-secondary rounded-pill py-2 px-4 mb-4">
                                                    <i class="fas fa-shopping-cart me-2"></i> Add To Cart
                                                </button>
                                            </form>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="d-flex">
                                                    <?php 
                                                    $rating = (int)($product['rating'] ?? 5); 
                                                    for ($i = 1; $i <= 5; $i++) : 
                                                    ?>
                                                        <i class="fas fa-star <?= $i <= $rating ? 'text-primary' : 'text-muted' ?>"></i>
                                                    <?php endfor; ?>
                                                </div>
                                                <div class="d-flex">
                                                    <a href="compare.php?id=<?= $product['id'] ?>" class="text-primary d-flex align-items-center justify-content-center me-3">
                                                        <span class="rounded-circle btn-sm-square border"><i class="fas fa-random"></i></span>
                                                    </a>
                                                    <a href="wishlist.php?id=<?= $product['id'] ?>" class="text-primary d-flex align-items-center justify-content-center me-0">
                                                        <span class="rounded-circle btn-sm-square border"><i class="fas fa-heart"></i></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Products End -->

    <!-- Product Banner Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
                    <a href="#">
                        <div class="bg-primary rounded position-relative">
                            <img src="img/product-banner.jpg" class="img-fluid w-100 rounded" alt="">
                            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-center rounded p-4"
                                style="background: rgba(255, 255, 255, 0.5);">
                                <h3 class="display-5 text-primary">EOS Rebel <br> <span>T7i Kit</span></h3>
                                <p class="fs-4 text-muted">$899.99</p>
                                <a href="#" class="btn btn-primary rounded-pill align-self-start py-2 px-4">Shop Now</a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.2s">
                    <a href="#">
                        <div class="text-center bg-primary rounded position-relative">
                            <img src="img/product-banner-2.jpg" class="img-fluid w-100" alt="">
                            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-center rounded p-4"
                                style="background: rgba(242, 139, 0, 0.5);">
                                <h2 class="display-2 text-secondary">SALE</h2>
                                <h4 class="display-5 text-white mb-4">Get UP To 50% Off</h4>
                                <a href="#" class="btn btn-secondary rounded-pill align-self-center py-2 px-4">Shop Now</a>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Product Banner End -->

    <!-- Product List Start (Dynamic mini cards) -->
    <div class="container-fluid products productList overflow-hidden">
        <div class="container products-mini py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h4 class="text-primary border-bottom border-primary border-2 d-inline-block p-2 title-border-radius wow fadeInUp"
                    data-wow-delay="0.1s">Products</h4>
                <h1 class="mb-0 display-3 wow fadeInUp" data-wow-delay="0.3s">All Product Items</h1>
            </div>
            <div class="productList-carousel owl-carousel pt-4 wow fadeInUp" data-wow-delay="0.3s">
                <?php 
                // Show up to 12 products in mini format, grouped for the carousel
                $mini_products = array_slice($products, 0, 12);
                $chunks = array_chunk($mini_products, 4);
                foreach ($chunks as $chunk) : 
                ?>
                    <div class="productImg-carousel owl-carousel productList-item">
                        <?php foreach ($chunk as $product) : ?>
                            <div class="productImg-item products-mini-item border">
                                <div class="row g-0">
                                    <div class="col-5">
                                        <div class="products-mini-img border-end h-100">
                                            <img src="uploads/products/<?= htmlspecialchars($product['image'] ?? 'default.png') ?>" 
                                                 class="img-fluid w-100 h-100" 
                                                 alt="<?= htmlspecialchars($product['name'] ?? 'Product') ?>">
                                            <div class="products-mini-icon rounded-circle bg-primary">
                                                <a href="product-details.php?id=<?= $product['id'] ?>"><i class="fa fa-eye fa-1x text-white"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-7">
                                        <div class="products-mini-content p-3">
                                            <a href="category.php?id=<?= $product['category_id'] ?>" class="d-block mb-2">
                                                <?= htmlspecialchars($product['category_name'] ?? 'Uncategorized') ?>
                                            </a>
                                            <a href="product-details.php?id=<?= $product['id'] ?>" class="d-block h4">
                                                <?= htmlspecialchars($product['name']) ?>
                                            </a>
                                            <span class="text-primary fs-5">$<?= number_format($product['price'], 2) ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="products-mini-add border p-3">
                                    <form action="cart.php" method="POST" class="d-inline">
                                        <input type="hidden" name="product_id" value="<?= $product['id'] ?>">
                                        <button type="submit" name="add_to_cart" class="btn btn-primary border-secondary rounded-pill py-2 px-4">
                                            <i class="fas fa-shopping-cart me-2"></i> Add To Cart
                                        </button>
                                    </form>
                                    <div class="d-flex">
                                        <a href="compare.php?id=<?= $product['id'] ?>" class="text-primary d-flex align-items-center justify-content-center me-3">
                                            <span class="rounded-circle btn-sm-square border"><i class="fas fa-random"></i></span>
                                        </a>
                                        <a href="wishlist.php?id=<?= $product['id'] ?>" class="text-primary d-flex align-items-center justify-content-center me-0">
                                            <span class="rounded-circle btn-sm-square border"><i class="fas fa-heart"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <!-- Product List End -->

    <!-- Bestseller Products Start (Dynamic) -->
    <div class="container-fluid products pb-5">
        <div class="container products-mini py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 700px;">
                <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius wow fadeInUp"
                    data-wow-delay="0.1s">Bestseller Products</h4>
                <p class="mb-0 wow fadeInUp" data-wow-delay="0.2s">Discover our most popular products loved by customers.</p>
            </div>
            <div class="row g-4">
                <?php foreach (array_slice($products, 0, 6) as $product) : ?>
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="products-mini-item border">
                            <div class="row g-0">
                                <div class="col-5">
                                    <div class="products-mini-img border-end h-100">
                                        <img src="uploads/products/<?= htmlspecialchars($product['image'] ?? 'default.png') ?>" 
                                             class="img-fluid w-100 h-100" 
                                             alt="<?= htmlspecialchars($product['name'] ?? 'Product') ?>">
                                        <div class="products-mini-icon rounded-circle bg-primary">
                                            <a href="product-details.php?id=<?= $product['id'] ?>"><i class="fa fa-eye fa-1x text-white"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-7">
                                    <div class="products-mini-content p-3">
                                        <a href="category.php?id=<?= $product['category_id'] ?>" class="d-block mb-2">
                                            <?= htmlspecialchars($product['category_name'] ?? 'Uncategorized') ?>
                                        </a>
                                        <a href="product-details.php?id=<?= $product['id'] ?>" class="d-block h4">
                                            <?= htmlspecialchars($product['name']) ?>
                                        </a>
                                        <span class="text-primary fs-5">$<?= number_format($product['price'], 2) ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="products-mini-add border p-3">
                                <form action="cart.php" method="POST" class="d-inline">
                                    <input type="hidden" name="product_id" value="<?= $product['id'] ?>">
                                    <button type="submit" name="add_to_cart" class="btn btn-primary border-secondary rounded-pill py-2 px-4">
                                        <i class="fas fa-shopping-cart me-2"></i> Add To Cart
                                    </button>
                                </form>
                                <div class="d-flex">
                                    <a href="compare.php?id=<?= $product['id'] ?>" class="text-primary d-flex align-items-center justify-content-center me-3">
                                        <span class="rounded-circle btn-sm-square border"><i class="fas fa-random"></i></span>
                                    </a>
                                    <a href="wishlist.php?id=<?= $product['id'] ?>" class="text-primary d-flex align-items-center justify-content-center me-0">
                                        <span class="rounded-circle btn-sm-square border"><i class="fas fa-heart"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <!-- Bestseller Products End -->

    
    <?php include('includes/footer.php'); ?>
</body>
</html>
