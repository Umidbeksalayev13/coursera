<!DOCTYPE html>
<html>
<head>
    <title>Getting Started with PHP</title>
</head>
<body>

<h2>Welcome to my PHP test page</h2>

<p>This is a simple form that sends data to check.php</p>

<form method="get" action="check.php">
    <label>Enter a number:</label>
    <input type="text" name="num" required>
    <input type="submit" value="Submit">
</form>

<h3>PHP Output Below:</h3>

<pre>
<?php
$txt = "Hello from PHP!";
$number = 42;

echo "Text: $txt\n";
echo "Number: $number\n";
echo "This text is inside the <pre> tag.\n";
?>
</pre>

</body>
</html>

<!-- Birinchi javoblari -->
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
  <title>Umidbek Salayev</title>
</head>
<body>
<div style="color:#0000FF">
<h1><span style="color:blue">A Header</span></h1>
</div>
<p>
These pages are intended to be explored in the 
developer console of your browser.
</p>
<p>
A paragraph of text.
Whatever line wrapping that is present in the
file                                   or lots
of extra spaces in the file are generally ignored
and the text is re-wrapped based on the width 
of browser.
</p>
<p>You can add a style like <strong>bold</strong>
    to some text by enclosing it in the <em>appropriate</em>
    tag.
</p>
<p>
    You can even mark some text so that it is a 
    <ul><li><a href="lists.htm">link to another page</a>.</li></ul>

<p>
<pre>
If you        use the pre tag
   The browser respects spaces
and
line
ends
        and shows the text in a
        monospace font.



</pre>

<p>
This material is part of the 
<ul><li><a href="https://www.wa4e.com/" target="_blank">
Web Applications for Everybody (WA4E)
    </a></li></ul> website and is copyright Creative
Commons Attribution.  You are welcome to 
reuse and remix these examples for your
own use with attribution.
You can download a ZIP file of the 
   <ul><li><a href="../html.zip">source code</a></li></ul>
for these examples.


</body> -->