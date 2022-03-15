<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>ranking</title>
  
  
  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  <div class="container">
	<table>
		<thead>
			<tr>
				<th>NAME</th>
				<th>OTHER NAME</th>
				<th>PHONE</th>
				<th>EMAIL</th>
				<!-- <th>WITHDRAW</th> -->
        <th>ACC_BALANCE</th>
				<th>CRYPTO</th>
        <th>PLAN</th>
				<th>WALECT</th>
        <th>REFERAL BALANCE</th>
				<th>REG. DATE</th>
				
			</tr>
		</thead>
		<tbody>
		<thead>
  <?php
    require('herokudb.php');
    
    $sql = "SELECT * FROM users" ;
    if ($result = mysqli_query($conn, $sql)) {
      
        while ($row = $result->fetch_assoc()) {
          
        if ($row["confirm_plan"] == 1){
          $plan = "silver plan";
      }

      if ($row["confirm_plan"] == 2){
          $plan = "pearl plan";
      }
      if ($row["confirm_plan"] == 3){
          $plan = "Red corol plan";
      }
      if ($row["confirm_plan"] == 4){
          $plan = "Tanzanite plan";
      }
      if ($row["confirm_plan"] == 5){
          $plan = "Sapphire";
      }
      if ($row["confirm_plan"] == 6){
          $plan = "Opal plan";
      }
      if ($row["confirm_plan"] == 7){
          $plan = "Black Diamond plan";
      }
      if ($row["confirm_plan"] == 8){
          $plan = "Benitoite plan";
      }
      if ($row["confirm_plan"] == 9){
          $plan = "Ruby plan";
      }
            echo "<tr><td>" . htmlspecialchars($row['first_name']) . "</td><td>" . htmlspecialchars($row['last_name']) ."</td><td>".
             
             htmlspecialchars($row['phone']) . "</td><td>" . 
             htmlspecialchars($row['email']) . "</td><td>" . htmlspecialchars($row['amount']) . "</td><td>".
             htmlspecialchars($row['crypto']) . "</td><td>" . htmlspecialchars($row['confirm_plan']) . "</td><td>".
             htmlspecialchars($row['wallect']) . "</td><td>" . htmlspecialchars($row['ref_amount']) . "</td><td>".
             htmlspecialchars($row['exactly']) . "</td></tr> "; 
        }
    }
?>

	</tbody>
	</table>
</div>

  
</body>
</html>
