function foo(array $arr) {
  foreach ($arr as $key => $value) {
    if ($value === 'hello') {
      unset($arr[$key]);
    }
  }
  return $arr;
}

$arr = ['a' => 'hello', 'b' => 'world'];
$result = foo($arr);
print_r($result); // Output: Array ( [b] => world )

$arr = ['a' => 'hello', 'b' => 'hello'];
$result = foo($arr);
print_r($result); // Output: Array ( )

$arr = ['hello', 'world'];
$result = foo($arr);
print_r($result); // Output: Array ( [1] => world )