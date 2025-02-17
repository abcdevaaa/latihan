<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: rgb(140, 201, 255);
            background-size: 300% 300%;
            font-family: lucida console;
            font-size : 25px;
            color: white;
        }

        
    </style>

</head>
<body>
    
<?php
$data = ["Seharusnya cukup dengan berteman <br> tanpa harus melibatkan perasaan",
"Jangan memaksakan dirimu untuk berubah, <br> kamu sempurna dengan kekuranganmu",
"Aku lebih memilih sakit menjadi temanmu <br> daripada harus kehilanganmu dari hidupku",
"Jika kamu menyukai sahabatmu, simpan itu untuk dirimu sendiri <br> karena lebih baik menjadi teman daripada tidak sama sekali",
"Berhendilah berfantasi tentang hal hal yang tidak mungkin terjadi",
"Lakukan apapun yang kamu inginkan, <br> impianmu adalah milikmu sendiri, <br> jangan pedulikan apa yang orang pikirkan tentangmu",
"Tidak ada orang jahat di dunia ini. <br> Walaupun sikap mereka buruk, <br> tapi seburuk-buruknya sikap<br> seseorang pasti ada jiwa yang amat baik di dalam hatinya",
"Jika kamu masih belum bisa menemukan kebahagiaanmu,<br> berhentilah mencarinya.<br> Kemudian ciptakanlah kebahagiaanmu sendiri",
"Senyum itu ibarat perban yang menutup luka,<br> tapi rasa sakitnya masih ada",
"Orang yang menghina kelemahanmu,<br> adalah orang yang buta akan kelebihanmu"];
shuffle($data);

echo $data[0];
?>
    
</body>
</html>
