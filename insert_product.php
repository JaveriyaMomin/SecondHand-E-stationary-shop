<?php
include("includes/db.php");
?>

<!DOCTYPE>
<!DOCTYPE html>
<html>
<head>
	
	<title>Insert Product</title>
	  <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>tinymce.init({selector:'textarea'});</script>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="styles/style.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
</head>
<body>
<div class="row"> <!--breadcrumb row start-->
	<div class="col-lg-12">
		<div class="breadcrumb">
			<li class="active">
				<l class="fa fa-dashboard"></l>
				Dashboard / Insert Product	
			    </li>
		</div>	
	</div>	
</div><!--breadcrumb row end-->
<div class="row">
	<div class="col-md-3">
		
	</div>
	<div class="col-lg-6">
		<div class="panel panel-default">
			    <div class="panel-heading"> <!--panel-heading start-->
				    <h3 class="panel title">
					    <i class="fa a-money fa-w"></i> Insert Product
				    </h3>
				
			    </div> <!--panel-heading end-->
			    <div class="panel-body">
                <form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
				    <div class="form-group">
					     <label class="col-md-3 control-label">Product Title</label>
			    <input type="text" name="product_title" class="form-control" required="">
				    </div>

                    <div class="form-group">
					     <label class="col-md-3 control-label">Product Category</label>
			            <select name="product_cat" class="form-control">
				            <option>Select a Product Category</option>
				
			            </select>
				    </div>

	                <div class="form-group">
					     <label class="col-md-3 control-label">Department</label>
			           <select name="Department" class="form-control">
				            <option>
				            	Select Department
				            </option>
				           
				
			           </select>
				    </div>
	                <div class="form-group">
					     <label class="col-md-3 control-label">Product Image 1</label>
			             <input type="file" name="product_img1" class="form-control" required="">
				    </div>

	                <div class="form-group">
					     <label class="col-md-3 control-label">Product Image 2</label>
			             <input type="file" name="product_img2" class="form-control" required="">
				    </div>

	                <div class="form-group">
					    <label class="col-md-3 control-label">Product Image 3</label>
			            <input type="file" name="product_img3" class="form-control" required="">
				    </div>

	                <div class="form-group">
					     <label class="col-md-3 control-label">Product Price</label>
			             <input type="text" name="product_price" class="form-control" required="">
				    </div>

	                <div class="form-group">
					     <label class="col-md-3 control-label">Product keyword</label>
			             <input type="text" name="product_keywords" class="form-control" required="">
				    </div>

				    <div class="form-group">
					     <label class="col-md-3 control-label">Product Description</label>
			             <textarea name="product_desc" class="form-control" rows="6" cols="19"></textarea>
				    </div>

				    <div class="form-group">
		                 <input type="submit" name="submit" value="Insert Product" class="btn btn-primary form-control">
				    </div>

                </form>
		    </div>
		</div>
	</div>
	<div class="col-lg-3">
		
	</div>
</div>



<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>
</html>

<?php
if (isset($_post['submit'])) {
	$product_title=$_POST['product_title'];
	$product_cat=$_POST['product_cat'];
    $product_department=$_POST['department'];
    $product_price=$_POST['product_price'];
    $product_desc=$_POST['product_desc'];
    $product_keywords=$_POST['product_keywords'];

    $prduct_img1=$_FILES['product_img1']['name'];
    $prduct_img2=$_FILES['product_img2']['name'];
    $prduct_img3=$_FILES['product_img3']['name'];

    $temp_name1=$_FILES['product_img1']['tmp_name'];
    $temp_name2=$_FILES['product_img2']['tmp_name'];
    $temp_name3=$_FILES['product_img3']['tmp_name'];

    move_uploaded_file($temp_name1, "product_images/$prduct_img1");
    move_uploaded_file($temp_name2, "product_images/$prduct_img2");
    move_uploaded_file($temp_name3, "product_images/$prduct_img3");
    
   $insert_product="insert into products(p_cat_id,cat_id,date,product_title,product_img1,prduct_img2,prduct_img3,product_price,product_desc,product_keywords) values('$product_cat','product_department',NOW(),'$product_title','$prduct_img1','$prduct_img2','$prduct_img3','$product_price','$product_desc','$product_keywords')";

   $run_product=mysqli_query($con,$insert_product);

   if($run_product){
   	   echo "<script>alert('Product Inserted Successfully')</script>";
   	   echo "<script>window.open('insert_product.php')</script>";
   }
    
}

?>