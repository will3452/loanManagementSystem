@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="text-center">SETUP PROFILE</h1>
                @if($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="text-danger">{{ $error }}</div>
                    @endforeach
                @endif
                <form action="{{ route('profile.setup') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="" class="form-group d-block">
                        BIRTHDAY <span class="text-danger">*</span>
                        <input required type="date" class="form-control" name="birthday">
                    </label>
                    <label for="" class="form-group d-block mt-2">
                        EDUCATIONAL LEVEL <span class="text-danger">*</span>
                        <select requried class="form-select" name="educ_level">
                            <option value="k12">K to 12</option>
                            <option value="College">College</option>
                        </select>
                    </label>
                    <label for="" class="form-group d-block mt-2">
                        CURRENT ADDRESS <span class="text-danger">*</span>
                        <input requried type="text" name="current_address"  placeholder="Street - Barangay, Town, City" class="form-control">
                    </label>
                    <label for="" class="form-group d-block mt-2">
                        PERMANENT ADDRESS <span class="text-danger">*</span>
                        <input required type="text"  name="permanent_address" placeholder="Street - Barangay, Town, City" class="form-control">
                    </label>
                    <label for="" class="form-group d-block mt-2">
                        MOTHER'S MAINDEN NAME <span class="text-danger">*</span>
                        <input required type="text" name="mothers_name" placeholder="Sur Name, Given Name, Middle Name" class="form-control">
                    </label>
                    <label for="" class="form-group d-block mt-2">
                        FATHER'S NAME <span class="text-danger">*</span>
                        <input required type="text" name="fathers_name" placeholder="Sur Name, Given Name, Middle Name" class="form-control">
                    </label>
                    <label for="" class="form-group d-block mt-2">
                        MONTHLY SALARY <span class="text-danger">*</span>
                        <input required type="number" name="salary" placeholder="eg. 8,000" class="form-control">
                    </label>
                    <label for="" class="form-group d-block mt-2">
                        2 VALID IDs (image only) <span class="text-danger">*</span>
                        <input required type="file" name="id_1" required class="my-1 d-block" accept="image/*">
                        <input requried type="file" name="id_2" required class="my-1 d-block" accept="image/*">
                    </label>
                    <button style="width:100%" class="btn btn-primary">SAVE</button>
                </form>
            </div>
        </div>
    </div>
@endsection
