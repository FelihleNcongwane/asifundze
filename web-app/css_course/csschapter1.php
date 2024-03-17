<!DOCTYPE html>
<html lang="en">
<head>
<?php
		include "nav.php";
	?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asifundze: Chapter One</title>
    <link rel="stylesheet" href="csscourses.css"> 
	
</head>
<body>
    <header id="head" class="secondary">
        <div class="container">
            <div class="row">
                <div>
                    <h1>CSS Chapter 1</h1>
                </div>
            </div>
        </div>
    </header>
    <div class="container-fluid">
        <div class="row">
            <div>
                <h1>What is CSS?</h1><br>
                <ul>
                    <li>CSS stands for Cascading Style Sheets</li>
                    <li>CSS describes how HTML elements are to be displayed on screen, paper, or in other media</li>
                    <li>CSS saves a lot of work. It can control the layout of multiple web pages all at once</li>
                    <li>External stylesheets are stored in CSS files</li>
                </ul>
<hr>
                <h1>Why Use CSS?</h1>
                <p>CSS is used to define styles for your web pages, including the design, layout and variations in display for different devices and screen sizes. </p>
<hr>
                <h1>CSS Syntax</h1>
                <p>A CSS rule-set consists of a selector and a declaration block:</p>
                <img src="../images/syntax.png" alt="CSS Syntax Example">
                <p>The selector points to the HTML element you want to style.</p>
                <p>The declaration block contains one or more declarations separated by semicolons.</p>
                <p>Each declaration includes a CSS property name and a value, separated by a colon.</p>
                <p>A CSS declaration always ends with a semicolon, and declaration blocks are surrounded by curly braces.</p>
                <p>In the following example all &lt;p&gt; elements will be center-aligned, with a red text color:</p>
                <h4><b>Example</b></h4>
                <a href="compiler.php" class="btn">Try it out in the Compiler >></a>
<hr>
                <h1>The id Selector</h1>
                <p>The id selector uses the id attribute of an HTML element to select a specific element.</p>
                <p>The id of an element should be unique within a page, so the id selector is used to select one unique element!</p>
                <p>To select an element with a specific id, write a hash (#) character, followed by the id of the element.</p>
                <p>The style rule below will be applied to the HTML element with id="para1":</p>
                <h4><b>Example</b></h4>
                <a href="compiler.php" class="btn">Try it out in the Compiler >></a>
<hr>
                <h1>The class Selector</h1>
                <p>The class selector selects elements with a specific class attribute.</p>
                <p>To select elements with a specific class, write a period (.) character, followed by the name of the class.</p>
                <p>In the example below, all HTML elements with class="center" will be red and center-aligned:</p>
                <h4><b>Example</b></h4>
                <a href="compiler.php" class="btn">Try it out in the Compiler >></a>
<hr>
                <h1>CSS Comments</h1>
                <p>Comments are used to explain the code, and may help when you edit the source code at a later date.</p>
                <p>Comments are ignored by browsers.</p>
                <p>A CSS comment starts with /* and ends with */. Comments can also span multiple lines:</p>
                <h4><b>Example</b></h4>
                <a href="compiler.php" class="btn">Try it out in the Compiler >></a>
            </div>
        </div>
    </div>
<hr>

<br>
<a href="csschapter2.php" class="btn" style="margin-left: 10px; margin-top: 5px;">Chapter 2>></a>


</body>
</html>
