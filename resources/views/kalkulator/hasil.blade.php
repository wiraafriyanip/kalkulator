<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Box</title>
    <style> 
   body {
  background: linear-gradient( #E2BFB3, #F7DED0, #FEECE2, #FFBE98);
  /* Ganti warna sesuai keinginan Anda dan sesuaikan arah gradasi */
  
  font-family: 'Arial', sans-serif; /* Ganti jenis font sesuai keinginan Anda */
  padding: 20px; /* Menambahkan padding agar konten tidak berdekatan dengan tepi */
  color: #333; /* Warna teks pada body */
}

    
/* CSS untuk styling tabel */
table {
  width: 40%;
  hight: 40%;
  border-collapse: collapse;
  margin-bottom: 20px;
  font-size: 16px; /* Ubah ukuran font sesuai kebutuhan */
  background-color: #FFBE98;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);

}

th, td {
  padding: 12px;
  text-align: left;
  border-bottom: 2px solid #ddd; /* Garis pembatas antar baris */
  color: #000000;
  font-family: Georgia, serif;
}

/* CSS untuk styling header kolom */
th {
  background-color: #f2f2f2; /* Warna latar belakang header */
  font-weight: bold;
  color: #000000; /* Warna teks header */
}

/* CSS untuk hover pada baris tabel */
/* tr:hover {
  background-color: #f5f5f5; /* Warna latar belakang saat hover */
 */
h1 {
  color: #000000;
  margin-bottom: 20px;
  font-family: Georgia, serif; /* Added a fallback font */
}




 </style>  
</head>
<body>
<h1><center>KALKULATOR W</center></h1>
    <center>
    <form action=" {{ route('itung.store') }} " method="post">
        @csrf
    <table border=1 width=500>
        <tr>
            <td colspan=2><input type="number" name="a" id=""></td>
            
            <td colspan=2 rowspan=2><input type="submit" value="Reset" name="op"></td>
            
        </tr>
        <tr>
            <td colspan=2><input type="number" name="b" id=""></td>
            
        </tr>
        <tr>
            <td colspan=4>Hasil : {{ $hasil }}</td>
            
        </tr>
        <tr>
            <td><input type="submit" value="+" name="op"></td>
            <td><input type="submit" value="-" name="op"></td>
            <td><input type="submit" value="x" name="op"></td>
            <td><input type="submit" value="/" name="op"></td>
            <td></td>
        </tr>
        <tr>
            <td colspan=4>
                Nama :Wira Afriyani Putri
                <br>
                Kelas: XII PPLG 2
            </td>
            
        </tr>
      
</center>
<br>
</body>
</html>