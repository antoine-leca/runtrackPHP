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

    $maxcols = 9;
    $maxid = 9;
    $startid = 1;

    echo "<table>\n";
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

$type = ["String", "Integer", "Float", "Boolean", "Array"];
$cat = ["Double Quoted", "Decimal", "Hexadecimal", "Octal", "Binary"];
$rows = $type. " ". $cat. " ". "val" ;

$maxcols = 3;
$maxrows = 10;
$startrow = 0;

echo "<table>\n";
for ($i = 0;$i<$maxrows;$i++) {
    echo "<th>$type\n";
}

?>

