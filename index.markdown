## Concatenate Strings

### Go

~~~ {.go}
string := 'one' + 'two'
~~~

### MySQL

~~~ {.sql}
SELECT CONCAT('one', 'two');
~~~

### PHP

~~~ {.php}
$string = 'one' . 'two';
~~~

### PostgreSQL

~~~ {.sql}
SELECT 'one' || 'two';
~~~

### Ruby

~~~ {.ruby}
string = 'one' + 'two'
~~~

## Convert String To Integer

### PHP

~~~ {.php}
$int = (int)'10';
~~~

### PostgreSQL

~~~ {.sql}
SELECT '10'::integer;
~~~

### Ruby

~~~ {.ruby}
int = '10'.to_i
~~~

## Print String

### Go

~~~ {.go}
import fmt

.
.

fmt.Print('string')
~~~

### PHP

~~~ {.php}
<?php 
echo 'string';
//or
print 'string';
//or
printf('%s', 'string');
?>
~~~

### Ruby

~~~ {.ruby}
puts 'string'
~~~

### SQL

~~~ {.sql}
SELECT 'string';
~~~

