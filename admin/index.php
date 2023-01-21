<?php require_once '../inc/connection.php';
// if(!isset($_SESSION['admin'])){
//   header('Location: http://localhost/car/login.php');
// }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>admin panel</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="../js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="../js/jquery.min.js"></script>

</head>
<body>
<nav class="nav top-bar">
<h2 class="float-left">پنل مدیریت</h2>
</nav>

   <div class="container-fluid">
        <div class="row admin-panel">
            <div class="col-2">
                <div class="list-item">
                    <a href="index.php">پیشخوان</a>
                    <a href="../">مشاهده فروشگاه</a>
                    <a href="index.php?add-new-product">محصول جدید</a>
                    <a href="index.php?orders">سفارشات</a>
                    <a href="index.php?cats">دسته بندی ها</a>
                    <a href="index.php?comments">مدیریت نظرات</a>
                    <a href="index.php?admins">مدیران</a>
                    <a href="logout.php" onclick="window.alert('میخواهید خارج شوید؟')">خروج</a>
                </div>
            </div>
            <div class="col-10">

                <?php
                if(isset($_GET['add-new-product'])){
                  require_once 'add-new-products.php';
                }elseif(isset($_GET['orders'])){
                  require_once 'orders.php';
                }elseif(isset($_GET['cats'])){
                  require_once 'cats.php';
                }elseif (isset($_GET['comments'])) {
                  require_once 'comments.php';
                }elseif(isset($_GET['edit-product']) && isset($_GET['id']) && !empty($_GET['id'])){
                    require_once 'edit-product.php';
                }elseif(isset($_GET['admins'])) {
                  require_once 'admins.php';
                }else{
                  ?>
                  <!-- table list -->
  <div class="card mb-3">
      <div class="card-header">
          لیست محصولات
      </div>
  <div class="card-body">
      <div class="table-responsive">
          <table class="table float-right" style="direction: rtl">
              <thead>
              <tr>
                  <th>ردیف</th>
                  <th>تصویر</th>
                  <th>نام</th>
                  <td>موجودی</td>
                  <th>دسته بندی</th>
                  <th>قیمت</th>
                  <th>مشاهده</th>
                  <th>حذف</th>
                  <th>ویرایش</th>

              </tr>
              </thead>
              <tbody>
                <?php
                  $num =1;
                  $product_query = mysqli_query($connection , $query= "SELECT * FROM products" );
                  while($product_row = mysqli_fetch_array($product_query)):
                    $id = $product_row['cat_id'];
                    $cat_query = mysqli_query($connection , $query1 = "SELECT * FROM category WHERE cat_id = '$id'" );
                    $cat_row = mysqli_fetch_array($cat_query);

                ?>
              <tr>
                  <td><?php  echo $num++; ?></td>
                  <td><img src="../uploads/<?php echo $product_row['image']; ?>" width="100px" height="70px"></td>
                  <td><?php echo $product_row['title']; ?></td>
                  <td><?php echo $product_row['count']; ?></td>
                  <td><?php echo $cat_row['cat_name']; ?></td>
                  <td><?php echo $product_row['price']; ?></td>
                  <td><a href="../single.php?id=<?php echo $product_row['id']; ?>" class="btn btn-primary">مشاهده</a></td>
                  <td>
                      <a href="actions.php?delete_product=<?php echo $product_row['id']; ?>" class="btn btn-danger">حذف</a>
                  </td>
                  <td>
                      <a href="index.php?edit-product&id=<?php echo $product_row['id']; ?>" class="btn btn-warning">ویرایش</a>
                  </td>
              </tr>
            <?php endwhile; ?>
              </tbody>
          </table>
      </div>
  </div>
                      </div>
                  <?php

                }

                 ?>






            </div>
        </div>
   </div>



</body>
</html>
