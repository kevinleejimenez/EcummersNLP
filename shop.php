<?php
    ob_start();
    // include header.php file
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Purr Dog</title>

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Owl-carousel CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />

    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Custom CSS file -->
    <link rel="stylesheet" href="style.css">

    <?php
    // require functions.php file
    require ('functions.php');
    ?>

</head>

<style>
  
  
/* Global Styles */
body {
    margin: 0;
    font-family: Arial, sans-serif;
    background: #FFF3CF;
    background-image: url("https://i.postimg.cc/y6S60tTV/cuadrado.png");
    background-size: 280px; 


}

.text-success {
    color: white !important;
    font-size: 36px;
}

/* Logo Styles */
.logo {
    width: 200px; /* Adjust the width as needed */
    height: auto; /* Maintain aspect ratio */
}

/* Navbar Styles */
.navbar {
    background-color: #ffffff !important;
    border-bottom: 2px solid #FFA500;
}

.navbar .navbar-nav .nav-item .nav-link {
    color: #333333;
    font-weight: bold;
    padding: 14px 20px;
}

.navbar .navbar-nav .nav-item .nav-link:hover {
    color: #FFA500;
}

/* Navbar Icon Styles */
.nav-icon {
    font-size: 20px;
    color: #333333;
}

.nav-icon:hover {
    color: #FFA500;
}

.position-relative a {
    color: #333333;
    text-decoration: none;
}

.position-relative a:hover {
    color: #FFA500;
}

/* Search Bar Styles */
.search-container {
    position: relative;
    display: flex;
    align-items: center;
}

.search-input {
    width: 0;
    padding: 10px;
    border: none;
    outline: none;
    transition: width 0.3s;
    font-size: 16px;
    height: 30px; /* Ensure consistent height */
}

.nav-item {
    display: flex;
    align-items: center;
    cursor: pointer;
}

.nav-item:hover .search-input {
    width: 200px;
    margin-right: 10px;
}

/* Responsive Adjustments */
@media (max-width: 768px) {
    .navbar-nav {
        flex-direction: column;
        text-align: center;
    }

    .navbar-nav .nav-item {
        margin-bottom: 10px;
    }

    .navbar-nav .nav-item .nav-link {
        padding: 10px 0;
    }

    .navbar-nav.ml-auto {
        flex-direction: row;
        justify-content: center;
    }
}

</style>

<body>

<!-- start #header -->
<header id="header">
    <!-- Primary Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="./assets/logo.jpg" alt="Food Purr Dog Logo" class="logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                    </ul>
                    <div class="navbar-nav ml-auto">
                                    <div class="search-container">
                            <div class="search-container">
                        <input type="text" class="search-input" placeholder="Search...">
                        <a class="nav-item nav-link" href="#">
                            <i class="fa-solid fa-magnifying-glass nav-icon"></i>
                        </a>
                    </div>
                        <a class="nav-item nav-link" href="#"><i class="fa-solid fa-cart-arrow-down nav-icon"></i></a>
                        <a class="nav-item nav-link" href="login.php"><i class="fa-solid fa-user nav-icon"></i></a>
                    </div>
                </div>
            </div>
        </nav>
    <!-- !Primary Navigation -->

</header>
<!-- !start #header -->

<!-- start #main-site -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Search bar functionality
        const searchIcon = document.querySelector('.nav-icon');
        const searchInput = document.querySelector('.search-input');
        const gridItems = document.querySelectorAll('.grid-item');

        searchIcon.addEventListener('click', function() {
            searchInput.focus();
        });

        searchInput.addEventListener('input', function() {
            const searchTerm = searchInput.value.trim().toLowerCase();

            gridItems.forEach(item => {
                const itemName = item.querySelector('h6').textContent.toLowerCase();
                if (itemName.includes(searchTerm)) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });

        searchInput.addEventListener('blur', function() {
            if (!searchInput.value) {
                searchInput.style.width = '0';
            }
        });

        searchInput.addEventListener('focus', function() {
            searchInput.style.width = '200px';
        });
    });
</script>

<?php
    include('item-shop.php');


    // include footer.php file
    include ('footer.php');
?>