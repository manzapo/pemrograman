<?php
$title = 'Halaman Login';
include 'header.php';
?>

<div class="container">    
    <h1 class="text-center">Login</h1>
    
    <form action="cek.php" method="post">

        <input type="text" name="username" class="form-control mb-3" placeholder="User ID">
        <input type="password" name="password" class="form-control mb-3" placeholder="Password">

        <button type="submit" class="btn btn-success">Submit</button>

    </form>

</div>

<?php
include 'footer.php';