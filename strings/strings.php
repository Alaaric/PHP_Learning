<?php
$message1 = "0@sn9sirppa@#?ia'jgtvryko1";
$message2 = "q8e?wsellecif@#?sel@#?setuotpazdsy0*b9+mw@x1vj";
$message3 = "aopi?sgnirts@#?sedhtg+p9l!";

function decode($message)
{
$length = strlen($message);
$key = $length/2;
$rest = substr($message, 5, $key);
$final_string = str_replace('@#?', ' ', $rest);

return strrev($final_string);

};

echo decode($message1) . ' ' . decode($message2) . ' ' . decode($message3);
