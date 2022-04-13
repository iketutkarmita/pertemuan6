<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=s, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>tambah data mahasiswa</h3>
    <form action="DbinsertDataMHS.php" method="POST">

        NIM
        <div>
            <input type="text" name="txNIM">
        </div>
        NAMA
        <div>
            <input type="text" name="txNAMA">
        </div>
        JENIS KELAMIN
        <div>
            <input type="text" name="txJK">
        </div>
        TGL LAHIR
        <div>
            <input type="date" name="txTGL">
        </div>
        JURUSAN
        <div>
            <select type="text" name="txJURUSAN">
                <option value="MTI">MTI</option>
                <option value="MTI">KAB</option>
            </select>
        </div>
        PASSCODE
        <div>
            <input type="password" name="txPASS">
        </div>
        <div>
            <button type="submit">kirim</button>
        </div>




    </form>
</body>

</html>