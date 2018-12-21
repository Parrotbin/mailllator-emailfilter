<?php

$banner = "                                                                            
                                                                                 
|||||||||||||||||||||||||||||||||
||||||||||||||||||||||||_____||||
||||_____|||||||||||||||_____||||
||||_____|||||||||||||||_____||||
||||_____||____|||____||_____||||
||||_____|______|______|_____||||
||||_____|______|______|_____||||
||||_____|____|||||||||||||||||||
||||_____|___||___________|||||||
||||_____|__||_______________||||
||||__________||_____________||||
||||___________||___________|||||
||||_____________|_________||||||
|||||_____________________|||||||
||||||___________________||||||||
|||||||||||||||||||||||||||||||||

                              
                                                                                 
[@] Email Filter / Email Parser [Maillator] [@]   

! Recode Tinggalkan Credit ! 
                                   
Author           : Pasya                  
Team             : 1ntr0ver7                   
Official Website : https//raflipasya19.blogspot.com/\n\n";                                                                 
                                                                                                                                                                 
sleep(3);
echo $banner;
sleep(2);
echo "
Pilih Email yang mau di Extract !
[1] Gmail.com
[2] Aol.com
[3] Yahoo.com
[4] Orange.fr
[5] Hotmail.com
Email tak tersedia ? Request ke saya atau bisa edit sc ini sendiri :)
Pilih angka :";

$jawab = trim(fgets(STDIN));
sleep(3);
echo "Loading Data... "; sleep(2); echo "Success !\n";
sleep('1.5');
echo "Getting Resource... "; sleep(2); echo "Success !\n";
sleep('1.5');
echo "Setting Connection... "; sleep(2); echo "Success !\n";
sleep('1.5');
echo "Connecting To Network... "; sleep(2); echo "Success !\n";
sleep('1.5');
echo "CONFIGURATION SUCCESS !\n "; 
sleep(2);
if($jawab == "1"){
	echo "[Gmail]Masukkan File List :";
	$jawm = trim(fgets(STDIN));
	$get = file_get_contents($jawm);
$ex = explode("\r\n", $get);
$gan = count($ex)-'1';
sleep(2);
echo "\n";
$i = 0; echo "Filtering Data , Please wait... "; sleep(5); echo "Success !\n";
sleep('1.5');
while($i<=$gan){
$dude = $ex[$i];
if(preg_match('/gmail./i', $dude)){
	echo "Gmail : ".$dude." Urutan ke : ".$i."\n";
	$gmy_file = "gmail-".date('hm').'.txt';
$ghandle = fopen($gmy_file, 'a') or die('Cannot open file:  '.$gmy_file);
$gdata = $dude."
";
fwrite($ghandle, $gdata);
}
$i++;
} sleep(2);
	echo "DATA SAVED TO : gmail-".date('hm').".txt\n";
}
else if($jawab == "2"){
	echo "[AOL]Masukkan File List :";
	$gjawm = trim(fgets(STDIN));
	$gget = file_get_contents($gjawm);
$gex = explode("\r\n", $gget);
$ggan = count($gex)-'1';
sleep(2);
echo "\n";
$gi = 0; echo "Filtering Data , Please wait... "; sleep(5); echo "Success !\n";
sleep('1.5');
while($gi<=$ggan){
$gdude = $gex[$gi];
if(preg_match('/aol./i', $gdude)){
	echo "Aol : ".$gdude." Urutan ke : ".$gi."\n";
$my_file = "aol-".date('hm').'.txt';
$handle = fopen($my_file, 'a') or die('Cannot open file:  '.$my_file);
$data = $gdude."
";
fwrite($handle, $data);
}

$gi++;
} sleep(2);
	echo "DATA SAVED TO : aol-".date('hm').".txt\n";
}
elseif($jawab == "3"){
	echo "[YAHOO]Masukkan File List :";
	$cgjawm = trim(fgets(STDIN));
	$cgget = file_get_contents($cgjawm);
$cgex = explode("\r\n", $cgget);
$cggan = count($cgex)-'1';
sleep(2);
echo "\n";
$cgi = 0; echo "Filtering Data , Please wait... "; sleep(5); echo "Success !\n";
sleep('1.5');
while($cgi<=$cggan){
$cgdude = $cgex[$cgi];
if(preg_match('/yahoo./i', $cgdude)){
	echo "Yahoo : ".$cgdude." Urutan ke : ".$cgi."\n";
$cmy_file = "yahoo-".date('hm').'.txt';
$chandle = fopen($cmy_file, 'a') or die('Cannot open file:  '.$cmy_file);
$cdata = $cgdude."
";
fwrite($chandle, $cdata);
}

$cgi++;
} sleep(2);
	echo "DATA SAVED TO : yahoo-".date('hm').".txt\n";
}
else if($jawab == "4"){
	echo "[orange]Masukkan File List :";
	$grgjawm = trim(fgets(STDIN));
	$grgget = file_get_contents($grgjawm);
$grgex = explode("\r\n", $grgget);
$grggan = count($grgex)-'1';
sleep(2);
echo "\n";
$grgi = 0;
while($grgi<=$grggan){
$grgdude = $grgex[$grgi];
if(preg_match('/orange./i', $grgdude)){
	echo "Orange Fr : ".$grgdude." Urutan ke : ".$grgi."\n";
$grmy_file = "orange-".date('hm').'.txt';
$grhandle = fopen($grmy_file, 'a') or die('Cannot open file:  '.$grmy_file);
$grdata = $grgdude."
";
fwrite($grhandle, $grdata);
}

$grgi++;
} sleep(2);
	echo "DATA SAVED TO : orange-".date('hm').".txt\n";
}

else if($jawab == "5"){
	echo "[HotMail]Masukkan File List :";
	$rgjawm = trim(fgets(STDIN));
	$rgget = file_get_contents($rgjawm);
$rgex = explode("\r\n", $rgget);
$rggan = count($rgex)-'1';
sleep(2);
echo "\n";
$rgi = 0;
while($rgi<=$rggan){
$rgdude = $rgex[$rgi];
if(preg_match('/hotmail./i', $rgdude)){
	echo "Hotmail : ".$rgdude." Urutan ke : ".$rgi."\n";
$rmy_file = "hotmail-".date('hm').'.txt';
$rhandle = fopen($rmy_file, 'a') or die('Cannot open file:  '.$rmy_file);
$rdata = $rgdude."
";
fwrite($rhandle, $rdata);
}

$rgi++;
} sleep(2);
	echo "DATA SAVED TO : hotmail-".date('hm').".txt\n";
}
else{
	$gagal = "WRONG NUMBER !";
	echo "\n\n".$gagal;
}

?>
