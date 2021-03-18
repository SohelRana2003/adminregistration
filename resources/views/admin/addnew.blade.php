@extends('layouts.app')

@section('title', 'Add New Quiz')

@section('content')

    <div class="pcoded-content">
        <div class="pcoded-inner-content">
            <!-- Main-body start -->
            <div class="main-body">
                <div class="page-wrapper">

                        <!-- Page body start -->
                        <div class="page-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <!-- Basic Inputs Validation start -->
                                    <div class="card">
                                        <div class="card-header">
                                            <h2 class="text-center d-block">Add New Quiz</h2>
                                            <p class="alert-success">
                                                <?php
                                                $exception = Session::get('success');
                                                if ($exception) {
                                                    echo $exception;
                                                    Session::put('success', null);
                                                }
                                                ?>
                                            </p>
                                        </div>
                                        <div class="card-block">
                                            <form id="main" method="post" action="{{ route('savequiz') }}" novalidate="">
                                                @csrf
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Question</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="question" placeholder="Add Question">
                                                        <span class="messages"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">First Answer</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="first_ans" placeholder="Add Frist Answer">
                                                        <span class="messages"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Second Answer</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="second_ans" placeholder="Add Second Answer">
                                                        <span class="messages"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Third Answer</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="third_ans" placeholder="Add Third Answer">
                                                        <span class="messages"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Fourth Answer</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="fourth_ans" placeholder="Add Fourth Answer">
                                                        <span class="messages"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2"></label>
                                                    <div class="col-sm-10">
                                                        <button type="submit" class="btn btn-primary m-b-0">Add New Quiz</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- Page body end -->
                    </div>
                </div>
                
                <div id="styleSelector">

                </div>
            </div>
        </div>
    </div>

@endsection
