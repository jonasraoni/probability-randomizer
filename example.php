<?php
/*
 * Probability Randomizer: generates randomized data based on fixed probabilities
 * Jonas Raoni Soares da Silva <http://raoni.org>
 * https://github.com/jonasraoni/probability-randomizer
 */
 
include( 'ProbabilityRandomizer.php' );

$prExample = new ProbabilityRandomizer;

$prExample->add( 'I have more chances than everybody :]', 30 );
$prExample->add( 'I have good chances', 10 );
$prExample->add( 'I\'m difficult to appear...', 1 );

for( $x = 10; $x--; print $prExample->get() . '<br />' );