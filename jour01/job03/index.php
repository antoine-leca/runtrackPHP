<?php 
    $str = "LaPlateforme";
    $numd = 1.2;
    $numh = 1.2e3;
    $numo = 0264;
    $numb = 0b1101;
    $float = 1.234;
    $bool = true;
    $bool2 = false;
    $array = array(1, 2, 3);

    $maxcols = 3;
    $maxid = 9;
    $startid = 1;

echo "<table id='table1'>\n";
for ($i = 1;$i<=ceil($maxid/$maxcols);$i++) {

    echo "<tr>\n";
    for ($j=1;$j<=$maxcols;$j++)
        if ($startid <= $maxid)
            echo "  <td class='mark'>ID".$startid++."</td>\n";
        else 
            echo "  <td> </td>\n";

    echo "</tr>\n<tr>\n";
    for ($j=1;$j<=$maxcols;$j++)
        echo "<td>Content</td>\n";

    echo "</tr>\n";
}

echo "</table>\n";
?>