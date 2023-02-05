<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    @include('admin.css')

    <style type="text/css">
        .div_center {
            text-align: center;
            padding-top: 40px;

        }


        .center {
            margin: auto;
            width: 50%;
            text-align: center;
            margin-top: 30px;
            border: 3px solid white;
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

                @if(session()->has('message'))

                <div class="alert alert-success">{{session()->get('message')}}</div>



                @endif
                <div class="div_center">
                    <h2>Add Category</h2>
                    <form action="{{url('add_category')}}" method="POST">
                        @csrf
                        <input type="text" placeholder="category name" name="category">
                        <input class="btn btn-primary" type="submit" name="submit" value="Add Category">
                    </form>
                </div>
                <table class="center">
                    <tr>
                        <td>Category</td>
                        <td>Action</td>
                    </tr>

                    @foreach($data as $data )

                    <tr>
                        <td>{{$data->category_name}}</td>
                        <td class="btn btn-danger"><a onclick="return confirm('Are you sure?')" href="{{url('delete_category',$data->id)}}">Delete</a></td>
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