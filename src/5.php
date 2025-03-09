function calculate($numbers) {
    $total = 0;
    foreach ($numbers as $number) {
        $total += $number;
    }
    return $total;
}
echo calculate(array(2, 4, 6));