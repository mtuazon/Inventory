<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory System</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        .navbar-brand {
            font-size: 24px;
            font-weight: bold;
        }
        .navbar-nav .nav-item {
            position: relative;
        }
        .navbar-nav .dropdown-toggle::after {
            display: none;
        }
        .badge-pill {
            display: inline-block;
        }
        .count {
            font-size: 10px;
            position: absolute;
            top: -5px;
            right: -10px;
        }
    </style>
</head>
<body>
<nav role="navigation" class="navbar navbar-dark navbar-static-top" style="background-color: orange;">
    <div class="container d-flex justify-content-between align-items-center">
        <div class="navbar-header">
            <a class="navbar-brand"><i class="fas fa-boxes"></i> INVENTORY SYSTEM</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="dropdown position-relative">
                <button type="button" class="badge bg-light border px-3 text-dark rounded-pill dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-user"></i>
                    <?php echo isset($_SESSION['name']) ? $_SESSION['name'] : 'Guest'; ?>
                    <span class="badge badge-pill bg-danger count">3</span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="action.php?action=logout"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
