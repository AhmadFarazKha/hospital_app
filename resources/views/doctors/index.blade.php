<!DOCTYPE html>
<html lang="ur" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>ایڈمن ڈیش بورڈ - نور کلینک</title>
    <style>
        body { background-color: #f0f2f5; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
        .admin-header { background: linear-gradient(45deg, #1a237e, #0d47a1); color: white; padding: 20px; border-radius: 0 0 20px 20px; margin-bottom: 30px; }
        .spec-card { border: none; border-radius: 15px; overflow: hidden; margin-bottom: 25px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); }
        .spec-header { background-color: #ffffff; border-bottom: 2px solid #e3e6f0; color: #4e73df; font-weight: bold; font-size: 1.2rem; }
        .btn-add { background-color: #2e7d32; border: none; padding: 10px 25px; border-radius: 10px; font-weight: bold; }
        .btn-add:hover { background-color: #1b5e20; transform: scale(1.05); }
        .table thead { background-color: #f8f9fc; }
    </style>
</head>
<body>

    <div class="admin-header shadow">
        <div class="container d-flex justify-content-between align-items-center">
            <h2 class="mb-0"><i class="fas fa-user-shield me-2"></i> نور کلینک - ایڈمن کنٹرول</h2>
            <div class="d-flex gap-3">
                <a href="/doctors/create" class="btn btn-add text-white shadow">+ نیا ڈاکٹر شامل کریں</a>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-outline-light btn-sm">لاگ آؤٹ</button>
                </form>
            </div>
        </div>
    </div>

    <div class="container">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show shadow-sm border-0 mb-4" role="alert">
                <i class="fas fa-check-circle me-2"></i> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @foreach($groups as $specialization => $doctors)
            <div class="card spec-card shadow-sm">
                <div class="card-header spec-header py-3">
                    <i class="fas fa-hospital-symbol me-2 text-primary"></i> شعبہ: {{ $specialization }}
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0 text-center">
                            <thead class="table-light">
                                <tr>
                                    <th style="width: 60%">ڈاکٹر کا نام</th>
                                    <th style="width: 40%">انتظامی ایکشن</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($doctors as $doctor)
                                <tr>
                                    <td class="fw-bold text-dark">{{ $doctor->name }}</td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <a href="/doctors/{{ $doctor->id }}/edit" class="btn btn-outline-warning btn-sm px-3 mx-1 rounded">
                                                <i class="fas fa-edit"></i> ترمیم
                                            </a>
                                            <form action="/doctors/{{ $doctor->id }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-outline-danger btn-sm px-3 mx-1 rounded" onclick="return confirm('کیا آپ واقعی اس ڈاکٹر کا ریکارڈ حذف کرنا چاہتے ہیں؟')">
                                                    <i class="fas fa-trash-alt"></i> حذف کریں
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>