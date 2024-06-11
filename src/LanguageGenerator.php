<?php

namespace Faheem2407\RandomProgrammingLanguageGenerator;

class LanguageGenerator
{
	public function __construct(){
	$languages = [
		[
			"language"=>"Python",
			"quote"=> "Where indentation is not just for neatness, it's a way of life."
		],
		[	
			"language"=>"JavaScript",
			"quote"=> "Making web pages dance since the '90s."
		],
		[
			"language"=>"Java",
			"quote"=>	"The coffee of programming languages - write once, run before you finish your cup."
		],
		[
			"language"=>"C++",
			"quote"=> "C++: because sometimes you just need a little more ++ in your life."
		],
		[
			"language"=>"C",
			"quote"=> "The bedrock of systems programming."
		],
		[
			"language"=>"Ruby",
			"quote"=> "Making programmers happier than a cat in a cardboard box."
		],
		[
			"language"=>"Swift",
			"quote"=> "So fast, it's already finished your app before you hit compile"
		],
		[
			"language"=>"Go",
			"quote"=>"The language is so simple even your grandma can write concurrent code."
		],
		[
			"language"=>"R",
			"quote" => "Making data analysis more fun than a barrel of monkeys."
		],
		[
			"language"=>"PHP",
			"quote"=>"Like duct tape for the web - it might not be pretty, but it gets the job done."
		],
		[
			"language"=>"HTML",
			"quote"=>"Skeleton of webpage"
		],
		[
			"language"=>"CSS",
			"quote"=>"paint your on canvas as you like"
		],
		[
			"language"=>"SQL",
			"quote"=> "sometimes you just need to talk to databases in a language they understand."
		]
	];
	
	$language = $languages[array_rand($languages)];
	$languageName = $language['language'];
	$languageQuote = $language['quote'];
	
	echo "
	<div style='width:200;text-align:center;font-size:30;color:#99f906;background:black;padding:5;'>$languageName
	</div> 
	<p style='color:#0066ff;font-size:20;'>$languageQuote</p>
	
	";
	
	}
}









