
<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/view/include/header.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP CRUD </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
<body>
<div class="container">
	<h1 class="page-header text-center">Users</h1>
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<?php
			if(isset($_SESSION['message'])){
				?>
				<div class="alert alert-info text-center">
					<?php echo $_SESSION['message']; ?>
				</div>
				<?php

				unset($_SESSION['message']);
			}

			?>
			<a href="#add" data-toggle="modal" class="btn btn-primary">Add New User</a><br><br>
			<table class="table table-bordered table-striped">
				<thead>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Surname</th>
					<th>Position</th>
					<th>Email</th>
					<th>Password</th>
					<th>Action</th>
				</tr>
				</thead>
				<tbody>
				<?php
				foreach ($users as $user) {

					?>

					<tr>
						<td><?php echo $user->id; ?></td>
						<td><?php echo $user->name; ?></td>
						<td><?php echo $user->surname; ?></td>
						<td><?php echo $user->position; ?></td>
						<td><?php echo $user->email; ?></td>
						<td><?php echo $user->password; ?></td>
						<td><a href="#edit<?php echo $user->id; ?>" data-toggle="modal" class="btn btn-success">Edit</a> |
							<a href="#delete<?php echo $user->id; ?>" data-toggle="modal" class="btn btn-danger">Delete</a>
						</td>
						<?php
                        include('EditUser.php');
                         ?>
					</tr>
					<?php
				}
				?>
				</tbody>
			</table>
		</div>
		<a href="http://milica.test/" class="btn btn-warning" role="button">Back</a>
	</div>
</div>
<?php
include('AddUser.php');
?>


</body>
</html>