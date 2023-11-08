<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Post</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="app.css">
</head>
<body style="background: lightgray">

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                    
                        @csrf

                        <div class="form-group">
                            <label class="font-weight-bold">Image</label>
                            <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
                        
                            <!-- error message untuk title -->
                            @error('image')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Full Name</label>
                                <input type="text" class="form-control @error('FullName') is-invalid @enderror" name="FullName" value="{{ old('FullName') }}" placeholder="Enter Your Full Name" >
                            
                                <!-- error message for FullName -->
                                @error('FullName')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">NIM</label>
                                <input type="number" class="form-control @error('NIM') is-invalid @enderror" name="NIM"  placeholder="Enter Your NIM" >
                            
                                <!-- error message for NIM -->
                                @error('NIM')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                              
                            <div class="form-group">
                                <label class="font-weight-bold">Major</label>
                                <input type="text" class="form-control @error('Major') is-invalid @enderror" name="Major"  placeholder="Enter Your Major" >
                            
                                <!-- error message for Major -->
                                @error('Major')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Program Study</label>
                                <input type="text" class="form-control @error('ProgramStudy') is-invalid @enderror" name="ProgramStudy" placeholder="Enter Your Program Study" >
                            
                                <!-- error message for ProgramStudy -->
                                @error('ProgramStudy')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Address</label>
                                <textarea class="form-control @error('Address') is-invalid @enderror" name="Address" rows="5" placeholder="Enter Your Address">{{ old('Address') }}</textarea>
                            
                                <!-- error message for Address -->
                                @error('Address')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            
                            <div class="form-group">
                                <label class="font-weight-bold">Phone</label>
                                <input type="number" class="form-control @error('Phone') is-invalid @enderror" name="Phone" placeholder="Enter Your Phone Number">
                            
                                <!-- error message for Phone -->
                                @error('Phone')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                           
                            <button type="submit" class="btn btn-md btn-primary">Save</button>
                            
                            <button type="reset" class="btn btn-md btn-warning">Reset</button>

                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
</body>
</html>
