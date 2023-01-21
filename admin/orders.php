<div class="card mb-3">
    <div class="card-header">
        سفارشات
    </div>
<div class="card-body">
    <div class="table-responsive">
        <table class="table float-right" style="direction: rtl">
            <thead>
            <tr>
                <th>ردیف</th>
                <th>نام</th>
                <td>تعداد</td>
                <th>قیمت</th>
                <th>شماره تراکنش</th>
                <th>وضعیت</th>



            </tr>
            </thead>
            <tbody>

              <?php
                $orders = mysqli_query($connection, "SELECT * FROM orders");
                $n = 1;
                while ($row = mysqli_fetch_array($orders)) :
               ?>
            <tr>
                <td><?php echo $n++; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['count']; ?></td>
                <td><?php echo $row['price']; ?></td>
                <td><?php echo $row['authority']; ?></td>
                <td><?php echo $row['status']; ?></td>
                <td>

                </td>

            </tr>
          <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</div>
                    </div>
