<?php

    $server="localhost";
    $user="id19327753_kickzamazing1";
    $pass="57]P+CI9~+2dOvNi";
    $dbname="id19327753_kickzamazing";
    $conn = mysqli_connect($server,$user,$pass,$dbname);

   if(isset($_POST['add_product'])){

        $name = $_POST['name'];
        $price= $_POST['price'];
        $image= $_FILES['image']['name'];
        $product_image_tmp_name= $_FILES['image']['tmp_name'];
        $product_image_folder='upload/'.$image;
    
        if(empty($name) || empty($price) || empty($image)){
            echo '<script>alert("Please Fill Out Form!");</script>';
        }else{
            $insert = "INSERT INTO product (name, price, image) VALUES ('$name', '$price', '$image')";
            $upload = mysqli_query($conn,$insert);
            if($upload){
                move_uploaded_file ($product_image_tmp_name,$product_image_folder);
                $message[] = 'new product added successfully';
            }else{
               $message[] = 'could not add the product';
            }
        }
     
     };
     
     if(isset($_GET['delete'])){
        $id = $_GET['delete'];
        mysqli_query($conn, "DELETE FROM product WHERE id = $id");
        header('location:upload.php');
     };
     
     ?>

<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Kickzamazing Admin Page</title>
        <link rel ="stylesheet" href="uploaddes.css">
        <link rel ="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        
    </head>
    <body>
        <section>
        <nav>
            <div class="logo">
                <a href="index.php" class="logo"><img src="upload/logo.png" alt=""></a>
            </div>
        <h1> Admin Page </h1>
            <ul>
                <li><a href="admin.php">Registered Users</a></li>
                <li><a href="upload.php">Update Product Image</a></li>
            </ul>

            <div class="icons">
            <a href="#User"></a><i class="fa-solid fa-user"></i>
              <a href="login.php"><i class="fa-solid fa-right-from-bracket"></i></a>
            </div>
        </nav>
		
        <h3>ADD NEW PRODUCT</h3>
		

			<div class="table_section">
				<center>
					
					<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
                                           
                                            <input type="text" placeholder="Enter Product Name" name="name" class="box">
                                            <input type="number" placeholder="Enter Product Price" name="price" class="box">
                                            <input type="file" accept="image/png, image/jpeg, image/jpg" name="image" class="box">
                                            <input type="submit" class="btn" name="add_product" value="Add Product">
                                        </form>
				</center>
			</div>
			<?php
                $select = mysqli_query($conn, "SELECT * FROM product");
            ?>

        <h3>UPLOADED PRODUCTS</h3>
        <style>
table, th, td, tr {
  border: 1px solid;
  border-style: solid;
  border-color: red;
  box-shadow: 0 0 8px rgb(255 0 0 / 80%);
    border-radius: 5px;
}
</style>
     <center>
      <table style="width:70%">
         <tr>
            <th>Product Image</th>
            <th>Product Name</th>
            <th>Product Price</th>
            <th>Action</th>
         </tr>
      
         <?php while($row = mysqli_fetch_assoc($select)){ ?>
         <tr>
        <td><img src="upload/<?php echo $row['image']; ?>" height="100" alt=""></td> 
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['price']; ?></td>
            <td>
        
              <center> <a href="upload.php?delete=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-trash"></i></a></center>
            </td>
         </tr>
      <?php } ?>
      </table>
   
         </center>
        
        
                 
	</body>
<script>
    function menuToggle(){
        const toggleMenu = document.querySelector(".menu");
        toggleMenu.classList.toggle("active")
    }
    function submenuToggle(){
        const toggleMenu = document.querySelector(".submenu");
        toggleMenu.classList.toggle("active")
    }
</script>
<script>
            $(document).ready(function(){
        $("#Search").on("keyup",function(){
            var value =$(this).val().toLowerCase();
            $("#RecTable tr").filter(function(){
                $(this).toggle($(this).text().toLowerCase().indexOf(value)> -1)
            });
        });
    });
</script>
		
        </body>
</html>