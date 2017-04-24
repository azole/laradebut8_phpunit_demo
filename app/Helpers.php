<?php

function array_until(array $array, $search)
{
    $position = array_search($search, $array);

    return array_slice($array, 0, $position);
}