<?php

$x = file_get_contents('http://collabedit.com/download?id=yrda4');

file_put_contents('README.md', $x);