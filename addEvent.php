<?php
header('Content-type: text/xml');
  
echo '<?xml version="1.0" encoding="UTF-8"?>';

echo '<Response>';

$con = mysqli_connect("fdb6.awardspace.net", "1652346_db1", "hackduke14", "1652346_db1");

echo "event records being added\n";

// insert the tags themselves if they aren't there already
$sql_tags = "INSERT INTO Tags (Tag)
			VALUES
			('women')";

"INSERT INTO Tags (Tag)
			VALUES
			('men')";

"INSERT INTO Tags (Tag)
			VALUES
			('children')";

"INSERT INTO Tags (Tag)
			VALUES
			('senior')";

"INSERT INTO Tags (Tag)
			VALUES
			('drugs')";

"INSERT INTO Tags (Tag)
			VALUES
			('food')";

"INSERT INTO Tags (Tag)
			VALUES
			('spiritual')";

"INSERT INTO Tags (Tag)
			VALUES
			('family')";

"INSERT INTO Tags (Tag)
			VALUES
			('single')";
                        
echo "tags records added\n";

// Insert new event into db
$sql_events = "INSERT INTO Events (Title, Date, Time, Place)
				VALUES
				('$_POST[title]',
				'$_POST[date]',
				'$_POST[time]',
				'$_POST[place]')";

if (!mysqli_query($con, $sql_events))
{
die('Error: ' . mysqli_error($con));
}

echo "event records added\n";

// Insert the tag-to-event relation into TagEvent table
$tagsToInsert = $_POST['tags'];
$tagsCount = count($tagsToInsert);
 
echo("<p>You selected $tagsCount tags: \n");
for($i = 0; $i < $tagsToInsert; $i++)
{
	// Find the tag id of the given tag
	echo("tag we're looking at " + $tagsToInsert[$1] + "\n");
	$sql_TagId = "SELECT TagId
				  FROM Tags
				  WHERE Name = {$tagsToInsert[$i]}";

	$sql_events = "INSERT INTO TagEvents (EventId, TagId)
				VALUES
				('mysqli::$insert_id', 
				sql_TagId)";
  	echo($tagsToInsert[$i] . " ");
}
echo("</p>");

if (!mysqli_query($con, $sql_tags))
{
die('Error: ' . mysqli_error($con));
}

echo "tag records added\n";
        
mysqli_close($con);
?>
