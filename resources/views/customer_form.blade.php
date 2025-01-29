<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Customer</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h2 class="mb-4 text-center">Add Customer</h2>
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('customer.store') }}" method="POST">
            @csrf
            <!-- Customer Details -->
            <div class="mb-3">
                <label for="CUSTOMER_ID" class="form-label">Customer ID</label>
                <input type="text" class="form-control" id="CUSTOMER_ID" name="CUSTOMER_ID" required>
            </div>
            <div class="mb-3">
                <label for="FIRST_NAME" class="form-label">First Name</label>
                <input type="text" class="form-control" id="FIRST_NAME" name="FIRST_NAME" required>
            </div>
            <div class="mb-3">
                <label for="LAST_NAME" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="LAST_NAME" name="LAST_NAME" required>
            </div>

            <!-- Address Details -->
            <h5 class="mt-4">Address</h5>
            <div class="mb-3">
                <label for="STREET" class="form-label">Street</label>
                <input type="text" class="form-control" id="STREET" name="STREET" required>
            </div>
            <div class="mb-3">
                <label for="CITY" class="form-label">City</label>
                <input type="text" class="form-control" id="CITY" name="CITY" required>
            </div>
            <div class="mb-3">
                <label for="POSTAL_CODE" class="form-label">Postal Code</label>
                <input type="text" class="form-control" id="POSTAL_CODE" name="POSTAL_CODE" required>
            </div>

            <!-- Contact Details -->
            <h5 class="mt-4">Contact</h5>
            <div class="mb-3">
                <label for="EMAIL" class="form-label">Email</label>
                <input type="email" class="form-control" id="EMAIL" name="EMAIL" required>
            </div>
            <div class="mb-3">
                <label for="PHONE" class="form-label">Phone</label>
                <input type="text" class="form-control" id="PHONE" name="PHONE" required>
            </div>

            <button type="submit" class="btn btn-primary">Add Customer</button>
        </form>

    </div>
</body>
</html>
