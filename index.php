<?php 

require_once 'includes/Worker.php';

$xuy = new Worker();

Worker::create(['vlad','vlados@gmail.com', 16, 'web-developer']);
Worker::create(['sds','vlad@gmail.com', 16, 'web-developer']);
Worker::create(['andrey','andrey@gmail.com', 26, '']);
Worker::create(['sds','vlad@gmail.com', 16, 'web-developer']);


?>
<pre>
<?php
print_r(Worker::all());
Worker::save();
Worker::$email = 'vlados@gmail.com';
Worker::find();
?>
</pre>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>

</body>
</html>