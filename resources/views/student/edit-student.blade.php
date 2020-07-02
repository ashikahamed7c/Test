<hr>
<a href="{{ route('add-student') }}">Add Student</a>
<a href="{{ route('view-student') }}">View Student</a>
<hr>

<form action="{{ route('update-student') }}" method="post">
    @csrf
    <table>
        <tr>
            <th>Student Name</th>
            <td><input type="text" name="name" value="{{ $student->name }}"/></td>
            <td><input type="hidden" name="id" value="{{$student->id}}"/></td>
        </tr>
        <tr>
            <th>Student Mobile</th>
            <td><input type="number" value="{{ $student->mobile }}" name="mobile"/></td>
        </tr>
        <tr>
            <th>Student Email</th>
            <td><input type="email"  value="{{ $student->email }}" name="email"/></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" name="btn" value="Update"/></td>
        </tr>
    </table>
</form>
