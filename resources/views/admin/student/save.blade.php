@extends('admin.master')


@section('main-title')

Students Entry

@endsection


@section('content-heading')

Students Entry

@endsection


@section('mainContent')

 <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                   
                                    	{!! Form::open(['url' => '/student/save', 'method'=>'post', 'role'=>'form']) !!}
    


                                        <div class="form-group">
                                            <label>Name</label>
                                            <input name="name" class="form-control">
                                           

                             			 </div>


                                        <div class="form-group">
                                            <label>About Yourself</label>
                                            <textarea name="bio" class="form-control" placeholder="Enter your Bio"></textarea>
                                        </div>


 											<div class="form-group">

                                            <label>Publication Status</label>
                                            <select name="publicationStatus"  class="form-control" placeholder="Enter your Bio">
											<option value="1"> Published </option>
											<option value="0"> UnPublished </option>

                                            </select>

                                        	</div>



 										<div class="form-group">
                                         
                                            <input type="submit" value="Submit" class="btn btn-block btn-primary" >
                                        </div>



                                {!! Form::close() !!}


                                </div>
                            </div>
                        </div>


@endsection