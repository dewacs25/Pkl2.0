<div>


    <div class="page-heading">
        <h3>Profile Statistics {{ Auth::guard('admin')->user()->role }}</h3>
    </div>
    <div class="page-content">
        <section class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5>Blog : {{ $blogAll }}</h5>
                        <div class="text-end">
                            <h2 class="font-light mb-0">
                                @if ($blogHariIni == 0)
                                    <i class="fas fa-minus text-danger"></i>
                                @else
                                    <i class="ti-arrow-up text-success"></i>
                                @endif
                            </h2>
                            <span class="text-muted">Data Hari Ini {{ $blogHariIni }}</span>
                        </div>
                        <span class="text-success">{{ $blogPersen }} %</span>

                        <div class="progress progress-primary  mb-3">
                            <div class="progress-bar" role="progressbar" style="width: {{ $blogPersen }}%"
                                aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5>Content : {{ $kontenAll }}</h5>
                        <div class="text-end">
                            <h2 class="font-light mb-0">
                                @if ($kontenHariIni == 0)
                                    <i class="fas fa-minus text-danger"></i>
                                @else
                                    <i class="ti-arrow-up text-success"></i>
                                @endif
                            </h2>
                            <span class="text-muted">Data Hari Ini {{ $kontenHariIni }}</span>
                        </div>
                        <span class="text-success">{{ $kontenPersen }} %</span>

                        <div class="progress progress-primary  mb-3">
                            <div class="progress-bar" role="progressbar" style="width: {{ $kontenPersen }}%"
                                aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div>
                    <canvas id="myChart"></canvas>
                </div>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
            <script>
                const ctx = document.getElementById('myChart');

                new Chart(ctx, {
                    type: 'doughnut',
                    data: {
                        labels: [
                            'Blog',
                            'Layanan',
                            'Konten'
                        ],
                        datasets: [{
                            label: 'My First Dataset',
                            data: [<?= $blogAll ?>, <?= $layanan ?>, <?= $kontenAll ?>],
                            backgroundColor: [
                                'rgb(190, 16, 54)',
                                'rgb(11, 109, 173)',
                                'rgb(204, 148, 18)'
                            ],
                            hoverOffset: 4
                        }]
                    },

                });
            </script>
            
            @if ($adaTmpGa == true)
                <div class="col-lg-3 col-12">

                    <div class="card p-4">

                        <p>Sampah Livewire : {{ $sampahTmp }}</p>
                        <button wire:click="deleteSampah" class="btn btn-primary">Delete</button>
                    </div>
                </div>
            @endif
        </section>


    </div>
