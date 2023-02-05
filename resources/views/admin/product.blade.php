<!DOCTYPE html>
<html lang="en">

<head>

    <style type="text/css">
        .div_center {
            text-align: center;
            padding-top: 30px;
        }

        label {
            display: inline-block;
            width: 200px;
        }

        .div_design {
            padding-bottom: 15px;
        }
    </style>
    <!-- Required meta tags -->
    @include('admin.css')
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


                @if(session()->has('message'))

                <div class="alert alert-success">{{session()->get('message')}}</div>



                @endif
                <h1>Add Product</h1>

                <form action="{{url('/add_product')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="div_design"></div>
                    <div class="div_design">
                        <label for="">Product title</label>
                        <input type="text" name="title">
                    </div>
                    <div class="div_design">
                        <label for="">Product description</label>
                        <input type="text" name="description">
                    </div>
                    <div class="div_design">
                        <label for="">Product price</label>
                        <input type="number" name="price">
                    </div>

                    <div class="div_design">
                        <label for="">ِDiscount Price:</label>
                        <input type="number" name="discount_price">
                    </div>
                    <div class="div_design">
                        <label for="">Product Quantity</label>
                        <input type="number" class="text-color" name="quantity">
                    </div>
                    <div class="div_design">
                        <label for="">Product Category</label>

                        <select class="text-color" name="category">

                            @foreach ($category as $category)
                            <option value="{{$category->category_name}}">{{$category->category_name}}</option>

                            @endforeach
                        </select>
                    </div>
                    <div class="div_design">
                        <label for="">Product Image Here</label>
                        <input type="file" name="image">
                    </div>

                    <div class="div_design">
                        <input class="btn btn-primary" value="Add product " type="submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @script('admin.script')
    <!-- End custom js for this page -->
</body>

</html>