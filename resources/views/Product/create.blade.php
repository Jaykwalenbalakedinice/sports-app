<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Create a Product</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>
                {{$error}}
            </li>
            @endforeach
        </ul>
        @endif
    </div>
    <form method="post" action="{{route('product.store')}}">
        @csrf
        @method('post')
        <div>
            <label>Product Name</label>
            <input type="text" name="productname" placeholder="Enter name">
        </div>
        <div>
            <label>Sports</label></label>
            <input type="text" name="sports" placeholder="Enter sports">
        </div>
        <div>
            <label>Price</label>
            <input type="text" name="price" placeholder="Enter price">
        </div>
        <div>
            <label>Description</label>
            <input type="text" name="description" placeholder="Enter description">
        </div>
        <div>
            <input type="submit" value="Save a new product">
        </div>
    </form>
</body>
</html>