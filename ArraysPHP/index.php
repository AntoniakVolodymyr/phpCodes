<?php
$categories = [
    'Programming',
    'Gaming', 
    'Art', 
    'Self improvement', 
    'History',
    'Chess'
];

foreach ($categories AS $category) {
    if ($category === 'Chess') {
        echo 'I want to sacrifice the ROOOOOOOK!!! <br />';
    }
    else if ($category === 'Art') {
        echo 'Let him cook <br />';
    }
    else if ($category === 'Gaming') 
    {
        echo 'My brother stole my pc, because he wanted to play Fortnite <br />';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"/>
    <title>Document</title>
</head>
<body>
    <ul>
        <?php foreach ($categories AS $category): ?>
            <li><?php echo $category; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
