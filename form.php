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

<div class="container" style="margin-top: 5%">
<table class="u-full-width">
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
<td>&#9989; &#3992;</td>
<td><?php echo $_POST["floorInput"]; ?></td>
<td><?php echo $_POST["roomInput"]; ?></td>
</tr>
</tbody>
</table>
</div>
</body>
</html>
