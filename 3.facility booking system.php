<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Facility Booking</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	
	<style>
	ul{
	margin-left:80%;
	}
	.logo img{
		width:90px;
		height:70px;
		margin-left:110px;
		padding:5px 5px;
	}
	.HFB{
		margin-left:-20px;
		font-size:55px;
		font-family:Alegreya;
		color:goldenrod;
	}
	.hades{
		margin-top:-2px;
		margin-left:10px;
		line-height:20px;
	}
	.jumbotron{
		height:200px;
		background-color:#FDFDFD;
		box-shadow:2px 2px 5px 3px #ebedee;
	}
	.bg-light{
		margin-top:-30px;
		box-shadow:inset 0px 0px 20px 10px #ebedee;
	}
	.display-4{
		margin-top:-40px;
	}
	.table-active{
		background-color:#C9C9C9;
		text-align:center;
		color:white;
		font-family:aleo;
		font-size:17px;
		width:80%;
		margin-left:10%;
	}
	
	.col1{
		color:#b3b3b3;
		margin-left:-130px;
		font-size:20px;
	}
	.col2{
		color:#ff5252;
		margin-top:-30px;
		font-size:50px;
	}
	.col3{
		color:#b3b3b3;
		margin-top:-30px;
		margin-right:-135px;
		font-size:20px;
	}
	.btn-danger{
		background-color:white;
		padding:8px;
		width:80%;
		box-shadow:inset 0px 0px 8px 3px #ebedee;
	
	}
	.btnfont{
		font-size:20px;
		background: -webkit-linear-gradient(#B78628,#FCC201);
		-webkit-background-clip: text;
		-webkit-text-fill-color: transparent;
	}
	.btn:hover{
		opacity:0.8;
	}
	.modal-title{
		color:black;
		font-size:30px;
	}
	.btn-light{
		background-color:white;
		margin:0% 2%;
		padding:2% 6%;
		box-shadow:inset 0px 0px 8px 3px #ebedee;
	}
	</style>
	
</head>

<body>
<script>Swal.fire({type:'success',title:'Success',text:'Login Success'})</script>
	<ul class="nav nav-tabs"> 
    <li>
      <a class="nav-link" href="0.home page.html">Sign out</a>
    </li>
	</ul>
 
	<div class="jumbotron">
	<table>
	<tr>
		<td><div class="logo"><img src="logo.png" alt="Logo"></div></td>
 
		<td><div class="HFB"><b>HFB</b></div></td>
 
		<td><div class="hades"><b>HADES FACILITY BOOKING</b><br>MALAYSIA</div></td>
	</tr>
	</table>

	</div>

	<div class="jumbotron text-center bg-light">
		<h1 class="display-4">Rent our Facilities</h1>
		<p>Thank you very much for your interest in reserving room space at the Hades Facility Booking Malaysia, Johor.<br>  We welcome groups to our facilities for hosting meetings and conferences.</p>
	</div>
	
	
	<div class="container">
	 <table class="table table-active table-bordered">
    <thead>
      <tr>
        <th>Dewan Banquet<br> 70 Pax</th>
        <th>Dewan Tan Sri Abdullah<br>500 Pax</th>
        <th>Dewan Jumaah<br>150 Pax</th>
      </tr>
    </thead>
    <tbody>
      <tr class="table-light">
        <td><div class="col1">RM</div><div class="col2">620</div><div class="col3">/Day</div></td>
        <td><div class="col1">RM</div><div class="col2">4000</div><div class="col3">/Day</div></td>
        <td><div class="col1">RM</div><div class="col2">1700</div><div class="col3">/Day</div></td>
      </tr>
      <tr>
        <td><p>Suitable for big group discussion, workshop, and seminar</p>
			<p>Aircond, +Banquet Chair, +Round Table<p></td>
        <td><p>Suitable for big gathering including dinner, wedding, conference, and exam</p>
			<p>Aircond, +PA System, +Projector, +Stage</p></td>
        <td><p>Suitable for big group meeting, workshop, and seminar</p>
			<p>Aircond, +PA System, +Projector</p></td>
      </tr>
      <tr>
        <td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal"><div class="btnfont"><div class="btnfont">Gallery</div></button></div>
			<div class="modal fade" id="myModal">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title">Dewan Banquet</h4>
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>

			<div class="modal-body">
				<img src="DewanBanquet.jpg" width="100%" height="100%" alt="Dewan Banquet">
			</div>
        
			<div class="modal-footer">
				<button type="button" class="btn btn-light" data-dismiss="modal"><div class="btnfont">Close</div></button>
			</div>
        
					</div>
				</div>
			</div>
		</td>
		
		<td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal2"><div class="btnfont"><div class="btnfont">Gallery</div></button></div>
			<div class="modal fade" id="myModal2">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title">Dewan Tan Sri Abdullah</h4>
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>

			<div class="modal-body">
				<img src="DewanAbdullah.jpg" width="100%" height="100%" alt="Dewan Tan Sri Abdullah">
			</div>
        
			<div class="modal-footer">
				<button type="button" class="btn btn-light" data-dismiss="modal"><div class="btnfont">Close</div></button>
			</div>
        
					</div>
				</div>
			</div>
		</td>
		
        <td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal3"><div class="btnfont"><div class="btnfont">Gallery</div></button></div>
			<div class="modal fade" id="myModal3">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title">Dewan Jumaah</h4>
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>

			<div class="modal-body">
				<img src="DewanJumaah.jpg" width="100%" height="100%" alt="Dewan Jumaah">
			</div>
        
			<div class="modal-footer">
				<button type="button" class="btn btn-light" data-dismiss="modal"><div class="btnfont">Close</div></button>
			</div>
        
					</div>
				</div>
			</div>
		</td>
      
	  </tr>
    </tbody>
  </table>
<?php/*——————————————————————————————————————————————————————————————————————————————————————————————————————————————————————————————————————————————————————————————————————————————*/?>
	<br>
	 <table class="table table-active table-bordered">
    <thead>
      <tr>
        <th>Foyer Dewan Banquet<br> 40 Pax</th>
        <th>Bilik Gerakan<br>18 Pax</th>
        <th>Bilik LPU<br>20 Pax</th>
      </tr>
    </thead>
    <tbody>
      <tr class="table-light">
        <td><div class="col1">RM</div><div class="col2">250</div><div class="col3">/Day</div></td>
        <td><div class="col1">RM</div><div class="col2">210</div><div class="col3">/Day</div></td>
        <td><div class="col1">RM</div><div class="col2">300</div><div class="col3">/Day</div></td>
      </tr>
      <tr>
        <td><p>Suitable for sit-down meal area</p>
			<p>Aircond, +Banquet Chair, +Round Table<p></td>
        <td><p>Suitable for medium size meeting group</p>
			<p>Aircond, +PA System, +Projector</p></td>
        <td><p>Suitable for meeting, and presentation</p>
			<p>Aircond, +PA System, +Projector</p></td>
      </tr>
      <tr>
        <td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal4"><div class="btnfont"><div class="btnfont">Gallery</div></button></div>
			<div class="modal fade" id="myModal4">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title">Foyer Dewan Banquet</h4>
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>

			<div class="modal-body">
				<img src="FoyerDewanBanquet.jpg" width="100%" height="100%" alt="Foyer Dewan Banquet">
			</div>
        
			<div class="modal-footer">
				<button type="button" class="btn btn-light" data-dismiss="modal"><div class="btnfont">Close</div></button>
			</div>
        
					</div>
				</div>
			</div>
		</td>
		
		<td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal5"><div class="btnfont"><div class="btnfont">Gallery</div></button></div>
			<div class="modal fade" id="myModal5">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title">Bilik Gerakan</h4>
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>

			<div class="modal-body">
				<img src="BilikGerakan.jpg" width="100%" height="100%" alt="Bilik Gerakan">
			</div>
        
			<div class="modal-footer">
				<button type="button" class="btn btn-light" data-dismiss="modal"><div class="btnfont">Close</div></button>
			</div>
        
					</div>
				</div>
			</div>
		</td>
		
        <td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal6"><div class="btnfont"><div class="btnfont">Gallery</div></button></div>
			<div class="modal fade" id="myModal6">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title">Bilik LPU (AL-Ghazali)</h4>
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>

			<div class="modal-body">
				<img src="BilikLPU.jpg" width="100%" height="100%" alt="Bilik LPU">
			</div>
        
			<div class="modal-footer">
				<button type="button" class="btn btn-light" data-dismiss="modal"><div class="btnfont">Close</div></button>
			</div>
        
					</div>
				</div>
			</div>
		</td>
      
	  </tr>
    </tbody>
  </table>
</div>
</body>
</html>