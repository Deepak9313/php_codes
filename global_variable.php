<?php
require_once __DIR__ . '/vendor/autoload.php';
use Dotenv\Dotenv;
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();
echo $_ENV["DB_NAME"];
/*
There are some variables which we will use in php
$GLOBALS = $GLOBALS is a PHP super global variable which is used to access global variables from anywhere in the PHP script
$_SERVER = This is a PHP super global variable which holds information about headers, paths, and script locations.
$_REQUEST = $_REQUEST is a PHP super global variable which is used to collect data after submitting an HTML form.
$_POST = (This hide the data from the url) $_POST is a PHP super global variable which is used to collect form data after submitting an HTML form with method="post". 
$_GET = (This show the data in the url) $_POST is a PHP super global variable which is used to collect form data after submitting an HTML form with method="post". 
$_FILES = (This variable is used when we deal with files) this give four tue like name,size,tmp_name
$_ENV = This is used to get the enviromental variables syntax ($_ENV["API_KEY"])
$_COOKIE = This is used to get the cookie value 
$_SESSION = This is a very important global variable because this give the value of a specified username when we deal with sessions in php
*/
// Global Variable keyword usage
$x = 30;
function val(){
    return $GLOBALS["x"];
}
echo val();
// _SERVER variable keyword usage
/*
some basic coomands in this keyword
$_SERVER['PHP_SELF']	Returns the filename of the currently executing script
$_SERVER['GATEWAY_INTERFACE']	Returns the version of the Common Gateway Interface (CGI) the server is using
$_SERVER['SERVER_ADDR']	Returns the IP address of the host server
$_SERVER['SERVER_NAME']	Returns the name of the host server (such as www.w3schools.com)
$_SERVER['REQUEST_METHOD']	Returns the request method used to access the page (such as POST)
$_SERVER['REQUEST_TIME']	Returns the timestamp of the start of the request (such as 1377687496)
$_SERVER['QUERY_STRING']	Returns the query string if the page is accessed via a query string
$_SERVER['HTTP_ACCEPT']	Returns the Accept header from the current request
$_SERVER['REMOTE_ADDR']	Returns the IP address from where the user is viewing the current page
$_SERVER['REMOTE_HOST']	Returns the Host name from where the user is viewing the current page
$_SERVER['REMOTE_PORT']	Returns the port being used on the user's machine to communicate with the web server
$_SERVER['SCRIPT_FILENAME']	Returns the absolute pathname of the currently executing script
$_SERVER['SERVER_PORT']	Returns the port on the server machine being used by the web server for communication (such as 80)
$_SERVER['SCRIPT_NAME']	Returns the path of the current script
$_SERVER['SCRIPT_URI']	Returns the URI of the current page
*/
echo $_SERVER["REQUEST_METHOD"];
// Request variable keyword usage

?>
<html>
<body>
<h1>Form using Post method</h1>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>
<h1>Form using Get method</h1>
<form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Email: <input type="text" name="fname">
  <input type="submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $name = $_REQUEST['fname'];
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo $name;
  }
}
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // collect value of input field
    $name = $_GET['fname'];
    if (empty($name)) {
      echo "Name is empty";
    } else {
      echo $name;
    }
  }
  echo "<br><br>";
  echo $_ENV['API_KEY'];
?><br><br>
<a href="https://newsapi.org/v2/everything?q=tesla&from=2023-08-06&sortBy=publishedAt&apiKey=<?php echo $_ENV['API_KEY'] ?>" style="text-decoration: none;font-size:34px">Click to Open API Key using env variable</a>
</body>
</html>