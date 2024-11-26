<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: white;">

<div class="container mt-5">
    <h2 class="text-center">Halo, Selamat Datang Admin!</h2>
    
    <div class="text-center mt-4">
        <label for="featureSelect">Pilih Menu:</label>
        <select id="featureSelect" class="form-control w-50 mx-auto" onchange="redirectToPage()">
            <option value="">-- Pilih Menu --</option>
            <option value="show.php">Show Produk</option>
            <option value="delete.php">Hapus Produk</option>
            <option value="admin.php">Dashboard Admin</option>
            <option value="profile.php">Profil</option>
        </select>
    </div>
</div>

<script>
    function redirectToPage() {
        var select = document.getElementById("featureSelect");
        var selectedValue = select.value;
        if (selectedValue) {
            window.location.href = selectedValue;
        }
    }
</script>

</body>
</html>