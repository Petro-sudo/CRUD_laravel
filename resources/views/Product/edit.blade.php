<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <h1>Edit Product</h1>
    
    <div>
         <!-- to check errors -->
         @if($errors->all())
         <ul>
            @foreach($errors->all() as $error)
            <p>{{$error}}</p>
            @endforeach
         </ul>
         @endif
    </div>
    <!-- To edit what you want to update DISPLAY DATA -->
    <form method="post" action="{{route('product.update',['product'=>$product])}}">
        @csrf
        @method('put')
        <label for="name">Name</label><br>
        <input type="text" name="name" id="name" placeholder="Enter name" value="{{$product->name}}"/><br>
        <label for="price">Price</label><br>
        <input type="text" name="price" id="price" placeholder="Enter price" value="{{$product->price}}"/><br>
        <label for="qty">Quantity</label><br>
        <input type="text" name="qty" id="qty" placeholder="Enter quantity" value="{{$product->qty}}"/><br>
        <label for="description">Description</label><br>
        <input type="text" name="description" id="description" placeholder="Enter description" value="{{$product->description}}"/><br>
        <br>
        <div>
            <input type="submit" value="Update" />
        </div>
    </form>
</body>

</html>