<x-app-layout>
    <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-5">

            <h5 class="mb-3">Student Details</h5>

            <table class="table table-sm table-bordered">
                <tbody>
                    <tr>
                        <th width="35%">ID</th>
                        <td>1</td>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <td>Rahim Ahmed</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>rahim@example.com</td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td>Dhaka, Bangladesh</td>
                    </tr>
                    <tr>
                        <th>Result</th>
                        <td>
                            <span class="badge bg-success">A</span>
                        </td>
                    </tr>
                    <tr>
                        <th>Created At</th>
                        <td>23 Dec 2025, 10:45 AM</td>
                    </tr>
                    <tr>
                        <th>Updated At</th>
                        <td>23 Dec 2025, 11:10 AM</td>
                    </tr>
                </tbody>
            </table>

            <div class="d-flex gap-2 mt-3">
                <a href="{{route("students.edit",$student->id)}}" class="btn btn-sm btn-primary">Edit</a>
            </div>

        </div>
    </div>
</div>
</x-app-layout>
