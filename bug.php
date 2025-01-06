```php
function processData(array $data): array {
  foreach ($data as $key => $value) {
    if (is_array($value)) {
      $data[$key] = processData($value); // Recursive call
    }
  }
  return $data;
}

$data = [1, 2, [3, 4, [5, 6]]];
$processedData = processData($data);
print_r($processedData); // Unexpected behavior for large datasets
```