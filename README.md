# Road semaphore kata

Just a simple kata that simulate a road semaphore

```php
$semaphore = new City\Semaphore(new City\GreenState());
$i = 0;
do {
    echo "{$semaphore->getState()->emit()}\n";
    $semaphore->step();
    $i++;
} while($i < 10);
```
