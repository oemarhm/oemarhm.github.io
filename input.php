<?php
include('koneksi.php');
?>

<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $sql = mysqli_query($koneksi, "INSERT INTO komentar (name, email, subject, message) VALUES ('$name', '$email', '$subject','$message')");

    if ($sql) {
        echo "
 		<script>
 		alert('data berhasil ditambahkan');
 		document.location.href = 'index.php';
 		</script>
 		";
    } else {
        echo "
 		<script>
 		alert('data gagal ditambahkan');
 		document.location.href = 'index.php';
 		</script>
 		";
    }
}
