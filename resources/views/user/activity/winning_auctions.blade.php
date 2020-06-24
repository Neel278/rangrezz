@extends('user.layouts.master')

@section('title','Rangrezz | Your Bids')

@section('content')

 <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>

            <!-- Body Copy -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Your Bids
                            </h2>

                        </div>
                        <div class="body">
                            <?php
                            // var_dump($_SESSION);

                            //   $bid = $_SESSION['buyerlogin'];
                            //   $conn=new mysqli(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
                            //   $sql="SELECT * FROM `painting` WHERE `status`= 1";

                            //   $result=$conn->query($sql);

                               // var_dump($result)

                            ?>

                              <div class="body table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Painting</th>
                                        <th>Title</th>
                                        <th>Starting Price</th>
                                        <th>Latest Price</th>
                                        <th>Ending date</th>
                                        <th>More</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($paintings as $painting)
                                    <tr>
                                        <td><img src="{{ asset($painting->painting) }}" alt="painting" style="height: 200px; width: 200px;" ></td>
                                        <td>{{ $painting->title }}</td>
                                        <td>{{ $painting->price }}</td>
                                        <td>{{ $painting->bidded_price }}</td>
                                        <td>{{ date("d/m/y g:i A",strtotime($painting->end_date)) }}</td>
                                        <td>
                                        	<a href="{{route('claim_paintings')}}">
                                        		<button type="button" class="btn btn-info">
                                        			Congratulations Claim!!
                                        		</button>
                                        	</a>
                                        </td>
                                    </tr>
                                  @endforeach
                                </tbody>
                            </table>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Body Copy -->
            </div>

    </section>
    <script type="text/javascript">
        $(document).ready(function()
        {
            $('table').DataTable();

            $('.dataTables_length').css('display','none');
        });
    </script>


@endsection
