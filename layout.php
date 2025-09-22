<?php include __DIR__ . "/config.php"; ?>

<!DOCTYPE html>
<html lang="en" class="scroll-smooth overflow-x-hidden">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- tailwind -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/e1288edb06.js" crossorigin="anonymous"></script>

    <link rel="icon" type="image/x-icon" href="./public/images/favicon (1).png">

    <title>SMK Antartika 2 Sidoarjo</title>

    <base href="<?php echo $base_url;?>">

</head>

<body>
    <?php if (!isset($hideNav) || $hideNav === false): ?>
        <?php include __DIR__ . '/src/component/nav.php'; ?>
    <?php endif; ?>