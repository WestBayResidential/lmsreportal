<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">

        <title>Document</title>

        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
        

    </head>


    <body>
        <div class="container">

            <h1>Certificate Awards</h1>

            <table class="table">

                <tbody>

                    @foreach ($certawards as $certaward)
                        
                        <tr>
                        
                            <td>{{ $certaward->lastname }}</td>
                            <td>{{ $certaward->firstname }}</td>
                            <td>{{ $certaward->data }}</td>
                            <td>{{ $certaward->name }}</td>
                            <td>{{ $certaward->code }}</td>
                            <td>{{ $certaward->award }}</td>
                        
                        </tr>

                    @endforeach
                
                
                </tbody>    
            
            
            
            </table>





        </div>
    </body>
</html>

