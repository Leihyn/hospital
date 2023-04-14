

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        
      </div>
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->
        
        <div class="container-fluid page-body-wrapper">
            <div align="center" style="padding-top:100px;">

                <table>
                    <tr style="background-color:black;">
                        <th style="padding:10px">Customer</th>
                        <th style="padding:10px">Email</th>
                        <th style="padding:10px">Phone Number</th>
                        <th style="padding:10px">Doctor</th>
                        <th style="padding:10px">Date</th>
                        <th style="padding:10px">Message</th>
                        <th style="padding:10px">Status</th>
                        <th style="padding:10px">Approve</th>
                        <th style="padding:10px">Cancel</th>

    
                    </tr>

                    @foreach($data as $appoint)

                    <tr align="center" style="background-color: blanchedalmond">
                        <td style="color: black;">{{$appoint->name}}</td>
                        <td style="color: black;">{{$appoint->email}}</td>
                        <td style="color: black;">{{$appoint->phone}}</td>
                        <td style="color: black;">{{$appoint->doctor}}</td>
                        <td style="color: black;">{{$appoint->date}}</td>
                        <td style="color: black;">{{$appoint->message}}</td>
                        <td style="color: black;">{{$appoint->status}}</td>
                        <td>
                            <a class="btn btn-success" href="{{url('approved', $appoint->id)}}">Approved</a>
                        </td>
                        <td>
                            <a class="btn btn-danger" href="{{url('cancel', $appoint->id)}}">Canceled</a>
                        </td>
                    </tr>

                    @endforeach
    
                </table>
            </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>