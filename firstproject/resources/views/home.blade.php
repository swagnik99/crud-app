<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>CRUD query builder</title>
</head>

<body>
     <h2 class='container' style='margin-right:-7rem'>STUDENT DATABASE MANAGEMENT SYSTEM</h2>

	<div class="me-5 ms-5 mt-5">
		<div class="row row-md">
			<div class="col-sm-6">
				<form action="" method="post"> 
                    @csrf
					<div class="mb-3">
						<label for="name" class="form-label">Name</label>
						<input type="text" class="form-control" id="name" placeholder="name" name="name"> </div>
					<div class="mb-3">
						<label for="city" class="form-label">city</label>
						<input type="text" class="form-control" id="city" name='city' placeholder="city"></input>
					</div>
					<div class="mb-3">
						<label for="marks" class="form-label">marks</label>
						<input type="text" class="form-control" id="marks" name='marks' placeholder="marks"></input>
					</div>
					<div class="mb-3">
						<label for="phoneNo" class="form-label">phoneNo</label>
						<input type="text" class="form-control" id="phoneNo" name='phoneNo' placeholder="phoneNo"></input>
					</div>
					<div class="mb-3">
						<label for="BloodGroup" class="form-label">BloodGroup</label>
						<input type="text" class="form-control" id="BloodGroup" name='BloodGroup' placeholder="BloodGroup"></input>
					</div>
					<button type="submit" class="btn btn-primary">Submit</button> @if (session()->has('status'))
					<div class="alert alert-success mt-3 "> {{session('status')}} </div> 
                    @endif 
                </form>
			</div>
			<div class="col-sm-6">
				<table class="table table-hover">
					<thead>
						<tr>
							<th scope="col">ID</th>
							<th scope="col">NAME</th>
							<th scope="col">City</th>
							<th scope="col">Marks</th>
							<th scope="col">Phone No</th>
							<th scope="col">Blood Group</th>
							<th scope="col">Actions</th>
						</tr>
					</thead>
					<tbody> @foreach ($students as $stu)
						<tr>
							<th>{{$stu->id}}</th>
							<td>{{$stu->name}}</td>
							<td>{{$stu->city}}</td>
							<td>{{$stu->marks}}</td>
							<td>{{$stu->phoneNo}}</td>
							<td>{{$stu->BloodGroup}}</td>
							<td> <a href="{{url('/edit', $stu->id)}}" class="btn btn-info btn-sm">Edit</a> 
							<a href="{{url('/delete', $stu->id)}}" class="btn btn-danger btn-sm">Delete</a> </td>
						</tr> @endforeach </tbody>
				</table>
			</div>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>