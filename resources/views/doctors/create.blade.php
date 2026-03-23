<!DOCTYPE html>
<html lang="ur" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Nastaliq+Urdu&display=swap" rel="stylesheet">
    <title>نیا ڈاکٹر - ہسپتال مینجمنٹ</title>
    <style>
        body { background-color: #f8f9fa; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
        .card { border: none; border-radius: 15px; }
        .btn-primary { border-radius: 10px; padding: 10px 30px; }
    </style>
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-lg">
                <div class="card-header bg-primary text-white text-center py-3">
                    <h4 class="mb-0">👨‍⚕️ نیا ڈاکٹر رجسٹر کریں</h4>
                </div>
                <div class="card-body p-4">
                    <form action="{{ route('doctors.store') }}" method="POST">
                        @csrf
                        
                        <div class="mb-4">
                            <label class="form-label fw-bold">ڈاکٹر کا مکمل نام</label>
                            <input type="text" name="name" class="form-control form-control-lg" placeholder="مثلاً: ڈاکٹر احمد خان" required>
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-bold">مہارت (Specialization)</label>
                            <input type="text" name="specialization" class="form-control form-control-lg" placeholder="مثلاً: ہارٹ اسپیشلسٹ" required>
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary btn-lg shadow">سیو کریں</button>
                            <a href="/doctors" class="btn btn-outline-secondary">واپس لسٹ پر جائیں</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>