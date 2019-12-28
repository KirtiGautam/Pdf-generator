<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<div class="container">
	<br><br>
	<h1 class="center-text">Training form</h1>
	<div class="row">
		<div class="col-md-12">
			<br /> <br /> <br />
			<form method="get" action="{{ route('SamplePDF') }}" enctype="multipart/form-data">
				<div class="form-group">
					<label for="name">Name:</label>
					<input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required>
				</div>
				<div class="form-group">
					<label for="roll">Roll No.:</label>
					<input type="text" class="form-control" id="roll" placeholder="Enter roll no." name="roll" required>
				</div>

				<div class="form-group">
					<label for="email">Email:</label>
					<input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
				</div>
				<div class="form-group">
					<label for="tel">Mobile:</label>
					<input type="tel" class="form-control" id="tel" placeholder="Enter your mobile number" name="tel" required>
				</div>
				<div class="form-group">
					<label for="branch">Branch:</label>
					<select class="form-control" id="branch" name="branch" required>
						<option value="" disabled selected>Select your Branch </option>
						<option value="Civil Engineering">Civil Engineering</option>
						<option value="Electrical Engineering">Electrical Engineering</option>
						<option value="Electronics & Communication Engineering">Electronics & Communication Engineering</option>
						<option value="Mechanical Engineering">Mechanical Engineering</option>
						<option value="Computer Science & Engineering">Computer Science & Engineering</option>
						<option value="Production Engineering">Production Engineering</option>
						<option value="Information Technology">Information Technology</option>
					</select>
				</div>
				<div class="form-group">
					<label for="Company">Company:</label>
					<select class="form-control" id="Company" name="company" required>
						<option value="" disabled selected>Select Company </option>
						@foreach($company as $com)
						<option value="{{ $com->company_name }}">{{ $com->company_name }}</option>
						@endforeach

					</select>
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-primary">Generate form</a>
				</div>

		</div>

	</div>

</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>