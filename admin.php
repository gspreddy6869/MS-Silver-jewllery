
<html>

<head>
	<title>Home</title>
    <link rel="stylesheet" href="CSS/index.css">
</head>

<body>
 
    <div class="navi">
        <div class="navbar" style="display: flex; justify-content: space-between; align-items: center; background-color: BLACK; width: FULL;">
            <div class="left-img" style="display: flex; align-items: center; justify-content: center; height: 100%;">
                <a href="index.html">
                    <img src="images/logof.jpg" alt="logo" style="max-width: 100%; height: auto; width: auto; max-height: 60px;">
                </a>
            </div>
           
             
                 
              
               
            <div class="right">
                <ul>
                    <a href="index.html">
                        <li >HOME</li>
                    </a>
                    
                
                    <a href="index.php">
                        <li>PRODUCTS</li>
                    </a>
                    <a href="contact.html">
                        <li>CONTACT</li>
                    </a>
                    <a href="about.html">
                        <li>ABOUT US</li>
                    </a>
                    <a href="admin.html">
                        <li style="color:rgb(226, 183, 65)">ADMIN</li>
                    </a>

                </ul>
            </div>
            
        </div>
    </div>
    
    <div class="top-button">
        <a href="#">
            <div class="upward-top-button" title="Go To Top">
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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $type= $_POST['type'];

    // Handle file upload
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is an actual image or fake image
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        echo "<h1>File is not an image</h1>";
        $uploadOk = 0;
    }

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "<h1> Sorry, file already exists. </h1>";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["image"]["size"] > 500000) {
        echo "<h1>Sorry, your file is too large.</h1>";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "<h1>Sorry, only JPG, JPEG, PNG & GIF files are allowed.</h1>";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "<h1>Sorry, your file was not uploaded.</h1>";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            echo "<h2>The file " . htmlspecialchars(basename($_FILES["image"]["name"])) . " has been uploaded.</h2>";
            $image_url = $target_file;

            $sql = "INSERT INTO jewelry (name, description, price, image_url,Type) VALUES ('$name', '$description', '$price', '$image_url','$type')";

            if ($conn->query($sql) === TRUE) {
                echo "<h1>New record created successfully</h1>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "<h1>Sorry, there was an error uploading your file</h1>.";
        }
    }
}

$conn->close();
?>

    <CENTER>
    <form action="admin.php" method="post" enctype="multipart/form-data" style="margin-top:10% ;color: black; font-size: large; font-weight: 100;">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br>
        <label for="description">Description:</label><br>
        <textarea id="description" name="description" required></textarea><br>
        <label for="price">Price:</label><br>
        <input type="text" id="price" name="price" required><br>
           <label for="price">Price:</label><br>
        <input type="text" id="price" name="price" required><br>
        <label for="type">Type:</label><br>
        <input type="text" id="type" name="type" required><br>
        <label for="image">Image:</label><br>
        <input type="file" id="image" name="image" required><br><br>
        <input type="submit" value="Upload">
    </form>
</CENTER>

    
<footer>
<div class="copy-right">
    <div class="copy-right-txt">
        <p>Copyright &#169; All Rights Reserved</p>
    </div>
</div>
</footer>
</html>