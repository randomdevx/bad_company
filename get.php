<?php

// File with the rest
$x = file_get_contents('http://collabedit.com/download?id=yrda4');

// Spacing for a new paragraph
// $x .= "\n\n";

// File with furniture per member
// $x .= file_get_contents('http://collabedit.com/download?id=axx59');

file_put_contents('README.md', $x);