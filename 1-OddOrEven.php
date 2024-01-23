<?php

function even_or_odd(int $n): string
{
     if ($n % 2) {
          return "Odd";
     } else {
          return "Even";
     }
}
echo even_or_odd(-1);
