<?php
$score = [2, 12, 54, 13, 42, 7, 22, 60];
$limit = 42;

$filteredScore = array_filter($score, function (int $value) use ($limit) {
    return $value >= $limit;
});

print_r([
    $score, $filteredScore
]);
?>
