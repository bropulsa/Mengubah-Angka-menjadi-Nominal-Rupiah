function rupiah($angka)
  {
    $hasil_rupiah = "Rp. " . number_format($angka,2,',','.');
    return $hasil_rupiah
  ;}
$input = '123456';
echo rupiah($angka = $input);
//RESULT = Rp. 123.456,00
