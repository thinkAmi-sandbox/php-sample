<?php

$dom = new DOMDocument();

$comment = $dom->createTextNode('コメント');
$dom->appendChild($comment);

$dom->appendChild($dom->createElement('hr'));

$div = $dom->appendChild($dom->createElement('div', 'ハロー'));

$div->appendChild($dom->createElement('p', 'ワールド'));


//$html = $dom->saveHTML();
// => &#12467;&#12513;&#12531;&#12488;<hr><div>&#12495;&#12525;&#12540;<p>&#12527;&#12540;&#12523;&#12489;</p></div>

$html = mb_convert_encoding($dom->saveHTML(), 'utf-8', 'HTML-ENTITIES');
// => コメント<hr><div>ハロー<p>ワールド</p></div>

echo $html;
