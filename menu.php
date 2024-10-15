<?php

session_start();
// Assuming you have a connection to your database
include('db_connection.php');

// Array of menu items with prices
$menu = [
    'Food' => [
        ['name' => 'Nasi Goreng Ayam Hatyai', 'img' => 'img/nasigorengayamhatyai.jpg', 'price' => 8.50],
        ['name' => 'Nasi Goreng Cina Ori', 'img' => 'img/nasigorengcinaori.jpg', 'price' => 7.00],
        ['name' => 'Nasi Goreng Kampung', 'img' => 'img/nasigorengkampung.jpg', 'price' => 6.50],
        ['name' => 'Nasi Goreng Nenas', 'img' => 'img/nasigorengnenas.jpg', 'price' => 9.00],
        ['name' => 'Nasi Goreng Thai Udang', 'img' => 'img/nasigorengthaiudang.jpg', 'price' => 10.00]
    ],
    'Drink' => [
        ['name' => 'Milo', 'img' => 'img/milo.jpg', 'price' => 2.50],
        ['name' => 'Teh', 'img' => 'img/teh.jpg', 'price' => 1.80],
        ['name' => 'Kopi', 'img' => 'img/kopi.jpg', 'price' => 2.00],
        ['name' => 'Oren', 'img' => 'img/oren.jpg', 'price' => 2.00],
        ['name' => 'Tembikai', 'img' => 'img/tembikai.jpg', 'price' => 2.50]
    ],
    'Set Dinner' => [
        ['name' => 'Set Dinner 1', 'img' => 'img/setdinner1.jpg', 'price' => 12.00],
        ['name' => 'Set Dinner 2', 'img' => 'img/setdinner2.jpg', 'price' => 15.00]
    ]
];

// Function to add item to session cart
if (isset($_POST['add_item'])) {
    $item = $_POST['item'];
    $price = $_POST['price'];
    $_SESSION['order'][] = ['name' => $item, 'price' => $price]; // Add item and price to session order
    echo "<script>alert('$item added to order!');</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .navbar {
            display: flex;
            justify-content: space-around;
            background-color: #333;
            padding: 10px;
        }
        .navbar a {
            color: white;
            text-decoration: none;
            font-size: 16px;
            cursor: pointer;
        }
        .menu-section {
            display: none; /* Hidden by default */
            padding: 20px;
        }
        .menu-item {
            margin-bottom: 20px;
            display: flex;
            align-items: center;
        }
        .menu-item img {
            width: 100px;
            height: 100px;
            margin-right: 10px;
        }
        .menu-item button {
            padding: 5px 10px;
            background-color: green;
            color: white;
            border: none;
        }
        .view-order, .back-home {
            margin: 20px 0;
            padding: 10px;
            background-color: blue;
            color: white;
            text-align: center;
        }
    </style>
    <script>
        function showSection(sectionId) {
            // Hide all sections
            document.getElementById('food').style.display = 'none';
            document.getElementById('drink').style.display = 'none';
            document.getElementById('setdinner').style.display = 'none';

            // Show the selected section
            document.getElementById(sectionId).style.display = 'block';
        }

        // Show the food section by default on page load
        window.onload = function() {
            showSection('food');
        };
    </script>
</head>
<body>

<div class="navbar">
    <a onclick="showSection('food')">Food</a>
    <a onclick="showSection('drink')">Drink</a>
    <a onclick="showSection('setdinner')">Set Dinner</a>
</div>

<div class="menu-section" id="food">
    <h2>Food</h2>
    <?php foreach ($menu['Food'] as $item): ?>
    <div class="menu-item">
        <img src="<?= $item['img'] ?>" alt="<?= $item['name'] ?>">
        <div>
            <strong><?= $item['name'] ?></strong> - RM<?= number_format($item['price'], 2) ?>
            <form method="post" style="display:inline;">
                <input type="hidden" name="item" value="<?= $item['name'] ?>">
                <input type="hidden" name="price" value="<?= $item['price'] ?>">
                <button type="submit" name="add_item">Add</button>
            </form>
        </div>
    </div>
    <?php endforeach; ?>
</div>

<div class="menu-section" id="drink">
    <h2>Drink</h2>
    <?php foreach ($menu['Drink'] as $item): ?>
    <div class="menu-item">
        <img src="<?= $item['img'] ?>" alt="<?= $item['name'] ?>">
        <div>
            <strong><?= $item['name'] ?></strong> - RM<?= number_format($item['price'], 2) ?>
            <form method="post" style="display:inline;">
                <input type="hidden" name="item" value="<?= $item['name'] ?>">
                <input type="hidden" name="price" value="<?= $item['price'] ?>">
                <button type="submit" name="add_item">Add</button>
            </form>
        </div>
    </div>
    <?php endforeach; ?>
</div>

<div class="menu-section" id="setdinner">
    <h2>Set Dinner</h2>
    <?php foreach ($menu['Set Dinner'] as $item): ?>
    <div class="menu-item">
        <img src="<?= $item['img'] ?>" alt="<?= $item['name'] ?>">
        <div>
            <strong><?= $item['name'] ?></strong> - RM<?= number_format($item['price'], 2) ?>
            <form method="post" style="display:inline;">
                <input type="hidden" name="item" value="<?= $item['name'] ?>">
                <input type="hidden" name="price" value="<?= $item['price'] ?>">
                <button type="submit" name="add_item">Add</button>
            </form>
        </div>
    </div>
    <?php endforeach; ?>
</div>

<div class="view-order">
    <a href="vieworder.php" style="color:white; text-decoration:none;">View Order</a>
</div>

<div class="back-home">
    <a href="index.php" style="color:white; text-decoration:none;">Back to Home</a>
</div>

</body>
</html>
