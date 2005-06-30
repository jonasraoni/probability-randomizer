<?php
/*
 * Probability Randomizer: generates randomized data based on fixed probabilities
 * Jonas Raoni Soares da Silva <http://raoni.org>
 * https://github.com/jonasraoni/probability-randomizer
 */
 
header( 'Content-Type: text/plain' );
include 'ProbabilityRandomizer.php';

$prExample = new ProbabilityRandomizer;

$data = array(
	array( 'G', 30, 0 ),
	array( 'F', 20, 0 ),
	array( 'E', 10, 0 ),
	array( 'D', 3, 0 ),
	array( 'C', 12, 0 ),
	array( 'B', 15, 0 ),
	array( 'A', 25, 0 )
);

for( $i = sizeof( $data ); $i--; $prExample->add( $i, $data[$i][1] ) );


$testMultiplier = 100;

for( $total = $i = $prExample->universe * $testMultiplier; $i--; ){
 	$data[  $prExample->get() ][ 2 ]++;
}

print <<<END
Permutations Sum: \t$prExample->universe
Test Mutiplier: \t$testMultiplier
TOTAL SAMPLES: \t\t$total

Data\tProbability\tMatches\t\tExpected Ratio\tReal Ratio\tPerfection
END;


for( print "\n", $i = sizeof( $data ); $i--; print
	$data[$i][0] . "\t"
	. $data[$i][1] . "\t\t"
	. $data[$i][2] . "\t\t"
	. round( $expectedRatio = $data[$i][1] / $total * 100 * $testMultiplier, 2 ) . "%\t\t"
	. round( $realRatio = $data[$i][2]/$total * 100, 2 ) . "%\t\t"
	. round( ( $realRatio > $expectedRatio ? 2*$expectedRatio - $realRatio : $realRatio ) / $expectedRatio * 100, 2 )
	. "%\n"
);