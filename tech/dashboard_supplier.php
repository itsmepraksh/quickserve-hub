

<?php
session_start();

if (!isset($_SESSION['uname']) || $_SESSION['role'] !== 'supplier') {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Supplier Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/dashboard_supplier.css">
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
        <li><a href="#" onclick="loadPage('view_orders')">📥 View Orders</a></li>
        <li><a href="#" onclick="loadPage('inventory')">📦 Manage Inventory</a></li>
        <li><a href="#" onclick="loadPage('messages')">💬 Messages</a></li>
        <li><a href="#" onclick="loadPage('settings')">⚙️ Settings</a></li>
      </ul>
    </aside>

    <main class="main-content" id="main-content">
      <h2>Supplier Summary</h2>
      <div class="cards">
        <div class="card">
          <h3>📥 New Orders</h3>
          <p>0 Requests</p>
        </div>
        <div class="card">
          <h3>📦 Stock Items</h3>
          <p>0 Available</p>
        </div>
        <div class="card">
          <h3>✅ Fulfilled</h3>
          <p>0 Delivered</p>
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
