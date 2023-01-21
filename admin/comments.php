<?php require_once '../inc/config.php'; ?>
<div class="card mb-3">
    <div class="card-header">
        نظرات
    </div>
<div class="card-body">
    <div class="table-responsive">
        <table class="table float-right" style="direction: rtl">
            <thead>
            <tr>
                <th>ردیف</th>
                <th>نام</th>
                <th>ایمیل</th>
                <th>محتوا</th>
            
                <th>حذف</th>


            </tr>
            </thead>
            <tbody>
              <?php
              $comment_query = mysqli_query($connection, "SELECT * FROM comments");
              $num =1;
              while($sql=mysqli_fetch_array($comment_query)):

              ?>
            <tr>
                <td><?php echo $num++; ?></td>
                <td><?php echo $sql['name']; ?></td>
                <td><?php echo $sql['email']; ?></td>
                <td><?php echo $sql['comment']; ?></td>

                <td>
                    <a href="actions.php?delete_comment&id=<?php echo $sql['id']; ?>" class="btn btn-danger">حذف</a>
                </td>

            </tr>
          <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</div>
                    </div>



                            </table>
                        </div>
                    </div>
                                        </div>
