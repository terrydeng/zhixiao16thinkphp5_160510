<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <title>Document</title>
        <style type="text/css">
            .box{
                background: #d8d8d8;
                border:2px solid #000;
                padding: 20px;
                position: relative;
            }
            .box div{
                background: red;
                padding: 20px;
                border:1px solid #000;
                margin-top: 10px;
    
            }
            .two{
                position: absolute;
                right:30px;
                top:30px;
            }
    
    
        </style>
    </head>
<body>
    <div  class="box">
        <div>绝对定位1</div>
        <div class="two">绝对定位2</div>
        <div>绝对定位3</div>
    </div>
</body>
</html>