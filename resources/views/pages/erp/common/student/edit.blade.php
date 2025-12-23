<x-app-layout>
    <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-5">

            <h5 class="mb-3">Update Student</h5>

            <form action="{{ route('students.update',$student->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control form-control-sm" value="{{$student->name}}" name="name">
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control form-control-sm" value="{{$student->email}}" name="email">
                </div>

                <div class="mb-3">
                    <label class="form-label">Address</label>
                    <textarea class="form-control form-control-sm" rows="2" name="address">{{$student->address}}</textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Result</label>
                    <select class="form-select form-select-sm" name="result">
                        <option value="A+" selected>A+</option>
                        <option value="A">A</option>
                        <option value="A+">A-</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="F">F</option>
                    </select>
                </div>

                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-sm btn-success">Update</button>
                    <a href="#" class="btn btn-sm btn-outline-secondary">Cancel</a>
                </div>
            </form>

        </div>
    </div>
</div>
</x-app-layout>
