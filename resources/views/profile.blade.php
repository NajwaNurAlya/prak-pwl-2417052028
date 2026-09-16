<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Profil</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif; 
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: white;
        }
        .container {
            text-align: center;
            width: 320px; 
        }
        .profile-pic {
            width: 145px;
            height: 145px;
            border-radius: 50%;
            background-color: white; 
            border: 2px solid #a3a3a3;
            margin: 0 auto 25px auto;
            display: flex;
            justify-content: center;
            align-items: flex-end;
            overflow: hidden;
        }
        .profile-pic img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: top;
        }
        .info-box {
            background-color: #ebebeb;
            padding: 12px;
            margin: 12px 0;
            font-size: 18px;
            color: black;
            text-transform: capitalize;
            
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }
        .info-box:hover {
            background-color: #e0e0e0;
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.08);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="profile-pic">
            <img src="{{ asset('pasfoto.jpg') }}" alt="Profile Picture">
        </div>
        
        <div class="info-box">{{ str_replace(['-', '%20'], ' ', $nama) }}</div>
        <div class="info-box">{{ $kelas }}</div>
        <div class="info-box">{{ $npm }}</div>
    </div>
</body>
</html>