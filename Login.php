<style>
.container{
	display: flex;
	align-items : center;
	justify-content: center;
	
	height: 100%;
}
</style>
<html lang="en" dir="ltr">
    <head>
        <title>! L O G I N !</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
        <!-- load jquery and bootsrap js -->
        <script src="../assets/js/jquery.min.js"></script>
        <script src="../assets/js/popper.min.js"></script>
        <script src="../assets/js/bootstrap.js"></script>
    </head>
    <body background = "335199.jpg">
        <div class="container">
            <div class="card col-sm-4">
                <b><h1 align="center"><font face="Harlow Solid Italic" size="100%" color = "#66CDAA">Login Siswa</font></h1></b>
                <div class="card-body">
                    <form action="POST" action="Output.php">
                        <font face="News706 BT" color="#66CDAA">Username :</font><input type="text" name="id" class="form-control" placeholder="Username"><br>
                        <font face="News706 BT" color="#66CDAA">Password :</font><input type="text" name="id" class="form-control" placeholder="Username"><br>
                        <button type="submit" name="submit" class="btn btn-outline-success btn-block" value="login" align="center">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>