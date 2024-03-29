@extends('admin.layouts.main')


@section('content')

   @if ($errors->any())
           <div class="alert alert-danger">
            <strong>Whoops!</strong>There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error}}</li>
                  @endforeach
            </ul>
           </div>
        @endif


    <!-- MAIN -->
        <main>

            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Add Number</h3>
                        <a class="create__btn" href=""> <i class='bx bx-arrow-back'></i>Qaytish</a>

                    </div>

                    <form class="create__inputs" action="{{ route('admin.numbers.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <strong> Number :</strong>
                        <input type="number" name="number" value="{{ old ('number') }}" class="form-control"> <br>
                        @error('number') {{ $message }} <br><br> @enderror

                        

                        <input type="submit" value="Qôshish">



                    </form>
                </div>

            </div>
        </main>
        <!-- MAIN -->


@endsection
