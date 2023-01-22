<?php
require_once '../inc/connection.php';

if(isset($_GET['delete_product'])){
  $id = $_GET['delete_product'];
  $query = mysqli_query($connection , $query= "DELETE FROM products WHERE id='$id'");
  header($string= 'Location: index.php');
}elseif(isset($_GET['delete_admin'])){
  $id = $_GET['delete_admin'];
  $query = mysqli_query($connection , $query= "DELETE FROM admins WHERE id='$id'");
  header($string= 'Location: index.php?admins');
}elseif(isset($_GET['delete_cat'])){
  $id = $_GET['delete_cat'];
  $query = mysqli_query($connection , $query= "DELETE FROM category WHERE id='$id'");
  header($string= 'Location: index.php?cats');

}elseif(isset($_GET['delete_comment'])){
  $id = $_POST['delete_comment'];

  $que = mysqli_query($connection, "DELETE FROM comments WHERE id='$id'");

    echo 'کامنت مورد نظر حذف شد';
    header('Location: index.php?comments');



}elseif (isset($_GET['add-new-product']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
  $title = $_POST['title'];
  $image = $_FILES['image']['name'];
  $upload = '../images/'. basename($image);
  $desc = $_POST['desc'];
  $cat = $_POST['cat'];
  $price = $_POST['price'];
  $count = $_POST['count'];
  $query = mysqli_query($connection , "INSERT INTO products(title,image,description,cat_id,price,count) VALUES('$title','$image','$desc','$cat','$price','$count)");

  if($query){
    move_uploaded_file($_FILES['image']['tmp_name'] , $upload);
    header('Location: index.php');
  }else{
    die('we cant send product');
  }
}elseif (isset($_GET['add-cat']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
  $cat = $_POST['cat'];
  $query = mysqli_query($connection , "INSERT INTO category(cat_name) VALUES('$cat')");
  header('Location: index.php?cats');
}elseif (isset($_GET['edit-product']) && !empty($_GET['edit-product']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
  $id = $_GET['edit-product'];
  $title = $_POST['title'];
  $image = $_FILES['image']['name'];
  $upload = '../images/'.basename($image);
  $desc = $_POST['desc'];
  $cat = $_POST['cat'];
  $price = $_POST['price'];
  $count = $_POST['count'];
  $query = mysqli_query($connection , "UPDATE products SET title='$title' , image='$image', description='$desc', cat_name='$cat', price='$price' , count='$count' WHERE id = '$id'");

  if($query)
  {
    move_uploaded_file($_FILES['image']['tmp-name'], $upload);
    header('Location: index.php');
  }
}elseif((isset($_GET['admins'])) && !empty($_SERVER['REQUEST_METHOD'] == 'POST')) {
  $user = $_POST['username'];
  $pass = $_POST['password'];
  $email = $_POST['email'];
  $query3 = mysqli_query($connection , "INSERT INTO admins(username,password,email) VALUES('$user','$pass','$email') ");
  header('Location: index.php?admins');
}





?>
