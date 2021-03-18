<!DOCTYPE html>
<html>
<head>
	<title>JavaScript Quiz</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('assets\quiz\style.css') }}">
</head>
<body>

	<form name="quiz" id="quiz">
        
    @foreach($quizzes as $quiz)
		<div>
			<p>{{ $quiz->question }}</p>
			<p><input type="radio" name="question1" value="HTML">A. {{ $quiz->first_ans }}</p>
			<p><input type="radio" name="question1" value="Python">B. {{ $quiz->second_ans }}</p>
			<p><input type="radio" name="question1" value="Javascript">C. {{ $quiz->third_ans }}</p>
			<p><input type="radio" name="question1" value="Swift">D. {{ $quiz->fourth_ans }}</p>
		</div>
        
    @endforeach

		<!-- <div>
			<p>What is The Best Biggest Country In world ?</p>
			<p><input type="radio" name="question2" value="Russia">A. Russia</p>
			<p><input type="radio" name="question2" value="America">B. America</p>
			<p><input type="radio" name="question2" value="China">C. China</p>
			<p><input type="radio" name="question2" value="Canada">D. Canada</p>
		</div>

		<div>
			<p>What is your Name ?</p>
			<p><input type="radio" name="question3" value="Shamim Pervej">A. Shamim Pervej</p>
			<p><input type="radio" name="question3" value="Sujon Sarkar">B. Sujon Sarkar</p>
			<p><input type="radio" name="question3" value="Baharul Islam">C. Baharul Islam</p>
			<p><input type="radio" name="question3" value="Liton Roy">D. Liton Roy</p>
		</div>

		<div>
			<p>What is The current Year ?</p>
			<p><input type="radio" name="question4" value="2020">A. 2020</p>
			<p><input type="radio" name="question4" value="2021">B. 2021</p>
			<p><input type="radio" name="question4" value="2022">C. 2022</p>
			<p><input type="radio" name="question4" value="2023">D. 2023</p>
		</div>

		<div>
			<p>What is The Capital is Bangladesh ?</p>
			<p><input type="radio" name="question5" value="Dhaka">A. Dhaka</p>
			<p><input type="radio" name="question5" value="Islamabad">B. Islamabad</p>
			<p><input type="radio" name="question5" value="New Yourk">C. New Yourk</p>
			<p><input type="radio" name="question5" value="Rangpur">D. Rangpur</p>
		</div> -->

    <input type="button" name="" id="button" value="Submit" onclick="chek()">
	</form>

	<script type="text/javascript" src="{{ asset('assets\quiz\app.js') }}"></script>

</body>
</html>