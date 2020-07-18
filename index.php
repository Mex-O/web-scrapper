<? php
	/*include('simple_html_dom.php');


	$html = file_get_html($'http://pokemondb.net/evolution');

	foreach($html->find('a[class=ent-name]') as $element)
	{
		echo $element->innertext . '<br/>'; //outputs bulbasaur, ivyasaur, etc...
	}*/

?>


<? php
$html = file_get_contents('http://pokemondb.net/evolution'); //get the html returned from the following url

$pokemon_doc = new DOMDocument();

libxml_use_internal_errors(TRUE); //disable libxml errors

if(!empty ($html)){
	//if any html is actually returned

	$pokemon_doc ->loadHTML($html);
	libxml_use_internal_errors(); //remove errors for yucky html

	$pokemon_xpath = new DOMXPath($pokemon_doc);

	//get all h2's with an id

	$pokemon_row = $pokemon_xpath->query('//h2[@id]');

	if($pokemon_row->length > 0){
		foreach($pokemon_row as $row){
			echo $row -> nodevalue . "<br/>";
		}
	}
}
?>