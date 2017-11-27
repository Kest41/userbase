<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Your page title here :)</title>
<meta name="description" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">


<link rel="stylesheet" href="css/normalize.css">
<link rel="stylesheet" href="css/skeleton.css">

</head>

<body>
<?php 
$surname=$_POST["surnameInput"];
$name=$_POST["nameInput"];
$patronymic=$_POST["patronymicInput"];
$extension=$_POST["extensionInput"];
$mobile=$_POST["mobileInput"];
$pcname=$_POST["pcnameInput"];
$floor=$_POST["floorInput"];
$room=$_POST["roomInput"];
?>


<div class="container" style="margin-top: 5%">
<table class="u-full-width">
<?php switch($_POST['choice']){
case 'find': ?>
	<p>Вы хотели найти <?php echo $name; ?>, но нам лень, ищите сами</p>
<?php break; ?>
<?php case 'add': ?>
<thead>
<tr>
<th>Фамилия</th>
<th>Имя</th>
<th>Отчество</th>
<th>Внутренний номер</th>
<th>Мобильный номер</th>
<th>Имя компьютера</th>
<th>Принадлежность домену</th>
<th>Этаж</th>
<th>Комната</th>
</tr>
</thead>
<tbody>
<tr>
<td><?php echo $_POST["surnameInput"]; ?></td>
<td><?php echo $_POST["nameInput"]; ?></td>
<td><?php echo $_POST["patronymicInput"]; ?></td>
<td><?php echo $_POST["extensionInput"]; ?></td>
<td><?php echo $_POST["mobileInput"]; ?></td>
<td><?php echo $_POST["pcnameInput"]; ?></td>
<td><?php if ($_POST["domainInput"] == 'да'): ?> <p>&#9989;</p> <?php endif; ?></td>
<td><?php echo $_POST["floorInput"]; ?></td>
<td><?php echo $_POST["roomInput"]; ?></td>
</tr>
</body>
</table>
</div>
<?php break; ?>
<?php case'delete': ?>
<p>Вы там что то хотели удалить, но оно само удалилось</p>
<?php break;} ?>
</body>
</html>
