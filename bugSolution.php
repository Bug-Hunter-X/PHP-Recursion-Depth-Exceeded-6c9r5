```php
function processDataIterative(array $data): array {
    $stack = [$data];
    while (!empty($stack)) {
        $current = array_pop($stack);
        foreach ($current as $key => $value) {
            if (is_array($value)) {
                $stack[] = $value;
            }
        }
    }
    return $data; //This will return the original array
}

$data = [1, 2, [3, 4, [5, 6]]];
$processedData = processDataIterative($data);
print_r($processedData); //Correctly handles large arrays
```