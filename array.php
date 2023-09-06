<?php
#array is used to store the data in the single variable
$fruits = array("banana","apple","pear");
echo ($fruits[0]);
#count is used to count the items in an array
#array_chink = splits an array into chunks of arrays
#array_combine = it arrange the one array to key and second to vlaue
#array_count_values = count all values of an array
#array_diff = returns the differences
#array_keys = returns keys of an array
#array_map = as like a js in map
#array_merge = merge one or more array into one array
#array_multisort = sort multiple or multi-dimensional arrays
#array_pad = insets a specified number of items,with a specified value to an array
$a = array("a"=>"red","green");
print_r(array_pad($a,5,'aqua'));
#array_pop = delete  the item from last
#array_product = calculate the product of the calues
$val = array(7,8,10);
print_r(array_product($val)."<br>");
#array_push = array is used to insert first
#array_reduce = returns an array as a string
#array_search = search an array for a given value and return the key
echo(array_search("red",$a));
#array_shift = same as js shift remove first element
#array_slice = reove and replace specified elements
#array_unique = remove duplicate entry
#array_values = return all the values
#asort = sort an assocaite array in ascending order
#compact = convert the items in the array mostly used in laravel framework
#in_array = check for value in an array
#key = fetches a key from an array
#range() = creates an array containing a range of elements

?>