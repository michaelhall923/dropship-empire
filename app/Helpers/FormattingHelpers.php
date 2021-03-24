<?php

if ( !function_exists('money') )
{
    function money($amount)
    {
		return '$' . number_format($amount, 2);
	}
}

if ( !function_exists('excerpt') )
{
    function excerpt($description, $max_length = 128)
    {
        if (strlen($description) < $max_length) {
            return $description;
       } else {

          $new = wordwrap($description, $max_length-2);
          $new = explode("\n", $new);

          $new = $new[0] . '...';

          return $new;
       }
    }
}
