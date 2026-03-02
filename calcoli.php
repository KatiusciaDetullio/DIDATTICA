<?php
echo "<html><head>";
include('testata.php');
echo "</html></head>";

?>

<html>
<head>
    <title>operazioni</title>
    <style>
    table { border: 2px solid blue;
                       
    }  
    th { border: 1px solid blue;
         color: blueviolet;

    }
    tr, td { border: 1px solid green;
             text-align: center;   
             color: black;

    }  
    form { text-align: left;
           color: black;
    }
    </style>
</head>
<body>
<!--creazione del form-->
<form action="calcoli.php" method="post">
 <label>Valore 1</label><br>
 <input type="number" name="val_a"><br>
 <label>Valore 2</label><br>
 <input type="number" name="val_b"><br>
 <label>Valore 3</label><br>
 <input type="number" name="val_c"><br>
 <label>Valore 4</label><br>
 <input type="number" name="val_d"><br><br>
 <input type="submit"><br>

</form>   
 
<?php

//assegno il valore alle variabili
$a = $_POST["val_a"];
$b = $_POST["val_b"];
$c = $_POST["val_c"];
$d = $_POST["val_d"];

//operazioni
//addizione
$somma = $a + $b + $c + $d;
//sottrazione
$sottrazione = $a + $b - ($c + $d);
//moltiplicazione
$moltiplicazione = ($a + $b + $c) * $d;
//divisione
$divisione = ($a + $b + $c) / $d;

//stampo la tabella con i risultati
echo  "<table>
        <tr>
         <th>Somma</th>
         <th>Dofferenza</th>
         <th>Prodotto</th>
         <th>Quoziente</th>
        </tr>
        <tr>
         <td>$somma</td>
         <td>$sottrazione</td>
         <td>$moltiplicazione</td>
         <td>$divisione</td>
        </tr>
       </table>"




?>

</body>

</html>
