<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>UTS BACKEND</title>
</head>
<body>
    <h2>XYZ Sales API End Point</h2>

    <?php


$requestUri = $_SERVER['REQUEST_URI'];
$uriSegments = explode('/', trim($requestUri, '/'));


$controllerName = ucfirst($uriSegments[0]) . 'Controller';
$controllerFile = 'src/Controller/CustomerController' . $controllerName . '.php';


if (file_exists($controllerFile)) {
    require_once $controllerFile;


    $controller = new $controllerName();


    if (isset($uriSegments[1])) {
        $methodName = $uriSegments[1];
        if (method_exists($controller, $methodName)) {

            $controller->$methodName();
        } else {

            header("HTTP/1.0 404 Not Found");
            echo "404 Not Found";
        }
    } else {

        header("HTTP/1.0 400 Bad Request");
        echo "400 Bad Request";
    }
} else {

    header("HTTP/1.0 404 Not Found");
    echo "404 Not Found";
}
?>
    
</body>
</html>