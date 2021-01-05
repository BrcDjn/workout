<?php

    $time = time();
    $day = date('d', $time);
    $numMonth = date('m', $time);
    $strMonth = date('F', $time);
    $numYear = date('Y', $time);
    $firstDay = mktime(0,0,0,$numMonth,1,$numYear);
    $daysInMonth = cal_days_in_month(0, $numMonth, $numYear);
    $dayOfWeek = date('w', $firstDay) -1; 

    switch ($strMonth) {
        case 'January':
            $strMonth = 'Janvier';
            break;
        case 'February':
            $strMonth = 'Février';
            break;
        case 'March':
            $strMonth = 'Mars';
            break;
        case 'April':
            $strMonth = 'Avril';
            break;
        case 'May':
            $strMonth = 'Mai';
            break;
        case 'June':
            $strMonth = 'Juin';
            break;
        case 'July':
            $strMonth = 'Juillet';
            break;
        case 'August':
            $strMonth = 'Août';
            break;
        case 'September':
            $strMonth = 'Septembre';
            break;
        case 'October':
            $strMonth = 'Octobre';
            break;
        case 'November':
            $strMonth = 'Novembre';
            break;
        case 'December':
            $strMonth = 'Décembre';
            break;
    }

?>

<table class="calendar table table-bordered">
    <caption class="h3 text-center"><?=$strMonth.' '.$numYear; ?></caption>
    <thead>
    <tr>
        <th abbr="Lundi" scope="col" title="Lundi">Lun.</th>
        <th abbr="Mardi" scope="col" title="Mardi">Mar.</th>
        <th abbr="Mercredi" scope="col" title="Mercredi">Mer.</th>
        <th abbr="Jeudi" scope="col" title="Jeudi">Jeu.</th>
        <th abbr="Vendredi" scope="col" title="Vendredi">Ven.</th>
        <th abbr="Samedi" scope="col" title="Samedi">Sam.</th>
        <th abbr="Dimanche" scope="col" title="Dimanche">Dim.</th>
    </tr>
    </thead>
    <tbody>
        <tr>
    <?php
        if(0 != $dayOfWeek) { echo('<td colspan="'.$dayOfWeek.'" class="bg-light"> </td>'); }
        for($i=1;$i<=$daysInMonth;$i++) {

            if($i == $day) { echo('<td id="today" class="font-weight-bolder bg-dark text-white">'); } else { echo("<td>"); }
            echo '<span class="d-block">';
            echo($i);
            echo("</span></td>");
            if(date('w', mktime(0,0,0,$numMonth, $i, $numYear)) == 0) {
                echo("</tr><tr>");
            }
        }
    ?>
        </tr>
    </tbody>
</table>