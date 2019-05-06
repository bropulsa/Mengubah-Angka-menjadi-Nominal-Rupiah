# Mengubah-Angka-menjadi-Nominal-Rupiah
Script PHP untuk mengubah angka menjadi rupiah


function rupiah($angka)
  {
    $hasil_rupiah = "Rp. " . number_format($angka,2,',','.'); //tanda . untuk setiap pemisah dalam tiap 3 digit angka. dan angka 2 berarti banyaknya 0 sesudah nominal.
    
    return $hasil_rupiah
  ;}
$input = '123423'; //INI MERUPAKAN INPUTAN VALUE
echo rupiah($angka = $input); //output
