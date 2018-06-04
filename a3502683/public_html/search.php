<?php
///////////////////////////////////////////////////////////////////////////////////////////////////////
/***********Modified Authour : Sudhanshu Pandey Opensource*******************************************/
/********************Website : www.sudhanshupandey.in ********************************************////
/***************Published On : BuyPhp.ORG ********************************************************///
/////////////////////////////////////////////////////////////////////////////////////////////////////
/************************************************
	MySQL Connect
************************************************/



$conn=@mysql_connect("mysql6.000webhost.com", "a3502683_agronep", "sandeepmaharjan");
@mysql_select_db('a3502683_agrodb',$conn);

/************************************************
	Search Functionality
************************************************/

// Define Output HTML Formating
$html = '';
$html .= '<li class="result">';
$html .= '<a target="_blank" href="urlString">';
$html .= '<h3>nameString</h3>';
$html .= '<h4>descriptionString</h4>';

$html .= '</a>';
$html .= '</li>';

// Get Search
$search_string = preg_replace("/[^A-Za-z0-9]/", " ", $_POST['query']);
$search_string = @mysql_real_escape_string($search_string);

// Check Length More Than One Character
if (strlen($search_string) >= 1 && $search_string !== ' ') {
	// Build Query
	$query = 'SELECT * FROM search WHERE description LIKE "%'.$search_string.'%" OR name LIKE "%'.$search_string.'%"';

	// Do Search
	$result = @mysql_query($query);
	while($results = @mysql_fetch_array($result)) {
		$result_array[] = $results;
	}

	// Check If We Have Results
	if (isset($result_array)) {
		foreach ($result_array as $result) {

			// Format Output Strings And Hightlight Matches
			$display_description = preg_replace("/".$search_string."/i", "<b class='highlight'>".$search_string."</b>", $result['description']);
			$display_name = preg_replace("/".$search_string."/i", "<b class='highlight'>".$search_string."</b>", $result['name']);
			$display_url = $result['link'];

			// Insert Name
			$output = str_replace('nameString', $display_name, $html);

			// Insert Function
			$output = str_replace('descriptionString', $display_description, $output);
			

			// Insert URL
			$output = str_replace('urlString', $display_url, $output);

			// Output
			echo($output);
		}
	}else{

		// Format No Results Output
		$output = str_replace('urlString', 'javascript:void(0);', $html);
		$output = str_replace('nameString', '<b>No Results Found.</b>', $output);
		$output = str_replace('descriptionString', 'Sorry :(', $output);

		// Output
		echo($output);
	}
}


/*
// Build Function List (Insert All Functions Into DB - From PHP)

// Compile Functions Array
$functions = get_defined_functions();
$functions = $functions['internal'];

// Loop, Format and Insert
foreach ($functions as $function) {
	$function_name = str_replace("_", " ", $function);
	$function_name = ucwords($function_name);

	$query = '';
	$query = 'INSERT INTO search SET id = "", function = "'.$function.'", name = "'.$function_name.'"';

	$tutorial_db->query($query);
}
*/
?>