<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Writing PHP, Notes 02</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <?php 

        /* PHP's echo() method is similar to Javascript's document.write() method. It displays content inside of its round braces onto the document. */
        echo('Some PHP will display here.');

        /* localhost:8888/notes-02-operators/index.php */

        /* In PHP, variables are declared with a dollar sign instead of the 'var' keyword. */
        $myVariable = 34;
        $yourVariable = 21;

        echo($yourVariable);

        /* PHP can, of course, do math functions as well. */

        $finalVariable = $myVariable + $yourVariable;
        echo('<br>' . $finalVariable);

        /* Concatenation is the act of adding one chunk of code to another chunk of code. It is often used in Javascript and PHP to form strings. In PHP, you concatenate using a dot (.). In Javascript, you concatenate using a plus (+) */
        $firstString = 'Jason\'s favorite color';
        $secondString = ' is blue.';
        echo('<br>' . $firstString . $secondString);

        ?>

        <h1>Javascript Advanced Operators</h1>        

        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
