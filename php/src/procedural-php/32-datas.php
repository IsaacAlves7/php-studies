<?php
// Datas
// echo date('d'),"<br>"; //current day
// echo date('D'),"<br>"; // current day text
// echo date('m'),"<br>"; // current month
// echo date('M'),"<br>"; // current month text
// echo date('y'),"<br>"; // current year 2 digits
// echo date('Y'),"<br>"; // current year 4 digits
// echo date('l'),"<br>"; // current weekday 4 digits
// echo date('h'),"<br>"; // current hour A.M
// echo date('H'),"<br>"; // current hour P.M
// echo date('i'),"<br>"; // current minutes
// echo date('s'),"<br>"; // current seconds
// echo date('A'),"<br>"; // P.M or A.M

echo date('d/m/Y'),"<br>"; // current day
echo date('H:i:s A'); // current hour
date_default_timezone_set('America/Sao_Paulo'); // region timezone
echo "<hr>";

// // For database
// $date = date('Y-m-d'); //date
// echo $date;
// $datetime = date('Y-m-d H:i:s'); //datetime
// echo $datetime;
// echo "<hr>";

//Time
// echo time(); // Quantidade de segundos desde 1970-Atualmente
// echo date('d/m/Y', $time);

// Mktime
$payday = mktime(15, 30, 00, 02, 15, 2023);
echo date('d/m - h:i', $payday);

//Strtotime
$data = '2019-04-10 13:30:00';
$data = strtotime($data);

echo "<br>",date('d/m/Y', $data);
?>