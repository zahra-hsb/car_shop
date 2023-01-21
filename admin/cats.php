<div class="card mb-3">
      <div class="card-header">
      افزودن دسته بندی
      </div>
    <div class="card-body">
      <form class="" action="actions.php?add-cat" method="post">
        <input type="text" name="cat" value="" placeholder="دسته بندی را وارد کنید" style="border-radius: 5px; width: 200px; height: 30px;
        outline: 1px; background-color: inherit; border: 2px solid #EDEFEE;">
        <input type="submit" name="" value="افزودن" style="background-color: #dc3545; color: white;border-radius: 5px; border: none; width: 55px; height: 30px;
        padding-left: 5px; padding-right: 10px; ">
      </form>
    </div>
</div>
<div class="card mb-3">
    <div class="card-header">
      دسته بندی ها
    </div>
<div class="card-body">
    <div class="table-responsive">
        <table class="table float-right" style="direction: rtl">
            <thead>
            <tr>
                <th>ردیف</th>
                <th>نام</th>
                <th>حذف</th>

            </tr>
            </thead>
            <tbody>
              <?php
                $num = 1;
                $cat_query=mysqli_query($connection, $query= "SELECT * FROM category");
                while ($cat_row = mysqli_fetch_array($cat_query)):
               ?>
            <tr>
                <td><?php echo $num++; ?></td>
                <td><?php echo $cat_row['cat_name']; ?></td>

                <td>
                    <a href="actions.php?delete_cat=<?php echo $cat_row['cat_id']; ?>" class="btn btn-danger">حذف</a>
                </td>

            </tr>
          <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</div>
                    </div>
