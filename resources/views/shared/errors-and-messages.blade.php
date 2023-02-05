@if($errors->all())
<!-- <div class="col-12 col-lg-12 col-xxl-12 d-flex">
    <div class="card">
        <div class="col-6 col-lg-6">
            <div class="card-header"> -->


                @if(session('error'))
                <p class="text-danger">
                    {{ session('error') }}
                </p>
                @endif
                @foreach($errors->all() as $message)

                <p class="text-danger">
                    {{ $message }}
                </p>
                <br>

                @endforeach
            <!-- </div>
        </div>
    </div> -->
    @endif
    @if(session('success'))
    <div class="col-12 col-lg-12 col-xxl-12 d-flex">
        <!-- <div class="card"> -->
            <!-- <div class="col-6 col-lg-6"> -->
                <!-- <div class="card-header"> -->
                    <p class="text-success">
                        {{ session('success') }}
                    </p>
                <!-- </div> -->
            <!-- </div> -->
        <!-- </div> -->
    </div>
        @endif