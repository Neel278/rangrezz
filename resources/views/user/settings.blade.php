@extends('user.layouts.master')

@section('title')
    Rangrezz | Settings
@endsection

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
                            Settings
                        </h2>
                    </div>
                    <div class="body">  
                        <div class="row">
                            <div class="col-md-4" style="text-align: center;">
                                  <button type="button" class="btn btn-primary waves-effect" data-toggle="modal" data-target="#defaultModal" name="edit-profile">Edit Profile</button>
                            </div>
                            <div class="col-md-4" style="text-align: center;" >
                                  <button type="button" class="btn btn-info waves-effect" name="change-email" data-toggle="modal" data-target="#defaultModal1">Change Email</button>
                                  </div>
                                  <div class="col-md-4" style="text-align: center;">
                                  <button type="button" class="btn btn-success waves-effect" data-toggle="modal" data-target="#defaultModal2">Change Password</button>
                            </div>  
                        </div>                   
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Body Copy -->
        </div>
    
</section>
 <!-- Default Size -->
 <!-- start dialog box -->
        <div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="defaultModalLabel">Change Details</h4>
                    </div>
                    <div class="modal-body">
                        <form class="p-5" action="edit.php" method="post" name="myForm">
                            <div class="form-group">
                                <label for="Enter your last name"> lastname: </label>
                                <div class="form-line">
                                <input type="text" class="form-control" placeholder="{{ auth()->user()->lastname }}" id="lname1" name="lname" value="{{ auth()->user()->lastname }}" required>
                                </div>
                                
                            </div>
                            <div class="form-group">
                                <label for="Enter your last name"> Firstname: </label>
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="{{ auth()->user()->firstname }}" id="fname1" name="fname" value="{{ auth()->user()->firstname }}" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlTextarea1" style="padding-bottom:  10px;">Address:</label>
                                <div class="form-line">
                                    <textarea class="form-control" id="exampleFormControlTextarea2" rows="2" name="address" placeholder="{{ auth()->user()->address }}" required>{{ auth()->user()->address }}</textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="Enter your last name">Username: </label>
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="{{ auth()->user()->username }}" id="username" name="uname" value="{{ auth()->user()->username }}" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <button id="submit" type="Submit" class="btn btn-primary" name="edit">Submit</button>
                            </div> 
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- dialogue box ends -->
        <!-- start dialog box -->
        <div class="modal fade" id="defaultModal1" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="defaultModalLabel1">Change Email</h4>
                    </div>
                    <div class="modal-body">          
                        <form class="p-5" action="edit.php" method="post" name="myForm">
                            <div class="form-group">
                                <label for="Enter your last name">Email: </label>
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="{{ auth()->user()->email }}" id="email" name="email" value="{{ auth()->user()->email }}" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <button id="submit" type="Submit" class="btn btn-primary" name="edit1">Submit</button>
                            </div> 
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- dialogue box ends -->
        <!-- start dialog box -->
        
        <div class="modal fade" id="defaultModal2" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="defaultModalLabel2">Change Password</h4>
                    </div>
                    <div class="modal-body">
                        <script type="text/javascript">
                            function check()
                            {
                            var password = document.getElementById('npass').value;
                            var cpassword = document.getElementById('cpass').value;
                            if(password!=cpassword)
                            {
                                document.getElementById('result').innerHTML="password is not metching";
                                return false;
                            }else{
                                return true;
                                }
                            }
                        </script>
                        <form class="p-5" action="edit.php" method="post" name="myForm">
                            <div class="form-group">
                                    <label for="Enter your last name"> Old Password: </label>
                                <div class="form-line">
                                    <input type="password" class="form-control" name="pass" id="opass" required>
                                </div>
                            </div>
                                <div class="form-group">
                                    <label for="Enter your last name"> New Password: </label>
                                <div class="form-line">
                                    <input type="password" class="form-control" name="pass_confirmation" id="npass" required>
                                </div>
                            </div>
                                <div class="form-group">
                                    <label for="Enter your last name"> Confirm Password: </label>
                                <div class="form-line">
                                    <input type="password" class="form-control" name="cpass" id="cpass" required>
                                </div>
                            <div id="result" style="color: red;"></div>
                            </div>
                            <div class="form-group">
                                <button onclick="return check()" id="submit-pass" type="Submit" class="btn btn-primary" name="edit2" >Submit</button>
                            </div> 
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- dialogue box ends -->
        @endsection
