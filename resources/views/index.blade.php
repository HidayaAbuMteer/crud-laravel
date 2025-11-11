<!DOCTYPE html>
<html>
<style>
    table,
    th,
    td {
        border: 1px solid black;
    }

    .button {
        background-color: gray;
        border: none;
        color: white;
        padding: 15px 10px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        float: right;
        cursor: pointer;
    }
</style>

<body>

    <a href="{{ route('cruds.create') }}" class="button">add new data</a>

    <table style="width:100%">
        <tr>
            <th>name</th>
            <th>email</th>
        </tr>
        @if (@isset($data) and !@empty($data))

            @foreach ($data as $info)
                <tr>
                    <td>{{ $info->name }}</td>
                    <td>{{ $info->email }}</td>
                    <td><a href="{{ route('cruds.edit', $info->id) }}" class="button">edit</a>
                        <form action="{{ route('cruds.destroy', $info->id) }}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="button">delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach

        @endif
    </table>
</body>

</html>
