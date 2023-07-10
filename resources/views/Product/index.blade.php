<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<h1>Product</h1>
<div>
    @if(session()->has('success'))
    <div>
        {{session('success')}}
    </div>
    @endif
</div>
<div>
    @if(session()->has('delete'))
    <div>
        {{session('delete')}}
    </div>
    @endif
</div>
<!-- DISPLAY DATA -->
<div>
<a href = "{{route('product.create')}}">Add New Products</a>
</div>
<div>
    <table border="1">
    <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>PRICE</th>
        <th>QUANTITY</th>
        <th>DESCRIPTION</th>
        <th>Edit</th>
        <th>Delete</th>

    </tr>

    @foreach($products as $product)
    <tr>
        <td>{{$product->id}}</td>
        <td>{{$product->name}}</td>
        <td>{{$product->price}}</td>
        <td>{{$product->qty}}</td>
        <td>{{$product->description}}</td>
        <td><a href = "{{route('product.edit', ['product'=>$product])}}">Edit</a></td>
        <td>
            <form method = "post" action = "{{route('product.delete',['product' => $product])}}">
            @csrf
            @method('delete')
                <input type = "submit" value = "Delete"/>
            </form>
        </td>
    </tr>
    @endforeach
    </table>
</div>
</body>

</html>