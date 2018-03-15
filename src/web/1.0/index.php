<?php
	include('session.php');
?>
<html">
	<head>
		<title>Welcome</title>
	</head>

	<body>
		<h1>Welcome <?php echo $login_session; ?> 
			<a href = "logout.php">Sign Out</a>
		</h1>
		<table>
			<?php
				foreach ($content_row as $values) {
			?>
					<tr>
						<th> 
							<table>
								<tr>
									<th>
										<video width="320" height="240" controls>
											<source src="./yetube_videos/<?php echo $values['content_id']; ?>/upload_sample.mp4" type="video/mp4">
												Your browser does not support the video tag.
										</video>
									</th>
								</tr>
								<tr>
									<th> <?php echo $values['content_name']; ?> </th>
								</tr>
							</table>
						</th>
					</tr>
			<?php
				}
			?>
		</table>
	</body>
</html>