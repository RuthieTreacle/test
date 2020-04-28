<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once 'C:\xampp\htdocs\zoo\zoo\animal.php';
        USE Zoo\Animal; 
        $dog= new Animal('dog');
        $pig= new Animal('pig');
        $cat= new Animal('cat');
        $cow= new Animal('cow'); 
        
        $dog -> speak();
        ?>
    </body>
</html>
