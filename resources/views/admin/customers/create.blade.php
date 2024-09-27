@extends('layouts.admin')

@section('content')
    @include('partials._alerts')
    <h2 class="mb-4">Customer List</h2>

    <div class="input-group mb-3">
        <input type="text" id="searchInput" class="form-control" placeholder="Search customers..." aria-label="Search customers">
    </div>

    <table class="table table-striped table-bordered" id="customerTable">
        <thead class="table-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Customer Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Address</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($customers as $key => $customer)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->email }}</td>
                    <td>{{ $customer->phone }}</td>
                    <td>{{ $customer->address }}</td>
                    <td>
                        <a href="{{ route('admin.customers.edit', $customer->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('admin.customers.destroy', $customer->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="pagination mt-3">
        {{ $customers->links() }}  <!-- Pagination controls -->
    </div>
@endsection

@section('scripts')
<script>
    // JavaScript for filtering the table based on search input
    document.getElementById('searchInput').addEventListener('keyup', function() {
        const filter = this.value.toLowerCase();
        const rows = document.querySelectorAll('#customerTable tbody tr');

        rows.forEach(row => {
            const cells = row.getElementsByTagName('td');
            let match = false;

            for (let i = 0; i < cells.length - 1; i++) { // Exclude the last column (Actions)
                const cell = cells[i];
                if (cell) {
                    const textValue = cell.textContent || cell.innerText;
                    if (textValue.toLowerCase().indexOf(filter) > -1) {
                        match = true;
                    }
                }
            }

            row.style.display = match ? '' : 'none'; // Show or hide row based on search
        });
    });
</script>
@endsection
