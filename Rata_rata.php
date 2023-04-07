<?php

//Friana Widya Gunawan
//D112111022

    $nilai_matematika = 60;
    $nilai_fisika = 43;
    $nilai_biologi = 43;

    $ratarata = ($nilai_matematika + $nilai_fisika + $nilai_biologi) / 3;

    if($ratarata > 60){
        echo "$ratarata \n";
        echo "Anda Lulus";
    }else{
        echo "$ratarata \n";
        echo "Anda Gagal";
    }

?>
