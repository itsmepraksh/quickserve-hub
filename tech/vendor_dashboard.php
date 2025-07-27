<?php
session_start();

if (!isset($_SESSION['uname'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Vendor Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/dashboard_vendor.css">
</head>
<body>

  <header class="top-bar">
    <div class="navbar">
      <h1>Welcome, <?php echo htmlspecialchars($_SESSION['uname']); ?></h1>
      <a href="logout.php" class="logout-btn">Logout</a>
    </div>
  </header>

  <div class="dashboard">
    <aside class="sidebar">
      <ul>
        <li><a href="#" onclick="loadPage('browse_suppliers')">🏬 Browse Suppliers</a></li>
        <li><a href="#" onclick="loadPage('place_order')">📝 Place Order</a></li>
        <li><a href="#" onclick="loadPage('my_orders')">🛒 My Orders</a></li>
        <li><a href="#" onclick="loadPage('deals_nearby')">📍 Nearby Deals</a></li>
        <li><a href="#" onclick="loadPage('messages')">💬 Messages</a></li>
        <li><a href="#" onclick="loadPage('settings')">⚙️ Settings</a></li>
      </ul>
    </aside>

    <main class="main-content" id="main-content">
      <h2>Vendor Summary</h2>
      <div class="cards">
        <div class="card">
          <h3>📦 Orders Placed</h3>
          <p>0 Orders</p>
        </div>
        <div class="card">
          <h3>🕒 Pending Orders</h3>
          <p>0 Ongoing</p>
        </div>
        <div class="card">
          <h3>✅ Delivered</h3>
          <p>0 Completed</p>
        </div>
      </div>
    </main>
  </div>

  <footer>
    <p>© 2025 QuickServe Hub. All rights reserved.</p>
  </footer>

  <script>
    function loadPage(page) {
      fetch('pages/' + page + '.php')
        .then(res => res.text())
        .then(html => {
          document.getElementById('main-content').innerHTML = html;
        })
        .catch(() => {
          document.getElementById('main-content').innerHTML = "<p style='color:red;'>Error loading page.</p>";
        });
    }
  </script>

</body>
</html>
