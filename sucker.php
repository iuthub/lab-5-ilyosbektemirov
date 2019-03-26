<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Buy Your Way to a Better Education!</title>
		<link href="http://www.cs.washington.edu/education/courses/cse190m/09sp/labs/4-buyagrade/buyagrade.css" type="text/css" rel="stylesheet" />
		<link href="buyagrade.css" type="text/css" rel="stylesheet" />
	</head>

	<body>
		<h1>Thanks, sucker!</h1>

		<p>Your information has been recorded.</p>

		<dl>
			<dt>Name</dt>
			<dd><?= $_POST["name"] ?></dd>

			<dt>Section</dt>
			<dd><?= $_POST["selects"] ?></dd>

			<dt>Credit Card</dt>
			<dd><?= $_POST["cardnumber"] ?> (<?= $_POST["typeofcard"]?>)</dd>
            
            <?php
            $file = "suckers.txt";
            
            $name="{$_POST["name"]} ;{$_POST["selects"]} ;{$_POST["cardnumber"]} ;{$_POST["typeofcard"]}\n";
            file_put_contents($file, $name, FILE_APPEND | LOCK_EX);
            ?>
    
            <dt>Here all the suckers who have submitted here:</dt><br>
    <dd><pre><?php
                $filename = "suckers.txt";
                $handle = fopen($filename, "r");
                $contents = fread($handle, filesize($filename));
        ?><?=$contents?>  
        <?php fclose($handle);
         ?>
       </pre>
        
    </dd>
		</dl>
		
	</body>
</html>  