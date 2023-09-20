<?php
$CONNECTIONINCLUDE = mysqli_connect('localhost','remoto','XTKfAFKPHNhWpSqW','sistemagsgfaturamento');
$CONTAINERS = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_booking` WHERE col_ctnrs IS NOT null AND dataPeriodo ='$TO_BORN' GROUP BY col_navio,col_Booking,dataBooking,col_ctnrs ORDER BY col_Booking ASC");
$CONSULTACONTAINERS = mysqli_num_rows($CONTAINERS);
?>