<?php 
	

$tables = array
(
	array('Benefit', 'Per Person Limit', 'Benefit','Per Persons Limit'),
	array('Trip Cancellation percent', '70%', 'Baggage Delay','$100'),
	array('Trip Interruption', 'Up to 100% of trip cost', '24-Hours AD&D','$5,000'),
	array('Trip Delay', '$250.00', 'Common Carrier AD&D','$10,000'),
	array('Trip Amount', '$250%', 'Optional Flight Accident','$100,000, $250,000, $500,000'),
	array('Emergency Medical Expense', '$10,000', 'Optional Rental Car Damage','$35,000'),
	array('Emergency Medical', '$100,000', 'Tax Assistance Services','Included')

);

for ($row = 0; $row < 4; $row++) {
	echo "<p><b>Table: $row</b></p>";
	echo "<ul>";
	for ($col = 0; $col < 3; $col++) {
		echo "<li>".$tables[$row][$col]."</li>";
	}
	echo "</ul>";
}

echo "<br/>";
echo "<p><b>Sorted Table</b></p>";

sort($tables);

for ($row = 0; $row < 4; $row++) {
	echo "<p><b>Table: $row</b></p>";
	echo "<ul>";
	for ($col = 0; $col < 3; $col++) {
		echo "<li>".$tables[$row][$col]."</li>";
	}
	echo "</ul>";
}

?>