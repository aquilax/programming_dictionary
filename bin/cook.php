<?php 

if (count($argv) < 2){
  print('Please, set base path.'.PHP_EOL);
  exit(1);
}

$dir = $argv[1];

if (!file_exists($dir)){
  printf('Error: Directory "%s" not found!'.PHP_EOL, $dir);
  exit(2);
}

$dir = rtrim($dir, '/').'/'; //mandatory trailing slash

$langs = array(
  'php' => array('PHP', '.php'),
  'rb' => array('Ruby', '.ruby'),
  'go' => array('Go', '.go'),
  'psql' => array('PostgreSQL', '.sql'),
  'mysql' => array('MySQL', '.sql'),
  'sql' => array('SQL', '.sql'),
);

function processFile($dir, $file, $level){
  $c = file_get_contents($dir.$file);
  $ext = pathinfo($file, PATHINFO_EXTENSION);
  $l = ucwords($ext);
  $f = '.'.$ext;
  global $langs;
  if (isset($langs[$ext])){
    $l = $langs[$ext][0];
    $f = $langs[$ext][1];
  }
  echo str_repeat('#', $level).' '.$l.PHP_EOL;
  echo PHP_EOL;
  echo '~~~ {'.$f.'}'.PHP_EOL;
  echo trim($c).PHP_EOL;
  echo '~~~'.PHP_EOL;
  echo PHP_EOL;
}

function process($dir, $name = '', $level = 2){
  $list = scandir($dir);
  if ($name){
    echo str_repeat('#', $level-1).' '.ucwords(str_replace('_', ' ', $name)).PHP_EOL.PHP_EOL;
  }
  foreach ($list as $row){
    if ($row != '.' && $row != '..'){
      if (is_dir($dir.$row)) {
        process($dir.$row.'/', $row, $level+1);
      } else {
        processFile($dir, $row, $level);
      }
    }
  }
}

process($dir)


?>
