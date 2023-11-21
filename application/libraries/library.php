<?php

class library
{
    function buku($pinjam, $sedia, $rusak, $tidak)
    {
        echo "Total buku yang dipinjam : " , $pinjam , "<br/>";
        echo "Total buku yang tersedia : " , $sedia , "<br/>";
        echo "Total buku yang rusak : " , $rusak , "<br/>";
        echo "Total buku yang tidak dikembalikan : " , $tidak , "<br/>";
        echo "<br/>";
        $totalbuku = $pinjam + $sedia + $rusak + $tidak;
        echo "Total Keseluruhan Buku : " , $totalbuku , " buku <br/>";
        echo "Total buku yang tersedia jika sudah dikembali sebanyak 75 buku : " , $sedia + 75 , " buku <br/>";
        echo "Total buku yang tersedia jika terdapat 20% buku yang rusak dibuang : " , $totalbuku - $rusak * 0.2 , " buku <br/>";
    }

}