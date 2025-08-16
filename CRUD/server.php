<table cellpadding="7px", style="width:80%" >
            <thead>
            <th>Id</th>
            <th>Temperature </th>
            <th>Humidity </th>
            <th>Time and Date </th>
            </thead>
            <?php
            include 'config.php';
            $sql = "SELECT * FROM `myweather` ORDER BY id DESC LIMIT 5";
            $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");
            while($row = mysqli_fetch_assoc($result)){
              $id   = $row['id'];
              $temp = $row['temp'];
              $humi = $row['humi'];
              $time = $row['time'];
              ?>
              <tbody>
                <tr>
                  <td align="center"><?php echo $id;  ?></td>
                  <td align="center"><?php echo $temp; ?></td>
                  <td align="center"><?php echo $humi; ?></td>
                  <td align="center"><?php echo $time; ?></td>
                </tr>
              </tbody>
              <?php } 
              mysqli_close($conn);
              ?>
           </table>