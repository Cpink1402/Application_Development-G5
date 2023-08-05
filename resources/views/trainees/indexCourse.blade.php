{{-- @include('layouts.header')

@include('layouts.sidebar')

@include('layouts.navbar')

<div class="content">
    <!-- Your trainee listing table here -->
    <table class="table">
        <thead>
            <tr>
                <th class="text-center">Name</th>
                <th class="text-center">Description</th>
                <th class="text-center">Category ID</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($courses as $course)
                <tr>
                    <td class="text-center">{{ $course->name }}</td>
                    <td class="text-center">{{ $course->description }}</td>
                    <td class="text-center">{{ $course->categoryId }}</td>
                    <td class="text-center">
                        <a href="{{ route('manageCourse.courses.edit', $course->courseId) }}"
                            class="btn btn-sm btn-primary">Edit</a>
                        <form action="{{ route('manageCourse.courses.delete', $course->courseId) }}" method="post"
                            style="display: inline-block">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('manageCourse.courses.create') }}" class="btn btn-primary">Add</a>
</div>

@include('layouts.footer')

@include('layouts.js')
 --}}


{{-- hi --}}

@include('layouts.header')

@include('Layouts.sidebar')

@include('layouts.navbar')
{{-- start --}}

<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                    <h4 class="card-title" style="margin-right: 10px;">Topic Management</h4>
                    <div class="search-bar"
                        style="display: flex; align-items: center; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
                        <i class="fas fa-search search-icon" style="margin-right: 5px;"></i>
                        <input type="text" class="search-input"
                            style="border: none; outline: none; background: transparent;" placeholder="Search...">
                    </div>
                </div>
                <hr>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="text-primary">
                                <th class="text-center">Name</th>
                                <th class="text-center">Description</th>
                                <th class="text-center">Category ID</th>
                                <th class="text-center">Action</th>
                            </thead>
                            <tbody>
                                @foreach ($courses as $course)
                                    <tr>
                                        <td class="text-center">{{ $course->name }}</td>
                                        <td class="text-center">{{ $course->description }}</td>
                                        <td class="text-center">{{ $course->categoryId }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('manageCourse.courses.edit', $course->courseId) }}"
                                                class="btn btn-sm btn-primary">Edit</a>
                                            <form action="{{ route('manageCourse.courses.delete', $course->courseId) }}"
                                                method="post" style="display: inline-block">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- Pagination -->
                        {{-- @if ($pagination->hasPages())
                            @include('Layouts.pagination', ['paginator' => $pagination])
                        @endif --}}
                        <div class="create-button">
                            <a href="{{ route('manageCourse.courses.create') }}" class="btn btn-primary">Add</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- end --}}

@include('layouts.footer')

@include('layouts.js')
