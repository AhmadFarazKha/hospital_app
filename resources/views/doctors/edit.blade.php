<!DOCTYPE html>
<html lang="ur" dir="rtl">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>ڈاکٹر ریکارڈ تبدیل کریں</title>
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header bg-warning text-dark fw-bold">ریکارڈ تبدیل کریں: {{ $doctor->name }}</div>
                    <div class="card-body">
                        <form action="/doctors/{{ $doctor->id }}" method="POST">
                            @csrf
                            @method('PUT')
                            
                            <div class="mb-3">
                                <label class="form-label">نام</label>
                                <input type="text" name="name" value="{{ $doctor->name }}" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">مہارت</label>
                                <input type="text" name="specialization" value="{{ $doctor->specialization }}" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-success w-100">تبدیلی محفوظ کریں</button>
                            <a href="/doctors" class="btn btn-link w-100 text-secondary mt-2">کینسل کریں</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>