<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>{{$details['title']}}</title>
  </head>
  <body>
    <div>
    <table border = "1">
        <tr>
            <td>Id</td>
            <td>{{ $details['guid'] }}</td>
        </tr>
        <tr>
            <td>Author</td>
            <td>{{ $details['author'] }}</td>
        </tr>
        <tr>
            <td>Title</td>
            <td>{{ $details['title'] }}</td>
        </tr>
        <tr>
            <td>Date</td>
            <td>{{ $details['date'] }}</td>
        </tr>
        <tr>
            <td>Other Data</td>
            <td>{!!$details['body']!!}</td>
        </tr> 
    </table>
</div>
    <br>
    <br>
    <a href="{{URL::to('/')}}">Home</a>
  </body>
</html>
