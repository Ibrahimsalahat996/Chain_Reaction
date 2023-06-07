<?php
// firt Solution
//--------------------Salahat------------------ //
$array_of_number = [9, 4, 7, 1, 0, 6, 5, 2, 8, 3];
$sortedNumbers = FirstSorting($array_of_number);
echo 'firt Solution';
echo '<br>';
echo '-----------------------------';
echo '<br>';

print_r($sortedNumbers);


function FirstSorting($data)
{
    $count_array = count($data);
    for ($i = 0; $i < $count_array - 1; $i++) {
        $count_arrays = $count_array - $i - 1;
        for ($j = 0; $j <  $count_arrays; $j++) {
            if ($data[$j] > $data[$j + 1]) {
                //--------------------swap------------------ //
                $second_value = $data[$j];
                $data[$j] = $data[$j + 1];
                $data[$j + 1] = $second_value;
            }
        }
    }
    return $data;
}
//--------------------Salahat------------------ //

// second Solution
echo '<br>';
echo '<br>';
echo 'second Solution';
echo '<br>';
echo '-----------------------------';
echo '<br>';
$array_of_number = [9, 4, 7, 1, 0, 6, 5, 2, 8, 3];
$sortedNumbers = SecondSorting($array_of_number);
print_r($sortedNumbers);

function SecondSorting($data)
{
    $count_array = count($data);
    foreach ($data as $key => $val) {
        $minus = $count_array - $key - 1;
        for ($j = 0; $j < $minus; $j++) {
            if ($data[$j] > $data[$j + 1]) {
                //--------------------swap------------------ //
                $second_value = $data[$j];
                $data[$j] = $data[$j + 1];
                $data[$j + 1] = $second_value;
            }
        }
    }
    return $data;
}
