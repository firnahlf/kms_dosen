
<?php
session_start();
session_destroy();
echo "<script>alert('Terimakasih telah menggunakan KMS ini!'); window.location = 'login.php'</script>";
?>
