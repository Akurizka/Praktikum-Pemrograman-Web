<!DOCTYPE html>
<html>
    <head>
        <title>LATIHAN 9 PEMROGRAMAN WEB</title>
    </head>
    <body>
        <?php
            #cara pertama mendeklarasikan array multidimensi
            print ("CARA PERTAMA MENDEKLARASIKAN ARRAY MULTIDIMENSI: </>");
            $buah = array(
                    "apel"=> array("warna"=>"merah"),
                    "pisang"=>array("warna"=>"kuning"));

            print "Warna buah apel adalah ";
            print $buah ["apel"] ["warna"]."<br/>";
            print "Warna buah pisang adalah ";
            print $buah ["pisang"]["warna"];

            echo "<br/><x/><br/>";

            #cara kedua mendeklarasikan array multidimensi
            print ("CARA KEDUA MENDEKLARASIKAN ARRAY MULTIDIMENSI: <br/>");
            $buah = array(
                    array("apel", "merah", "manis"),
                    array("pisang", "kuning", "manis")
             );

            echo $buah [0][0]." warna: ".$buah [0] [1]." rasa: ".$buah [0] [2]."<br/>";
            echo $buah [1] [0]." Warna: ".$buah [1][1]." rasa: ". $buah [1] [2] . "<br/>";
        ?>
    </body>
</html>