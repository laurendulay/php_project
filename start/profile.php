<html>
<head>
	<title>You? An Outfit Repeater? Never!</title>
	<link rel="stylesheet" href="assets/style.css">
    <style>
        .img {height:300px;}
        td{text-align:center;}
        
    nav a{
	display:block;
	background:#fff;
	padding:10px;
	border-radius: 5px;
	text-decoration: none;
	color:#CC7B8C;
}
    nav a:hover{
	background:#B5446E;
}
    nav{
	padding:10px;
	background: #CC7B8C;
}
    *{
	font-family: sans-serif;
	color:#CC7B8C;
	box-sizing: border-box;
}

    </style>
</head>
<body>
    <?php require_once('assets/partials/nav.php');?>
	<h1>Never Repeat An Outfit Again</h1>
	<hr>
	<table>
		<tr>
			<th>EVENT</th>
			<th>DATE</th>
			<th>OUTFIT</th>
		</tr>
        <?php
        $d = file_get_contents('assets/data.json');
        $d = json_decode ($d, true);
        //print_r($d);
        foreach( $d as $key => $value ) {
            
            echo '<tr>
            
                <td>'.$value['name'].'</td>
                <td>'.$value['date'].'</td>
                <td><img src="assets/'.$value['photo'].'" class="img"></td>
                </tr>';
        };
        
    
        
        ?>
	</table>
	<hr>
    <?php require_once('assets/partials/footer.php');?>
</body>
    
</html>