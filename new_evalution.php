<?php
	include("connection.php");

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta nane="viewport" content="width=device-width, initial-scale=1">
	<title>Employee performace evaluation system</title>

<link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>
	<div class = "center">
		<h1>Employee management system</h1>
		<div class="form-group">
		   <label for="" class="control-label">Employee</label>
				<select name="employee_id" id="employee_id" class="form-control form-control-sm select2">
				<option value=""></option>
					<?php 
						 $employees = $conn->query("SELECT *,concat(lastname,', ',firstname,' ',middlename) as name FROM employee_list where evaluator_id = {$_SESSION['login_id']} order by concat(lastname,', ',firstname,' ',middlename) asc");
								while($row=$employees->fetch_assoc()):
					?>
					
				<option value="<?php echo $row['id'] ?>" <?php echo isset($employee_id) && $employee_id == $row['id'] ? 'selected' : '' ?>><?php echo $row['name'] ?></option>
								<?php endwhile; ?>
				</select>
		  </div>
	</div>
</body>

</html>  

