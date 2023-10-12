<?php
include 'config.php';


	if(isset($_POST['search']))
	{
		$valueToSearch = $_POST['valueToSearch'];
		$query = "SELECT * FROM `register` WHERE CONCAT (`id`, `username`, `password`, `email`) LIKE '%".$valueToSearch."%'";
		$search_result = filterTable($query);
		$result = mysqli_query($conn, $query);
        $queryResult = mysqli_num_rows($result);

        if($queryResult > 0){

        }else{
            echo '<script>alert("No User Found!");</script>';
        }
    }

	else{
		$query = "SELECT * FROM `register`";
		$search_result = filterTable($query);
	}

	function filterTable($query)
	{
		$conn=mysqli_connect("localhost", "id19327753_kickzamazing1", "57]P+CI9~+2dOvNi", "id19327753_kickzamazing");
		$filter_Result = mysqli_query($conn, $query);
		return $filter_Result;
	}

?>


<html>
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title> Kickzamazing Admin Page</title>
        <link rel ="stylesheet" href="admindes.css">
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
        <script>

</script>
</head>
            <div class="table">
					<div class="table_header">
                    
                    <form action="" method="POST">
						<div>
                        <input type="text" name="valueToSearch" placeholder="Search User">
                        <input type ="submit" name="search" value="Search">

						</div>
					</div>
					<div class="table_section">
						<table>
							<thead>
								<tr>
									<th>ID</th>
									<th>Username</th>
									<th>Password</th>
									<th>Email</th>
									<th>Action</th>
								</tr>
								<?php while($row = mysqli_fetch_array($search_result)):?>
									
									<tr>
										<td><?php echo $row['id'];?></td>
										<td><?php echo $row['username'];?></td>
										<td><?php echo $row['password'];?></td>
										<td><?php echo $row['email'];?></td>

								<td>
									<form action="delete.php" method="POST">
                        				<input type="hidden" name="id" value="<?php echo $row['id'];?>">
                        				<input type="submit" name="delete" class="btn btn-danger" value="Delete">
                    				</form>
								</td>
									</tr>


								
								<?php endwhile;?>
							</thead>
                        </table>
                    </div>
					<div class="pagination">
						<div><i class="fa fa-arrow-left" aria-hidden="true"></i></div>
						<div><i class="fa fa-arrow-right" aria-hidden="true"></i></div>
                        <button onclick="window.print()" class="dis">Print</button>
					</div>

				</div>            
                 
</body>
</html>


