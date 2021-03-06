<html>
<head>
<link href="<?php echo base_url(). '/assets/vendor/bootstrap/css/bootstrap.min.css' ?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url(). '/assets/vendor/font-awesome/css/font-awesome.min.css' ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(). '/assets/vendor/simple-line-icons/css/simple-line-icons.css' ?>" rel="stylesheet">


</head>
<body>
	<?php echo (isset($message))? : "";?>
 	<?php    
		$this->form_validation->set_error_delimiters('<div class="alert alert-warning" role="alert">', '</div>');
	?>

 	<?php echo validation_errors(); ?>

	<?php echo form_open('user/create_user'); ?>

	<?php if($this->session->flashdata('user_registered')): ?>
          <?php echo '<div class="alert alert-success" role="alert">'.$this->session->flashdata('user_registered').'</div>'; ?>
    <?php endif; ?>
	<table>
				<tr>
					<td>Nama Lengkap</td>
					<td>:</td>
					<td><input type="text" name="nama" autofocus></td>
				</tr>
				<tr>
					<td>Email</td>
					<td>:</td>
					<td><input type="email" name="email"></td>
				</tr>
				<tr>
					<td>Username</td>
					<td>:</td>
					<td><input type="text" name="username"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td>:</td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr>
					<td>Retype Password</td>
					<td>:</td>
					<td><input type="password" name="password2"></td>
				</tr>
				<tr>
                                                <th>Level Akun</th>
                                                <td>
                                                <div class="form-group">
                                                <select class="form-control" name="level">
                                                  <option value="">Pilih !</option>
                                                  <option value="2">User Premium</option>
                                                  <option value="3">User Regular</option>
                                                </select>
                                                </div>
                                                </td>
                </tr>
				<tr>
					<td colspan="3"><input type="submit" name="submit" value="simpan"></td>
				</tr>
	</table>
</body>
</html>