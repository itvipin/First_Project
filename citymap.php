<?php

function printCities($cityMap)
{
    foreach ($cityMap as $state => $city)
    {
        $CityName = count($city);
        echo "$state -> ";

        {
            if ($CityName === 0)
            {
               echo "City not foumd";
            }
            else
            {
                for ($i = 0;$i < $CityName;$i++)
                {
                    echo "$city[$i]";
                    if ($i < ($CityName) - 1)
                    {
                        echo ",";
                    }

                }
            }
            echo "<br>";
        }
    }
}

function sumNumber($number1,$number2)
{
	return $number1+$number2;
}
	






