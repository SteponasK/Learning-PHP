<?php

$favoriteColor = 'red';
// $color = isset($favoriteColor) ? $favoriteColor : 'blue';

// if what's on left is null ($favoriteColor), then value is gonna be set to what's on right ('blue')
//$color = $favoriteColor ?? 'blue'; // same as ternary above

$color = isset($favoriteColor) ? $favoriteColor : (isset($secondFavoriteColor) ? $secondFavoriteColor : 'blue');
$color = $favoriteColor ?? $secondFavoriteColor ?? 'blue'; // same as above
echo $color;
