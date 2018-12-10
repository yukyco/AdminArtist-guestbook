<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Occupation List by PHP</title>
</head>
<body>

<h1><?php

	$code=$_POST['code'];

	$file = fopen('occupation.dat' ,'r');
	$cnt=0;
	while(1)
	{
		$rec=fgets($file);
		if(feof($file)==true)
		{
			break;
		}
		$cnt++;
		$score[$cnt]=$rec;
	}
	fclose($file);

	print $score[$code];
	print ':)';

?></h1>

<h7><font size="4"><a href="../guestbook/joblist.html">Back</a></font></h7>
</body>
</html>
