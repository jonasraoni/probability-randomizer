# Probability Randomizer

Generates randomized data based on fixed probabilities

1. Include the main class source file:

```php
require_once 'ProbabilityRandomizer.php';
```

2. Instanciate the class  

```php
$prExample = new ProbabilityRandomizer;
```

3. Add items to the class using the "add( data, probability )" method. The first parameter can be any data defined by you, the second parameter defines the probability of this "data" appear in the results.

```php
$prExample->add( "I have more chances than everybody :]", 20 );
$prExample->add( "I have good chances", 10 );
$prExample->add( "I'm difficult to appear...", 1 );
```

4. At this point, everything is ready. Just call the "get" method. It will choose one between the previously added items relying on the probability level and will return the "data" assigned to it.

```php
for( $x=10; $x--; print $prExample->get() . '<br />' );
```

Sample output:

>I have more chances than everybody :]  
I have more chances than everybody :]  
I have more chances than everybody :]  
I'm difficult to appear...  
I have good chances  
I have more chances than everybody :]  
I have more chances than everybody :]  
I have more chances than everybody :]  
I have good chances  
I have good chances