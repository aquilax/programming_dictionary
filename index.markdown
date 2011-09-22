## Concatenate strings

### PostgreSQL

~~~ {.sql}
SELECT 'one' || 'two';
~~~

### MySQL
~~~ {.sql}
SELECT CONCAT('one', 'two');
~~~

### Ruby
~~~ {.ruby}
string = 'one' + 'two'
~~~

### PHP
~~~ {.php}
$string = 'one' . 'two';
~~~

### Go
~~~ {.go}
string := 'one' + 'two'
~~~


## Convert string to integer

### PostgreSQL
~~~{.sql}
SELECT '10'::integer;
~~~

### Ruby
~~~{.ruby}
int = '10'.to_i
~~~

### PHP
~~~{.php}
$int = (int)'10';
~~~