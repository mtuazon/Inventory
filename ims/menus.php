
<style>
html,
body {
    height: 100%;
}

.footer {
   
    color: white;
    width: 100%;
    text-align: center;
    padding: 0x;
    position: relative;
    bottom: 0;
}

.navbar-menu {
    display: flex;
    justify-content: center;
    width: 100%;
}

.navbar-menu .nav-item {
    margin: 0 10px;
    padding: 10px;
}

</style>



<nav class="navbar navbar-dark bg-dark bg-gradient navbar-expand-md" style="height: 100%" >

    <div class="container-fluid d-flex justify-content-center align-items-center flex-column">
        <button class="navbar-toggler align-self-start" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="nav navbar-menu flex-column menus" style="font-size: 20px;">
                <li class="nav-item"><a class="nav-link" href="index.php" id="index_menu">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="category.php" id="category_menu">Category</a></li>
                <li class="nav-item"><a class="nav-link" href="brand.php" id="brand_menu">Brand</a></li>
                <li class="nav-item"><a class="nav-link" href="supplier.php" id="supplier_menu">Supplier</a></li>
                <li class="nav-item"><a class="nav-link" href="product.php" id="product_menu">Product</a></li>
                <li class="nav-item"><a class="nav-link" href="purchase.php" id="purchase_menu">Purchase</a></li>
                <li class="nav-item"><a class="nav-link" href="order.php" id="order_menu">Orders</a></li>
            </ul>
        </div>
    </div>
</nav>
