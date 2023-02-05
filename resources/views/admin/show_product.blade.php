<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    @include('admin.css')

    <style>
        .center {
            margin: auto;
            width: 50%;
            border: 2px solid white;
            text-align: center
        }
    </style>

</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
        <!-- partial -->
        @include('admin.header')

        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">

                <table class="center">
                    <tr>
                        <th>Product title</th>
                        <th>Description</th>
                        <th>Quantity</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Discount price</th>
                        <th>Product image</th>
                    </tr>


                    @foreach($product as $product)

                    <tr>
                        <td>{{product->title}}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>

                    @endforeach
                </table>
            </div>
        </div>

        <!-- container-scroller -->
        <!-- plugins:js -->
        @script('admin.script')
        <!-- End custom js for this page -->
</body>

</html>