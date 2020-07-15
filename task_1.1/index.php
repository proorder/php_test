<?php

function convertFullName($string)
{
    return preg_replace('/(.+)\s(.).+\s(.).+/', '$1 $2.$3.', $string);
}

echo convertFullName('Ivanov Ivan Ivanovich');
