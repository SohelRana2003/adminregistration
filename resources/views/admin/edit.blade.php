@extends('layouts.app')

@section('title', 'Edit Quiz')

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
                                            <h2 class="text-center d-block">Edit Quiz</h2>
                                            <h4 class="text-center d-block">{{ $quiz->question }}</h4>
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
                                            <form id="main" method="post" action="{{ route('updatequiz', ['id' => $quiz->id]) }}" novalidate="">
                                                @csrf
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Question</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="question" value="{{ $quiz->question }}">
                                                        <span class="messages"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">First Answer</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="first_ans" value="{{ $quiz->first_ans }}">
                                                        <span class="messages"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Second Answer</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="second_ans" value="{{ $quiz->second_ans }}">
                                                        <span class="messages"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Third Answer</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="third_ans" value="{{ $quiz->third_ans }}">
                                                        <span class="messages"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Fourth Answer</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="fourth_ans" value="{{ $quiz->fourth_ans }}">
                                                        <span class="messages"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2"></label>
                                                    <div class="col-sm-10">
                                                        <button type="submit" class="btn btn-primary m-b-0">Update Quiz</button>
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
