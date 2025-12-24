   @php
       dd($students)
   @endphp
   <x-app-layout>
<div class="container mt-5">
    <div class="d-flex w-100 justify-content-between mb-4">
        <h4 class="mb-3">Students List</h4>
        <form action="{{ route('students.index') }}" method="get" class="d-flex gap-2">
            <input type="text" class="form-control" name="search" id="search" placeholder="search anything to filter data" value="{{ request('search') }}">
            <button type="submit" class="btn btn-indigo">Search</button>
        </form>
        <a href="{{ route('students.create') }}" class="btn btn-primary">Create Student</a>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover align-middle">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Result</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($students as $s )
                <tr>
                    <td>STD-{{$s->id}}</td>
                    <td><a href="{{ route('students.show',$s->id) }}">{{$s->name}}</a></td>
                    <td>{{$s->email}}</td>
                    <td>{{$s->address}}</td>
                    <td>{{$s->result}}</td>
                    <td>
                        <div class="btn-group">
                        <a href="{{ route('students.edit',$s->id) }}" class="btn btn-indigo">Edit</a>
                        <form action="{{ route('students.destroy',$s->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger rounded">Delete</button>
                        </form>
                        </div>

                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5">No Student Data Found</td>
                </tr>
                @endforelse

            </tbody>
        </table>
        <div class="mt-5">
            {{ $students->appends(request()->query())->links() }}
        </div>
    </div>
</div>
</x-app-layout>
