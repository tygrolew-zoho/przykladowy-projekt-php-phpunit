<head>
<meta charset="UTF-8">
</head>
<body>
<p>Strona testowa</p>
<?php
include_once 'Hello.php';
$hello = new Hello();
echo "<b>" . $hello->say() . "</b>";
?>
</body>