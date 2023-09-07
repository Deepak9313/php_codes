<?php
# Sometimes a error will produced in run time to take a backup that if some error occured
# we will be ready for that so exception handling play a vital role to catch error
/*
we have some keywords in exception handling
throw => statement allows a user defined function or method to throw an exception. When an exception is thrown, the code following it will not be executed.
catch => is used to catch the thrown exception
syntax for implementation
 try {
            code that can throw exceptions
        } catch(Exception $e) {
            code that runs when an exception is caught
        } finally {
            code that always runs regardless of whether an exception was caught
}
*/
function divide($num1,$num2){
    if($num1 == 0){
        throw new Exception("Division by zero");
    }
    return $num1/$num2;
}
try{
    echo divide(0,5);
}catch(Exception $ex){
    $code = $ex->getCode(); // return the exception code
    $message = $ex->getMessage(); // to get Exception message
    $file = $ex->getFile(); // to get the file path
    $line = $ex->getLine(); // to get the line number
    echo "Exception thrown in $file on line $line: [Code $code]
    $message";
}finally{
    echo "Process Completed";
}
?>