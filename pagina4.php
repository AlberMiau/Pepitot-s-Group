<!DOCTYPE html>
<html lang="es">
<head>
	<?php include'inc/head.php' ?>
</head>
<body>
 <?php include 'inc/header.php'; ?>
<iframe src="phpinfo.php" frameborder="0" onload=resizeIframe(this) width="1200px" scrolling="none"></iframe>
<?php include 'inc/footer.php'; ?>

</body>
<script>
  function resizeIframe(obj) {
    obj.style.height = (obj.contentWindow.document.body.scrollHeight + 50)+ 'px';
  }
</script>
</html>

