<!DOCTYPE html>
<html>
<head>
	<title>No Accsess</title>

	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300">

	<style>
		html, body{
			height: 100%;
		}

		body{
			margin: 0;
			padding: 0;
			width: 100%;
			color: #B0BEC5;
			display: table;
			font-weight: 300;
			font-family: 'Source Sans Pro';
           }

           .container{
           	text-align: center;
           	display: inline-block;
           }

           .content{
           	text-align: center;
           	margin-bottom: 40px;
           }
	</style>
</head>
<body>
 
     <div class="container">
     	<div class="content">
     		<div class="title">:(</div>
     		<p>Maaf,Anda Tidak memiliki akses untuk fitur ini</p>
     		<p><a href="{{ url('/')}}">Kembali ke halaman awal</a></p>
     	</div>
     </div>
</body>
</html>