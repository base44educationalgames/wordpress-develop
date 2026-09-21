<?php
/**
 * WordPress Modded - Version Information
 */

defined('ABSPATH') || exit;

$version = '7.2';
$description = 'Free domains with no subdomain';
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Version Information</title>

    <style>
        body {
            margin: 0;
            background: #fff;
            font-family: Arial, sans-serif;
        }

        .version-information {
            width: 100%;
            min-height: 100vh;
            box-sizing: border-box;
            padding: 40px;
        }

        .version {
            font-size: 32px;
            font-weight: 600;
        }

        .description {
            text-align: center;
            margin-top: 45px;
            font-size: 22px;
        }

        .separator {
            margin-top: 80px;
            border-top: 2px solid #222;
            width: 100%;
        }
    </style>
</head>

<body>
    <main class="version-information">

        <div class="version">
            <?php echo esc_html($version); ?>
        </div>

        <div class="description">
            <?php echo esc_html($description); ?>
        </div>

        <div class="separator"></div>

    </main>
</body>
</html>
