<style media="screen">
  .form-control{
    border-radius: 5px;
    width: 250px;
    height: 40px;
  }
</style>
<div class="card mb-3">
  <div class="card-header">
    افزودن مدیر
  </div>
  <div class="card-body">
    <form class="" action="actions.php?admins" method="post">
      <input type="password" name="password" value="" placeholder="گذرواژه" class="form-control" style=" margin-left: 20%">
      <input type="text" name="username" value="" placeholder="نام کاربری" class="form-control" style=" position: absolute; top: 69px;">
      <input type="email" name="email" value="" placeholder="ایمیل" class="form-control" style=" position: absolute; top: 69px; left: 40%">
      <input type="submit" name="" class="btn btn-danger" value="افزودن" style="position: absolute; top: 69px; left: 60%">
    </form>
  </div>
</div>
<div class="card-body">
    <div class="table-responsive">
        <table class="table float-right" style="direction: rtl">
            <thead>
            <tr>
                <th>ردیف</th>
                <th>نام کاربری</th>
                <th>ایمیل</th>

            </tr>
            </thead>
            <tbody>
              <?php
                $num = 1;
                $admin_query=mysqli_query($connection, $query= "SELECT * FROM admins");
                while ($admin_row = mysqli_fetch_array($admin_query)):
               ?>
            <tr>
                <td><?php echo $num++; ?></td>
                <td><?php echo $admin_row['username']; ?></td>
                <td><?php echo $admin_row['email']; ?></td>
                <td>
                    <a href="actions.php?delete_admin=<?php echo $admin_row['id']; ?>" class="btn btn-danger">حذف</a>
                </td>

            </tr>
          <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</div>
                    </div>
