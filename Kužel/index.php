
<html>
    <head>
        <meta charset="UTF-8">
        <title>Kuzel</title>
    </head>
    <body>
        <?php
        require ('Tridy/Kuzel.php');
       echo "Název tělesa: Kužel </br>" ;
       $r = 50;
       $v = 100;
       echo "Poloměr: $r cm</br> Výška: $v cm</br>";
       $kuzel = new Kuzel();
       $V = $kuzel->objem($r, $v);
       $S = $kuzel->povrch($r, $v);
       echo "Objem kužele je $V cm <sup>3</sup> </br> Povech kužele je $S cm <sup>2</sup> ";
        
        ?>
    </body>
</html>
