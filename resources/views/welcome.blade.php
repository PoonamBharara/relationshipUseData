<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title>Laravel</title>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
        <!-- Styles -->
    
    </head>
    <body class="antialiased"style="background:lightgrey;">
        <div style="padding-bottom:200px;"></div> 
        <select id="getClass" class="filter" >
          <option class="filter" value="">Select Class</option>
          @foreach($extracteddata as $key => $value)
           <option value="{{$value->id}}">{{$value->name}}</option>
          @endforeach
        </select>
        <table class="table table-dark" style="margin:auto; width:50%;" >
          <thead>
            <tr >
              <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col">Address</th>
              <th scope="col">Customer Id</th>
            </tr>
          </thead>
        <tbody>

        @foreach($extracteddata as $key => $value)

        <tr>
          <td class="t-head" scope="row" value="{{$value->id}}"></td>
          <td class="t-head" value="{{$value->name}}"></td>
          <td class="t-head" value="{{$value->address}}"></td>
          <td class="t-head" value="{{$value->customer_id}}"></td>
        </tr>
          
        @endforeach


      </tbody>
    </table>
      <style>
          .filter{
            position: absolute;
            right: 357px;
            top: 153px;
            padding: 7px 20px;
            color: white;
            background-color: #202529;
          }
      </style>

      <script>

          // A $( document ).ready() block.
          $( document ).ready(function() {
              jQuery('#getClass').on('change', function(){
                value_id = this.value ;
             
                $.ajax({
                      url:"{{url('get-customer')}}",
                      type: "POST",
                      data: {
                      id: value_id,
                      _token: '{{csrf_token()}}' 
                      },
                      dataType : 'json',
                      success: function(result){
                        console.log(result);
                          // $('.t-head').html('<td></td>'); 

                         
                          $(".t-head").append('<option value="'+result.id+'">'+result.id+'</option>');
                          
                          
                      }
                  });
              });
          });
      </script>
    </body>
</html>
