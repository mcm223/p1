<?php
$quotes = [
	'I love deadlines. I like the whooshing sound they make as they fly by.<footer class="blockquote-footer">Douglas Adams</footer>',
	'If you are distressed by anything external, the pain is not due to the thing itself, but to your estimate of it; and this you have the power to revoke at any moment.<footer class="blockquote-footer">Marcus Aurelius <cite title="Source Title">(Meditations)</cite></footer>',
	'Hell is empty and all the devils are here!<footer class="blockquote-footer">William Shakespeare <cite title="Source Title">(The Tempest)</cite></footer>',
	'The struggle itself toward the heights is enough to fill a man\'s heart. One must imagine Sisyphus happy.<footer class="blockquote-footer">Albert Camus <cite title="Source Title">(The Myth of Sisyphus)</cite></footer>',
	'It\'s a long way to the top if you want to rock \'n roll.<footer class="blockquote-footer">AC/DC</footer>'
];

function echoArray(array $arr){
	echo $arr[array_rand($arr)];
}
