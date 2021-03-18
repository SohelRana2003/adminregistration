@extends('layouts.app')

@section('title', 'All Quiz')

@section('content')

    <div class="pcoded-content">
        <div class="pcoded-inner-content">
            <!-- Main-body start -->
            <div class="main-body">

                <div class="page-wrapper">
                    <!-- Page-body start -->
                    <div class="page-body">
                        <!-- DOM/Jquery table start -->
                        <div class="card">
                            <div class="card-header">
                                <h2 class="text-center d-block">All Quiz</h2>
                                <p class="alert-danger">
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
                                <div class="table-responsive dt-responsive">
                                    <table id="dom-jqry" class="table table-striped table-bordered nowrap">
                                        <thead>
                                            <tr>
                                                <th>Question</th>
                                                <th>Frist Answer</th>
                                                <th>Second Answer</th>
                                                <th>Third Answer</th>
                                                <th>Fourth Answer</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($quizzes as $quiz)
                                            <tr>
                                                <th>{{ $quiz->question }}</th>
                                                <td>{{ $quiz->first_ans }}</td>
                                                <td>{{ $quiz->second_ans }}</td>
                                                <td>{{ $quiz->third_ans }}</td>
                                                <td>{{ $quiz->fourth_ans }}</td>
                                                <td class="d-flex">

                                                    <a href="{{ route('editquiz', ['id' => $quiz->id]) }}" class="btn btn-primary btn-outline-primary btn-grd-success btn-icon mr-2"><i class="fas fa-edit text-center"></i></a>

                                                    <form action="{{ route('destroyquiz') }}" method="post">
                                                        @csrf
                                                        <input type="hidden" name="id" value="{{ $quiz->id }}">
                                                        <button type="submit" class="btn btn-primary btn-outline-primary btn-grd-danger btn-icon"><i class="fas fa-trash text-center"></i></button>
                                                    </form>

                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- DOM/Jquery table end -->
                    </div>
                    <!-- Page-body start -->
                </div>

                <div id="styleSelector">

                </div>
            </div>
            <!-- Main-body start -->
        </div>
    </div>

@endsection
