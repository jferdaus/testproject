@extends('admin.master')

@section('main-title')

Teacher Entry

@endsection





@section('content-heading')

Teacher Entry
@endsection





@section('mainContent')


 <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="{{ url('insert')}}" method="POST">

                                    	@csrf
 
 <!-- {!! Form::open(['url'=>'/teacher/insert', 'method'=>'post', 'role'=>'form']) 

 !!}
       -->                                  <div class="form-group">

					             

                                         <label>Teacher Name</label>
                                            <input class="form-control" name="teacherName">
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Short Description</label>
                                            <textarea class="form-control" name="shortDescription" placeholder="Enter Short Description"></textarea>
                                        </div>


 										 <div class="form-group">
                                            <label>Publication Status</label>
                                            <select class="form-control" name="publicationStatus">
                                            	<option value="1">Published</option>
                                            	<option value="0">Unpublished</option>



                                            </select>
                                        </div>


<!-- 
 											<div class="form-group"> 
                                            <input type="submit" value="Submit"  class="btn btn-block btn-primary">
                                        </div>
 -->

                                        <div class="form-group"> 
                                            <button type="submit"  class="btn btn-block btn-primary">Submit Info </button>
                                        </div>

										</form>

                                   <!--  {!! Form::close() !!} -->

                                </div>
                            </div>

                        </div>










@endsection