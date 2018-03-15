<?php
	include('session.php');
?>
<html">
	<head>
		<title>Welcome</title>
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         
         .box {
            border:#666666 solid 1px;
         }
      </style>
	</head>

	<body>
		<div>
			<p>hostname: <?php echo system('hostname'); ?> </p>
			<a href = "logout.php" style="float:right" >Sign Out</a>
		</div>
		<h1>Welcome to YeTube 2.0! Great New Features! - <?php echo $login_session; ?></h1>

		<table>
			<?php
				foreach ($content_row as $values) {
			?>
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
			<?php
				}
			?>
		</table>
	</body>
</html>