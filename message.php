<?php
$afternoon="Good afternoon";
$evening="Good evening";
$late="Working late?";
$morning="Good morning";
$friday="Get ready for the weekend";
$current_time=date('G');
$current_day=date('I');
//12 p.m-4 p.m
if($current_time>=12 && $current_time<=16)
{
echo $afternoon;
}
//5 p.m-11 p.m
elseif($current_time>=17 && $current_time<=24)
{
echo $evening;
}
//12 a.m-5 a.m
elseif($current_time>=1 && $current_time<=5)
{
echo $late;
}
//6 a.m-11 a.m
elseif($current_time>=6 && $current_time<=11)
{
echo $morning;
}
if($current_day=="friday")
{
echo $friday;
}
?>