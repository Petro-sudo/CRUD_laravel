<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <h1>Create Product</h1>
    
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
    <form method="post" action="{{route('product.store')}}">
        @csrf
        @method('post')
        <label for="name">Name</label><br>
        <input type="text" name="name" id="name" placeholder="Enter name" /><br>
        <label for="price">Price</label><br>
        <input type="text" name="price" id="price" placeholder="Enter price" /><br>
        <label for="qty">Quantity</label><br>
        <input type="text" name="qty" id="qty" placeholder="Enter quantity" /><br>
        <label for="description">Description</label><br>
        <input type="text" name="description" id="description" placeholder="Enter description"><br>
        <br>
        <div>
            <input type="submit" value="Save a Product" />
        </div>
    </form>
</body>

</html>