<!DOCTYPE html>
<html>
<head>
<title>PHP to handle form</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" >
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="../css/uxcore.css" rel="stylesheet">
<link href="../css/customer-comp.css" rel="stylesheet">
</head>

<body>
<H1> Echo from server </H1>

Welcome <?php echo $_POST["fullname"]; ?><br>

Your email address is: <?php echo $_POST["email"]; ?><br>

Your account type is: <?php echo $_POST["usertype"]; ?>
 
</body>
</html> 