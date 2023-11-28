<x-app-layout>
</x-app-layout>

<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.admincss')
    <!-- Required meta tags -->
</head>

<body>
<div class="container-scroller">
        <div class="container-fluid page-body-wrapper">

   @include('admin.navbar')
   <h1>User data</h1>
   <div style="position:relative; top: 60px; right:-80px ">

    <table bgcolor="grey" border="3px">
        <tr>
            <th  style="padding:30px">Name</th>
            <th style="padding:30px">Email</th>
            <th style="padding:30px">Action</th>
        </tr>
        @foreach($data as $data)
        <tr align="center">
            <td>{{$data->name}}</td>
            <td>{{$data->email}}</td>
 @if($data->usertype=='0')
            <td><a href ="{{url('/deleteuser',$data->id)}}">Delete</a></td>
            @else
<td><a>Not Allowed</a></a></td>
@endif

        </tr>
        @endforeach
    </table>
   </div>
   <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    @include('admin.adminscript')
    <!-- container-scroller -->
    <!-- plugins:js -->
    <!-- End custom js for this page -->
</body>

</html>
