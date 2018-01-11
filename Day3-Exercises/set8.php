<?php
echo '<h1>Buy Your Way to a Better Education</h1>
<p>Recent changes in University of Washinton policy now allow us to offer grades for money. That\'s right! All you need to get an A is cold,hard,cash</p>
	
<h2>Give us your money</h2>

<form action="set8.php" method="post">
	<div>
		<label>Name</label>
		<input type="text" name="name"/>
	</div>
	<div>
		<label>Section</label>
		<select>
			<option>BSc</option>
			<option>B.A</option>
			<option>B.Comm</option>
		</select>
	</div>
	<div>
		<label>Credit Card</label>
		<input type="text" name="cc"/>
	</div>
	<div>
		<input type="radio" name="typeOfCard" value="visa"/>
		<label>Visa</label>
		<input type="radio" name="typeOfCard" value="mc"/>
		<label>Mastercard</label>
	</div>
	<input type="submit" value="I am a giant sucker!"/>
</form>';

$name = $_POST["name"];

if (!empty($name)){
    $cc = $_POST["cc"];

    $namePattern = "/^[[:upper:]][[:alpha:]]+/";
    $ccPattern = "/[[:digit:]]{16}/";
    
    if(preg_match($namePattern,$name,$matches, PREG_OFFSET_CAPTURE)){
        echo "<h3> NAME IS GOOD {$name} </h3>";
    }
    else{
        echo "<h3> Incorrect input for name {$name} </h3>";
    }  
    
    if(preg_match($ccPattern,$cc,$matches2, PREG_OFFSET_CAPTURE)){
        echo "<h3> CC INFO IS GOOD {$cc} </h3>";
    }
    else{
        echo "<h3> CC INFO INCORRECT {$cc} </h3>";
    } 
}



?>