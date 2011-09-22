## Arrays

## Associative Arrays (hashes)

## Numbers

### Addition

#### Go

~~~ {.go}
num := 3 + 1
~~~

#### PHP

~~~ {.php}
<?php
$num = 3 + 1;
?>
~~~

#### Ruby

~~~ {.ruby}
int = 3 + 5
~~~

#### SQL

~~~ {.sql}
SELECT 3 + 5;
~~~

### Exponentiation

#### Go

~~~ {.go}
import math

.
.

num := math.Pow(5.0, 2.0)
~~~

#### PHP

~~~ {.php}
$num = pow(5, 2); // 5^2
~~~

#### Ruby

~~~ {.ruby}
num = 5 ** 2
~~~

#### SQL

~~~ {.sql}
SELECT pow(5, 2);
~~~

### Modulus

#### Go

~~~ {.go}
num := 5%2
~~~

#### PHP

~~~ {.php}
<?php
$int = 5 % 2;
?>
~~~

#### Ruby

~~~ {.ruby}
int = 5 % 2
~~~

#### SQL

~~~ {.sql}
SELECT MOD(5, 2);
~~~

## Strings

### Concatenate Strings

#### Go

~~~ {.go}
string := 'one' + 'two'
~~~

#### MySQL

~~~ {.sql}
SELECT CONCAT('one', 'two');
~~~

#### PHP

~~~ {.php}
$string = 'one' . 'two';
~~~

#### PostgreSQL

~~~ {.sql}
SELECT 'one' || 'two';
~~~

#### Ruby

~~~ {.ruby}
string = 'one' + 'two'
~~~

### Convert String To Integer

#### PHP

~~~ {.php}
$int = (int)'10';
~~~

#### PostgreSQL

~~~ {.sql}
SELECT '10'::integer;
~~~

#### Ruby

~~~ {.ruby}
int = '10'.to_i
~~~

### Print String

#### Go

~~~ {.go}
import fmt

.
.

fmt.Print('string')
~~~

#### PHP

~~~ {.php}
<?php 
echo 'string';
//or
print 'string';
//or
printf('%s', 'string');
?>
~~~

#### Ruby

~~~ {.ruby}
puts 'string'
~~~

#### SQL

~~~ {.sql}
SELECT 'string';
~~~

