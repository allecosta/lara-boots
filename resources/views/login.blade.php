<!doctype html>
<html lang="en">
	<head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
		
	    <title>Form Laravel Demo</title>
	
		<style>
		/* 		.container {
				width: 100%;
			} */
			h1 {
				width: 400px;
				text-align: center;
				margin:  30px auto 30px auto;
				color: #425d84;
			}
			.form {
				 display:flex;
				justify-content: center;
			
			}
		
			input[type=email]{
				width: 100%;
			}
			
			input[type=password]{
				width: 100%;
			}
		</style>
	</head>
  	<body>
	  	<div class="container">
			<h1>Login</h1>
			<div class="form">
				<form>
					<div class="mb-3">
						<label for="exampleInputEmail1" class="form-label">Email address</label>
						<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
					</div>
					<div class="mb-3">
						<label for="exampleInputPassword1" class="form-label">Password</label>
						<input type="password" class="form-control" id="exampleInputPassword1">
					</div>
					<div class="mb-3 form-check">
						<input type="checkbox" class="form-check-input" id="exampleCheck1">
						<label class="form-check-label" for="exampleCheck1">Check me out</label>
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
  	</body>
</html>