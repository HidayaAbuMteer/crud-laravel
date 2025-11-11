<!DOCTYPE html>
<html>

<head>
    <title>Simple HTML Form</title>
</head>

<body>
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li style="color:red">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('cruds.store') }}" method="POST">
        @csrf
        <label for="name">name:</label><br>
        <input type="text" id="name" name="name" required><br><br>
        <label for="phone">phone:</label><br>
        <input type="text" id="phone" name="phone" required><br><br>

        <label for="location">location:</label><br>
        <input type="text" id="location" name="location" required><br><br>

        <label for="email">email:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        <input type="submit" value="add new data">
    </form>

</body>

</html>
