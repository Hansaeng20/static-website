<?php
// Determine the active menu item based on the query parameter 'page'
$page = isset($_GET['page']) ? $_GET['page'] : 'm365-plans';

// Function to set active class
function isActive($linkPage, $currentPage) {
    return $linkPage === $currentPage ? 'class="active"' : '';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Microsoft Style Website</title>
    <link rel="stylesheet" href="nvidia-style.css" />
    <link rel="stylesheet" href="hm-layout.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>
<body>

    <nav>
        <ul>
            <li><a href="?page=m365-plans" <?= isActive('m365-plans', $page) ?>>Microsoft 365</a></li>
            <li><a href="?page=apps-showcase" <?= isActive('apps-showcase', $page) ?>>Office</a></li>
            <li id="copilot-link"><a href="?page=copilot" <?= isActive('copilot', $page) ?>>Copilot</a></li>
            <li><a href="?page=product-grid" <?= isActive('product-grid', $page) ?>>Windows</a></li>
            <li><a href="?page=shop-deals" <?= isActive('shop-deals', $page) ?>>Xbox</a></li>
            <li id="support-link"><a href="?page=support" <?= isActive('support', $page) ?>>Support</a></li>
        </ul>
    </nav>

    <!-- Quick Links -->
    <section class="quick-links">
        <div class="links-container">
            <a href="#m365-plans">
                <i class="fas fa-chevron-circle-down"></i>
                <span>Choose your Microsoft 365</span>
            </a>
            <a href="#">
                <i class="fas fa-tablet-alt"></i>
                <span>For Businesses</span>
            </a>
            <a href="#product-grid">
                <i class="fab fa-xbox"></i>
                <span>For Productivity</span>
            </a>
            <a href="#windows-apps">
                <i class="fas fa-chevron-circle-down"></i>
                <span>Get Windows 11</span>
            </a>
        </div>
    </section>

    <main>
        <?php
        // Simple content switcher based on the active page
        switch ($page) {
            case 'm365-plans':
                echo '<h1>Welcome to Microsoft 365 Plans</h1><p>Explore our subscription plans.</p>';
                break;
            case 'apps-showcase':
                echo '<h1>Office Apps Showcase</h1><p>Discover the powerful Office apps.</p>';
                break;
            case 'copilot':
                echo '<h1>Introducing Copilot</h1><p>Experience the AI assistant features.</p>';
                break;
            case 'product-grid':
                echo '<h1>Windows Products</h1><p>Check out the latest Windows offerings.</p>';
                break;
            case 'shop-deals':
                echo '<h1>Xbox Deals</h1><p>Grab the best deals on Xbox.</p>';
                break;
            case 'support':
                echo '<h1>Support Center</h1><p>Find help and resources.</p>';
                break;
            default:
                echo '<h1>Welcome</h1><p>Select a menu item to start exploring.</p>';
                break;
        }
        ?>
    </main>

</body>
</html>
