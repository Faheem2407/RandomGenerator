<?php

namespace Faheem2407\RandomProgrammingLanguageGenerator;

class JokesGenerator
{
	public function __construct(){
	$jokes = [
		[
			"joke"=>"I'm on a seafood diet. I see food, and I eat it!",
		],
		[
			"joke"=>"What do you call a bear with no teeth? A gummy bear!",
		],
		[
			"joke"=>"I told my wife she should embrace her mistakes. She gave me a hug.",
		],
		[
			"joke"=>"Why don't scientists trust atoms? Because they make up everything!",
		],
		[
			"joke"=>"How does a penguin build its house? Igloos it together!",
		],
		[
			"joke"=>"Why did the scarecrow win an award? Because he was outstanding in his field!",
		],
		[
			"joke"=>"I'm reading a book on anti-gravity. It's impossible to put down!",
		],
		[
			"joke"=>"What do you call fake spaghetti? An impasta!",
		]
	];
	
	$joke = $jokes[array_rand($jokes)];
	$jokeName = $joke['joke'];
	
	echo 
	"<div style='width:200;text-align:center;font-size:30;background:#502D92;padding:5;'>
		<p style='color:#438899;font-size:20;'>$jokeName</p>
	</div>";
	
	}
}










