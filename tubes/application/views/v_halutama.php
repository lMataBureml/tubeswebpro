<!DOCTYPE html>
<html>
<head>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
	<meta charset="utf-8">
	<!-- <link rel = "stylesheet" href = "<?php echo base_url() ?>assets/styleutama1.css" type ="text/css"> -->
	<style>
		body {
}
.jarak {
    width: 970px;
    margin-top: 70px;
    margin-bottom: 20px;
    margin-left: auto;
    margin-right: auto;
    z-index: 1;
}
.badan {
    padding-top: 0px;
    z-index: 1;
    position: relative;
    text-align: left;
    margin: 0 auto;
    padding: 70px 8px 0;
    width: 1150px;
}
.menubiru {
    position: relative;
    opacity: 1;
    margin-top: 0px;
    background: rgb(1, 111, 186);
    margin-bottom: 20px;
    font-weight: 600;
    font-size: 15px;
    position: relative;
    border-radius: 0;
    border: 0 solid rgba(0,0,0,.15);
    color:white;
}
.menubiru ul {
    padding-inline-start: 0px;
    margin-bottom: 0px;
    display: inline-table;
    width: 1150px;
    position: relative;
    list-style: none;
}
.menubiru ul li {
    text-align: center;
    display: table-cell;
    list-style: none;
    border-left: 0 solid rgba(266,255,255,.08);
    border-right: 1px solid rgba(0,0,0,.1);
    white-space: nowrap;
    position: initial;
}
.menubiru ul li a{
    display: block;
    border-bottom: 4px;
    padding: 12px 9px 10px 9px;
    border-bottom: 4px solid transparent;
    height: 20px;
    color:white;
}
	</style>
</head>
<body>
	<div id="container">
		<div class="jarak"></div>
		<div class ="badan" >
			<div class="menubiru">
					<ul style="margin-bottom: 0px;">
						<li style="border-left: none;">
							<a href="">News</a>
						</li>
						<li>
							<a href="">Bisnis</a>
						</li>
						<li>
							<a href="">Superskor</a>
						</li>
						<li>
							<a href="">Sport</a>
						</li>
						<li>
							<a href="">Seleb</a>
						</li>
						<li>
							<a href="">Lifestyle</a>
						</li>
						<li>
							<a href="">Travel</a>
						</li>
						<li>
							<a href="">Otomotif</a>
						</li>
						<li>
							<a href="">Techno</a>
						</li>
						<li>
							<a href="">Pilpres2019</a>
						</li>
						<li>
							<a href="">Video</a>
						</li>
						<li>
							<a href="">Images</a>
						</li>
						<li style="border-right:none;">
							<a href="#">"Lainnya"<i class="fa fa-caret-down"></i>
							</a>
							<ul></ul>
						</li>
			</div>
	</div>
</body>
</html>