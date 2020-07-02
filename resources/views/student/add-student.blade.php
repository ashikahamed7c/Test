<hr>
    <a href="{{ route('add-student') }}">Add Student</a>
    <a href="{{ route('view-student') }}">View Student</a>
<hr>
<h1>{{Session::get('message')}}</h1>

<form action="{{ route('new-student') }}" method="post">
    @csrf
    <table>
        <tr>
            <th>Student Name</th>
            <td><input type="text" name="name"/></td>
        </tr>
        <tr>
            <th>Student Mobile</th>
            <td><input type="number" name="mobile"/></td>
        </tr>
        <tr>
            <th>Student Email</th>
            <td><input type="email" name="email"/></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" name="btn" value="Submit"/></td>
        </tr>
    </table>
</form>
