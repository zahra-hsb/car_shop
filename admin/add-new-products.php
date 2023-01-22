<div class="card mb-3">
    <div class="card-header">
        افزودن محصول جدید
    </div>
<div class="card-body">
        <!-- form area -->
<form action="actions.php?add-new-product" method="POST" enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-8">
            <div class="form-group">
                <input type="text" name="title" class="form-control" placeholder="عنوان محصول">
            </div>
            <div class="form-group">
                <textarea name="desc" cols="30" rows="10" class="form-control" placeholder="توضیحات محصول"></textarea>
            </div>
            <div class="form-group row">
                <div class="col-xs-3">
                    <input type="number" name="price" class="form-control" style="margin-left: 14px;" size="60" placeholder="قیمت">
                    <input type="number" name="count" class="form-control" style="margin-left: 14px;" size="30" placeholder="موجودی">
                </div>
            </div>
        </div><!--Main Content-->
        <aside class="col-md-4">
            <div class="form-group">
                <input type="reset" class="btn btn-warning btn-lg" value="پاک کردن">
                <input type="submit" class="btn btn-primary btn-lg" value="افزودن">
            </div>
            <div class="form-group">
                <select name="cat" class="form-control">
                  <?php
                  $query = mysqli_query($connection , $query="SELECT * FROM category");
                   while($row = mysqli_fetch_array($query)): ?>
                    <option value="<?php echo $row['id'];  ?>"><?php echo $row['cat_name']; ?></option>
                  <?php endwhile; ?>
                </select>
            </div>
            <div class="form-group">
                <input type="file" name="image" class="form-control-file" value="انتخاب فایل" style="color: black; background-color: orange;" >
            </div>
        </aside><!--SIDEBAR-->
    </div>
</form>
