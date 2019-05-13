<html>
<head><title>HOME</title>
</head>
<body>
<?php
session_start();
if($_SESSION['usuario'] ==  "stone"){?>

<iframe width="100%" height="100%" src="https://app.powerbi.com/view?r=eyJrIjoiZWE4MjRiY2QtNmU0Ny00M2Q0LTkxYjAtNGVmMmRjOTZiY2MyIiwidCI6IjQzZjQ5YjFmLWQ0MjYtNGIzMi04MmE3LTYyY2NlNzZkMDhmMCJ9" frameborder="0" allowFullScreen="true"></iframe> 


<?php
}else{   
    header('Location:../index.html');
}

?>
<body>
</html>