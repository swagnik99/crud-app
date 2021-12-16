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
    <h2 class='container'>STUDENT DATABASE MANAGEMENT SYSTEM</h2>
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-6">
                <form action="" method="post">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value={{$student->name}}>
                    </div>
                    <div class="mb-3">
                        <label for="city" class="form-label">city</label>
                        <input type="text" class="form-control" id="city" name="city"  value={{$student->city}}>
                    </div>
                    <div class="mb-3">
                        <label for="marks" class="form-label">marks</label>
                        <input type="text" class="form-control" id="marks" name="marks"  value={{$student->marks}}>
                    </div>
                    <div class="mb-3">
						<label for="phoneNo" class="form-label">phoneNo</label>
						<input type="text" class="form-control" id="phoneNo" name='phoneNo' placeholder="phoneNo" value={{$student->phoneNo}}></input>
					</div>
					<div class="mb-3">
						<label for="BloodGroup" class="form-label">BloodGroup</label>
						<input type="text" class="form-control" id="BloodGroup" name='BloodGroup' placeholder="BloodGroup" value={{$student->BloodGroup}} ></input>
					</div>
                    <button type="submit" class="btn btn-primary">UPDATE</button>
                </form>
                @if (session()->has('status'))
					<div class="alert alert-success mt-3 "> {{session('status')}} </div> 
                    @endif 
           </div>   
        </div>
    </div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>