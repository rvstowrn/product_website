<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAND fast | Products</title>
    <style>
        #form{
            position:absolute;
            top:50%;
            left:50%;
            transform:translate(-50%,-50%);
            display:flex;
            flex-direction:column;
            box-shadow:0 0 5px black;
            padding:10px;
        }
        #form > input{
            border:1px solid;
        }
    </style>
</head>
<body>
    <form id="form" action="./server_scripts/product_handler.php" method="POST" enctype="multipart/form-data">
        <h4>Product Name</h4>
        <input type='text' name='name'>
        <h4>Product Image</h4>
        <input name='imglink' type='file'>
        <h4>Product Description</h4>
        <textarea name='description'></textarea><br>
        <button>submit</button>
    </form>
</body>
</html>