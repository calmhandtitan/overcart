<!DOCTYPE html>
<html>
    <head>
        <title>Overcart Laravel Assignment</title>

        <!-- <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css"> -->

        <style>
            html, body {
                height: 100%;
            }

            body {
                padding: 5;
                width: 100%;
                font-weight: 100;
                font-family: 'Times New Roman';
                /*align-content: center;*/
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 20px;
            }
        </style>
    </head>
    <body>
      <div>
        @foreach ($result as $entry)
          <a href="{{URL::to('about',array('id'=>$entry['guid']))}}">
            <div class="title">
              Title: {{ $entry['title'] }}<br />
            </div>
            Author: {{ $entry['author'] }} <br /> 
            Date: {{$entry['date']}} <br />
        </a>
        <br/>
        <br/>
        @endforeach
      </div>
    </body>
</html>
