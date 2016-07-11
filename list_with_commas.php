<?php

$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

$physicistsArray = explode(', ', $physicistsString);

$pop = array_pop($physicistsArray);

array_push($physicistsArray, 'and', $pop);

$famousFakePhysicists = implode(', ', $physicistsArray);

$famousFakePhysicists = str_replace('and,', 'and', $famousFakePhysicists);

 echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}.\n";