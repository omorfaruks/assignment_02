<?php
	include_once "./functions.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Asraful Haque</title>
	<!-- ALL CSS FILES  -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>

	<div class="contianer">
		<div class="row">
			<?php foreach($productIndex as $productIndexs) : ?>
			<div class="col-md-3 my-1">
				<div class="card">
					<img style="height:200px; object-fit: cover;" src="<?php echo $productIndexs['productImage']; ?>" alt="" class="card-img"> 
					<div class="card-body">
						<h4><?php echo $productIndexs['productName']; ?> </h4>
						<span><?php echo $productIndexs['productPrice']; ?></span>
		
					</div>
				</div>
			</div>
			<?php endforeach ?>
		</div>
	</div>

	
	
	

</body>
</html>