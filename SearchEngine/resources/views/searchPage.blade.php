<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{url('/search')}}" method = "post" role="Search">
        @csrf
        <div align="center">
            <input type="text"  size="100" placeholder="Search By Email or Name" name = "searchInfo" >
            <input type="submit" value="Search">
        </div>
    </form>
    <div>
        @if(isset($details))
            <b>The search result for the query {{$query}} are : </b>
            <h1>Sample User Details ::</h1>
            <table>
                <tr>
                    <td>User Name</td>
                    <td>User Email </td>
                </tr>
                @foreach($details as $user)
                   <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                   </tr>
                @endforeach
            </table>
        @elseif(isset($message))
            <h1>{{$message}}</h1>
        @endif
    </div>
</body>
</html>
