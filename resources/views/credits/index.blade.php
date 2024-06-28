@extends('layout.user-account')

@section('title')
    My Credits
@endsection

@section('content')
    <div class="dashboard-content credit-content">
        <div class="dashboard-content__topbar topbar" style="display: flex; justify-content: center; align-items: center;">
            <div class="drawer-open">
                <span class="slice-top"></span>
                <span class="slice-middle"></span>
                <span class="slice-bottom"></span>
            </div>
        </div>
        <div class="dashboard-content__title-bar title-bar" style="display: flex; justify-content: space-between; align-items: center;">
            <h3 class="title">My Credits</h3>
        </div>
        <div class="dashboard-main-content-wrap">
            <div class="dashboard-main-content">

                @if (Session::has('success'))
                    <div class="alert alert-success" style="color: green; border: 1px solid green; padding: 10px; margin-bottom: 20px;">
                        {{ Session::get('success') }}
                    </div>
                @endif
                @if (Session::has('wrong'))
                    <div class="alert alert-danger" style="color: red; border: 1px solid red; padding: 10px; margin-bottom: 20px;">
                        {{ Session::get('wrong') }}
                    </div>
                @endif
                <div class="dashboard-table-wrap" style="display: flex; justify-content: space-between;">
                    <table class="dashboard-table" style="width: 100%; border-collapse: collapse; margin: 20px 0;">
                        <thead>
                            <tr style="background-color: #f2f2f2;">
                                <th style="border: 1px solid #ddd; padding: 8px;">ID</th>
                                <th style="border: 1px solid #ddd; padding: 8px;">Credit Amount</th>
                                <th style="border: 1px solid #ddd; padding: 8px;">Bank Name</th>
                                <th style="border: 1px solid #ddd; padding: 8px;">Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($credits as $credit)
                                <tr style="background-color: {{ $loop->even ? '#f9f9f9' : '#fff' }};">
                                    <td style="border: 1px solid #ddd; padding: 8px;">{{ $credit->id }}</td>
                                    <td style="border: 1px solid #ddd; padding: 8px;">{{ $credit->amount }}</td>
                                    <td style="border: 1px solid #ddd; padding: 8px;">{{ $credit->bank_name }}</td>
                                    <td style="border: 1px solid #ddd; padding: 8px;">{{ $credit->email }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function confirmCancellation(event, url) {
            event.preventDefault(); // Prevent the default link action

            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, cancel it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = url; // Redirect to the cancellation URL
                }
            });
        }
    </script>
@endsection
