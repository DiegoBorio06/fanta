<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Tabellina Pitagorica di Diego Borio</title>
</head>
<body>
<h1>
Tabellina pitagorica di Borio Diego
</h1>
<?php
    echo("<table>");
    echo("<tr><th>*</th>");
    for ($col = 1; $col <= 10; $col++) {
        echo("<th>$col</th>");
    }
    echo("</tr>");
    for ($cntRiga = 1; $cntRiga <= 10; $cntRiga++) {
        echo("<tr>");
        echo("<th>$cntRiga</th>");
        for ($cntCol = 1; $cntCol <= 10; $cntCol++) {
            $result = $cntRiga * $cntCol;
            echo("<td>$result</td>");
        }
        echo("</tr>");
    }
    echo("</table>");
?>
</body>
</html>
