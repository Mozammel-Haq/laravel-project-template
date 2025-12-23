<x-app-layout>
    <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-5">

            <h5 class="mb-3">Create Student</h5>

            <form action="{{ route('students.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control form-control-sm" placeholder="Enter name" name="name">
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control form-control-sm" placeholder="Enter email" name="email">
                </div>

                <div class="mb-3">
                    <label class="form-label">Address</label>
                    <textarea class="form-control form-control-sm" rows="2" placeholder="Enter address" name="address"></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Result</label>
                    <select class="form-select form-select-sm" name="result">
                        <option value="">Select result</option>
                        <option value="A+">A+</option>
                        <option value="A">A</option>
                        <option value="A+">A-</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="F">F</option>
                    </select>
                </div>

                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-sm btn-primary">Save</button>
                    <button type="reset" class="btn btn-sm btn-outline-secondary">Reset</button>
                </div>
            </form>

        </div>
    </div>
</x-app-layout>
