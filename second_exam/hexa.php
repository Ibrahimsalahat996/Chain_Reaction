<?php
//--------------------Salahat------------------ //
function Hex_Function_check($data)
{
    if ($data[0] !== '#') {
        return 'false';
    }

    if (Count_Digit($data) !== 7) {

        return 'false';
    }
    for ($i = 1; $i < 7; $i++) {
        $char = $data[$i];


        if (!Check_The_Digit($char)) {
            return 'false';
        }
    }
    return 'true';
}

print(Hex_Function_check("#CD5C5C"));
echo '<br>';
print(Hex_Function_check("#EAECEE"));
echo '<br>';
print(Hex_Function_check("#eaecee"));
echo '<br>';
print(Hex_Function_check("#CD5C58C"));
echo '<br>';
print(Hex_Function_check("#CD5C5Z"));
echo '<br>';
print(Hex_Function_check("#CD5C&C"));
echo '<br>';
print(Hex_Function_check("CD5C5C"));
echo '<br>';

function Check_The_Digit($char)
{

    $result = ($char >= '0' && $char <= '9') ||
        ($char >= 'A' && $char <= 'F') ||
        ($char >= 'a' && $char <= 'f');
    return $result;
}
function count_digit($digits)
{
    $count = 0;
    for ($i = 0; isset($digits[$i]); $i++) {
        $count++;
    }

    return $count;
}
//--------------------Salahat------------------ //
