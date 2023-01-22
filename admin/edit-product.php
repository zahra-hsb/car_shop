<?php
$id = $_GET['id'];
$getproduct = mysqli_query($connection , $query="SELECT * FROM products WHERE id='$id'");
$productrow = mysqli_fetch_array($getproduct);
 ?>


<div class="card mb-3">
    <div class="card-header">
        ویرایش محصول
    </div>
<div class="card-body">
        <!-- form area -->
<form action="actions.php?edit-product=<?php echo $id; ?>" method="POST" enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-8">
            <div class="form-group">
                <input type="text" name="title" class="form-control" value="<?php echo $productrow['title']; ?> " placeholder="عنوان محصول">
            </div>
            <div class="form-group">
                <textarea name="desc" cols="30" rows="10" class="form-control" placeholder="توضیحات محصول"><?php echo $productrow['description']; ?></textarea>
            </div>
            <div class="form-group row">
                <div class="col-xs-3">
                    <input type="number" name="price" class="form-control" style="margin-left: 14px;" size="60" value="<?php echo $productrow['price']; ?>" placeholder="قیمت">
                    <input type="number" name="count" class="form-control" style="margin-left: 14px;" size="30" value="<?php echo $productrow['count']; ?>" placeholder="موجودی">

                </div>
            </div>
        </div><!--Main Content-->
        <aside class="col-md-4">
            <div class="form-group">
                <input type="reset" class="btn btn-warning btn-lg" value="پاک کردن">
                <input type="submit" class="btn btn-primary btn-lg" value="ویرایش">
            </div>
            <div class="form-group">
                <input type="hidden" name="cat_id" value="<?php echo $productrow['cat_id']; ?>">
                <select name="cat" class="form-control">
                  <?php
                  $query = mysqli_query($connection , $query="SELECT * FROM category");
                   while($row = mysqli_fetch_array($query)): ?>
                   <?php
                      if($row['cat_name'] == $productrow['cat_name']):

                    ?>
                    <option selected value="<?php echo $row['cat_name']; ?>"><?php echo $row['cat_name']; ?></option>
                    <?php else: ?>
                    <option value="<?php echo $row['cat_name']; ?>"><?php echo $row['cat_name']; ?></option>

                  <?php endif; ?>
                  <?php endwhile; ?>
                </select>
            </div>
            <br>
            <img src="../uploads/<?php echo $productrow['image']; ?>" width="300px" height="300px" >
            <br>
            <div class="form-group">
                <input type="file" name="image" class="form-control-file">
            </div>
        </aside><!--SIDEBAR-->
    </div>
</form>
