<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Your visitemedical is about to expire</title>
</head>
<body>
    <p>Hi {{ $marin->name }},</p>
    <p>Your visitemedical is about to expire on {{ $visiteMedical->date_fin }}</p>
    <p>Please renew your visitemedical before it expires.</p>
    <p>Thank you,</p>
    <p>The Team</p>
</body>
</html>
