<!DOCTYPE html>
<html lang="en">
<head>
    <!--comments -->
    <meta charset="UTF-8">
    <title>Products</title>
    <link rel="stylesheet" href="CSS/index.css">
    <style>
        body {
            margin: 0;
            
        }
        .background {
            position: fixed; /* Changed from absolute to fixed */
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background-image: url('images/background.jpg');
            background-size: cover;
            background-position: center;
            z-index: -1; /* Ensure the background is behind other content */
        }
        .back-overlay {
            position: absolute;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5); /* Example overlay */
            top: 0;
            left: 0;
        }
        .navi {
            background: #333;
            color: white;
            padding: 10px 0;
            position: relative;
            z-index: 1; /* Ensure the navbar is above the background */
        }
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
        }
        .left-img img, .right-img img {
            height: 50px;
        }
        .right ul {
            list-style: none;
            display: flex;
            gap: 20px;
        }
        .right ul a {
            text-decoration: none;
            color: white;
        }
        .right ul a:hover {
            color: #e2b741;
        }
        .top-button {
            position: fixed;
            bottom: 20px;
            right: 20px;
        }
        .upward-top-button {
            background: #333;
            color: white;
            padding: 10px;
            border-radius: 50%;
            text-align: center;
        }
        .upward-top-button p {
            margin: 0;
        }
        #cont {
            margin-top: 20px;
            margin-left: 10%;
            width: 80%;
            background: url('https://images.unsplash.com/photo-1565120182-f4b11d8dfc1d') no-repeat center center;
            background-size: cover;
            position: relative;
            z-index: 1;
            padding: 20px;
            border-radius: 8px; /* Rounded corners for a modern look */
            color: #333; /* Dark text color for readability */
        }

        /* Overlay for better readability */
        #cont::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.3); /* Dark overlay with 30% opacity */
            z-index: -1;
            border-radius: 8px; /* Match rounded corners */
        }
        
        .items {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center; /* Center the items horizontally */
        }
        .item {
            background: white;
            border: 1px solid #ccc;
            margin: 10px;
            padding: 10px;
            width: calc(20% - 40px); /* Adjust width to fit 5 items per row */
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            align-items: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Add shadow */
            border-radius: 8px; /* Rounded corners */
        }
        .item img {
            width: 100%;
            height: auto;
            max-height: 200px; /* Set a maximum height for the images */
            object-fit: cover; /* Ensure the images cover the area */
            cursor: pointer; /* Change cursor to pointer on hover */
        }
        .item h2, .item p {
            text-align: center;
        }
        .lightbox {
            display: none; /* Hide the lightbox by default */
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            justify-content: center;
            align-items: center;
            z-index: 10;
            flex-direction: column;
        }
        .lightbox img {
            max-width: 90%;
            max-height: 90%;
            object-fit: contain;
        }
        .lightbox:target {
            display: flex; /* Show the lightbox when targeted */
        }
        .lightbox-close {
            position: absolute;
            top: 20px;
            right: 20px;
            color: white;
            font-size: 30px;
            text-decoration: none;
        }

        /* Responsive Design */
        @media (max-width: 1200px) {
            .item {
                width: calc(25% - 40px); /* 4 items per row */
            }
        }
        @media (max-width: 992px) {
            .item {
                width: calc(33.33% - 40px); /* 3 items per row */
            }
        }
        @media (max-width: 768px) {
            .item {
                width: calc(50% - 40px); /* 2 items per row */
            }
        }
        @media (max-width: 576px) {
            .item {
                width: calc(100% - 40px); /* 1 item per row */
            }
            .navbar {
                flex-direction: column;
            }
            .right ul {
                flex-direction: column;
                gap: 10px;
            }
        }
    </style>
</head>
<body>
    <div class="background">
        <div class="back-overlay"></div>
    </div>
    <div class="navi">
    <div class="navbar" style="display: flex; justify-content: space-between; align-items: center; background-color: BLACK; width: FULL;">
            <div class="left-img" style="display: flex; align-items: center; justify-content: center; height: 100%;">
                <a href="index.html">
                    <img src="images/logof.jpg" alt="logo" style="max-width: 100%; height: auto; width: auto; max-height: 60px;">
                </a>
            </div><div>
         <pre>                                                                              </pre>  
    </div>            <div class="right"  >
                <ul>
                    <a href="index.html">
                        <li>HOME</li>
                    </a>
                    <a href="products.html">
                        <li style="color:rgb(226, 183, 65)">PRODUCTS</li>
                    </a>
                    <a href="contact.html">
                        <li>CONTACT</li>
                    </a>
                    <a href="about.html">
                        <li>ABOUT US</li>
                    </a>
                    <a href="admin.html">
                        <li>ADMIN</li>
                    </a>
                </ul>
            </div>
        </div>
    </div>
    <div class="top-button">
        <a href="#">
            <div class="upward-top-button">
                <p>^</p>
            </div>
        </a>
    </div>
    
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "jewelry_store";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    $sql = "SELECT id, name, description, price, image_url FROM jewelry";
    $result = $conn->query($sql);

    $conn->close();
    ?>

    <div id="cont">
        <h1 style="color:white;">All Products</h1>
        <div class="items">
            <?php if ($result->num_rows > 0): ?>
                <?php while($row = $result->fetch_assoc()): ?>
                    <div class="item">
                        <a href="#img_<?php echo $row['id']; ?>">
                            <img src="<?php echo $row['image_url']; ?>" alt="<?php echo $row['name']; ?>">
                        </a>
                        <h2><?php echo $row['name']; ?></h2>
                        <p><?php echo $row['description']; ?></p>
                        <p>Price:  ₹  <?php echo $row['price']; ?></p>
                        <div id="img_<?php echo $row['id']; ?>" class="lightbox">
                            <a href="#" class="lightbox-close">&times;</a>
                            <img src="<?php echo $row['image_url']; ?>" alt="<?php echo $row['name']; ?>">
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <p>No items found</p>
            <?php endif; ?>
        </div>
    </div>
</body>
<footer>
<div class="copy-right">
    <div class="copy-right-txt">
        <p>Copyright &#169; All Rights Reserved</p>
    </div>
</div>
</footer>
</html>
