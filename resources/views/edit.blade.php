<!DOCTYPE html>
<html>

<head>
    <title>Edit Record</title>
</head>

<body>

    <h2>Edit Record</h2>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li style="color:red">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('cruds.update', $data['id']) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" value="{{ $data['name'] }}" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" value="{{ $data['email'] }}" required><br><br>

        <label for="phone">Phone:</label><br>
        <input type="text" id="phone" name="phone" value="{{ $data['phone'] }}" required><br><br>

        <label for="location">Location:</label><br>
        <input type="text" id="location" name="location" value="{{ $data['location'] }}" required><br><br>

        <input type="submit" value="Update">
    </form>

</body>

</html>
