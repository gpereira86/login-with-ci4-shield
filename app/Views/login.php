<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRSF</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"/>

</head>
<body>

<div class="container mt-5">
    <?php if (session()->has('error')): ?>
        <span class="text-danger fw-bolder"><?php echo session()->get('error') ?></span>
    <?php endif; ?>

    <form action="/login" method="post">
        <input type="text" name="email" placeholder="Your email" value="teste@teste.com">
        <input type="password" name="password" placeholder="Your password" value="452826@Ge">
        <button type="submit">Login</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
