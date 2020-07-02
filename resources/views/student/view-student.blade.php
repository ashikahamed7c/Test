<hr>
<a href="{{ route('add-student') }}">Add Student</a>
<a href="{{ route('view-student') }}">View Student</a>
<hr>
<h1>{{Session::get('message')}}</h1>

<table border="1" width="700">
    <tr>
        <th>Sl No</th>
        <th>Student Id</th>
        <th>Student Name</th>
        <th>Student Mobile</th>
        <th>Student Email</th>
        <th>Action</th>
    </tr>
    @php($i=1)
    @foreach($students as $student)
        <tr>
            <td>{{$i++}}</td>
            <td>{{ $student->id }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->mobile }}</td>
            <td>{{ $student->email }}</td>
            <td>
                <a href="{{ route('edit-student', ['id'  => $student->id ]) }}">Edit</a>
                <a href="{{ route('delete-student',['id' => $student->id ]) }}">Delete</a>
            </td>
        </tr>
    @endforeach
</table>
