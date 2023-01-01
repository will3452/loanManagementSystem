@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="text-center">YOUR PROFILE</h1>
                <div class="text-center">
                    <a href="{{route('profile.setup')}}" class="btn-link btn">EDIT PROFILE</a>
                </div>
                <table class="table">
                    <tr>
                        <th>
                            Permanent Address
                        </th>
                        <td>
                            {{$profile->permanent_address}}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Current Address
                        </th>
                        <td>
                            {{$profile->current_address}}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Birthday
                        </th>
                        <td>
                            {{\Carbon\Carbon::parse($profile->birthday)->format('M d, Y')}}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Mother's Name
                        </th>
                        <td>
                            {{$profile->mothers_name}}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Father's Name
                        </th>
                        <td>
                            {{$profile->fathers_name}}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Monthly Salary
                        </th>
                        <td>
                            PHP {{ number_format($profile->salary, 2) }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Educational Level
                        </th>
                        <td>
                            {{$profile->educ_level}}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            2 Valid IDs
                        </th>
                        <td>
                            <ul>
                                <li>
                                    <a href="/storage/{{$profile->id_1}}"> ID 1</a>
                                </li>
                                <li>
                                    <a href="/storage/{{$profile->id_2}}"> ID 2</a>
                                </li>
                            </ul>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection
