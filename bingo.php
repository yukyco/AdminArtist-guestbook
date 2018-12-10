<?php
	// BINGO RURLES
	
	// B(0): 01-15
	// I: 16-30
	// N: 31-45 (真ん中なし）
	// G: 46-60
	// O(5): 61-75
	
$bingo = array();

for ($i=0; $i<5; $i++ ) {
	$numbers = range($i*15+1, $i*15+15);
	shuffle($numbers);
    $bingo[$i] = array_slice($numbers, 0, 5);
}
    // var_dump($bingo);

$s = "";

for ($j=0; $j<5; $j++) {
	$s .= "<tr>";
	for ($k=0; $k<5; $k++) {
		$s .= ($j==2 && $k==2) ? "<td></td>" : sprintf("<td>%s</td>", $bingo[$k][$j]);
	}
    $s .= "</tr>";
     //var_dump($s);
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
		<title>B*I*N*G*O Sheet</title>
	</head>
	<style>
	   td, th {
		width: 50px;
		border: 1px solid #ccc;
		text-align: center;
	    }
	</style>
	<body>
		<h1>BINGO SHEET</h1>
		<table>
				<th>B</th><th>I</th><th>N</th><th>G</th><th>O</th>
			       <tr><?php echo $s; ?></tr>
		</table>
	</body>
</html>