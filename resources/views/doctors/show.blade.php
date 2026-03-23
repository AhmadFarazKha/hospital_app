<div class="container mt-5">
    <div class="card border-0 shadow-lg overflow-hidden" style="border-radius: 20px;">
        <div class="row g-0">
            <div class="col-md-4 bg-primary text-white text-center p-5">
                <img src="https://via.placeholder.com/200" class="rounded-circle mb-3 border border-4 border-white shadow">
                <h3>{{ $doctor->name }}</h3>
                <p class="badge bg-light text-primary fs-6">{{ $doctor->specialization }}</p>
            </div>
            <div class="col-md-8 p-5 bg-white">
                <h4 class="text-primary border-bottom pb-2">ڈاکٹر کا تعارف (Profile)</h4>
                <p class="lead text-muted">{{ $doctor->description }}</p>
                
                <div class="row mt-4">
                    <div class="col-6">
                        <h6 class="fw-bold">کلینک کا نام:</h6>
                        <p>{{ $doctor->clinic_address }}</p>
                    </div>
                    <div class="col-6">
                        <h6 class="fw-bold">رابطہ نمبر:</h6>
                        <p>{{ $doctor->phone }}</p>
                    </div>
                </div>

                <div class="d-grid mt-4">
                    <button class="btn btn-primary btn-lg shadow">آن لائن اپوائنٹمنٹ بک کریں</button>
                </div>
            </div>
        </div>
    </div>
</div>