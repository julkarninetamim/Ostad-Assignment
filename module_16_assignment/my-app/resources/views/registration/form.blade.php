<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" />
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h2 class="mt-5">This is registration form</h2>
            <form method="POST" action="/register">
                @csrf

                <div class="form-group">
                    <label for="name">Name:</label>
                    <input class="form-control" type="text" id="name" name="name" value="{{ old('name') }}" required>
                    @error('name')
                        <span>{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input class="form-control" type="email" id="email" name="email" value="{{ old('email') }}" required>
                    @error('email')
                        <span>{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group" >
                    <label for="password">Password:</label>
                    <input class="form-control" type="password" id="password" name="password" required>
                    @error('password')
                        <span>{{ $message }}</span>
                    @enderror
                </div>

                <button class="btn btn-success" type="submit">Register</button>
            </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</body>
</html>


