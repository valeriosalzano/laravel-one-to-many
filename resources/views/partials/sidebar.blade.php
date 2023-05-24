<div class="flex-shrink-0 p-3">
    <ul class="list-unstyled ps-0">
        <li class="mb-1">
            <a href="{{ route('admin.dashboard') }}" class="nav-link active" aria-current="page">
                Dashboard
            </a>
        </li>
        @if (Route::currentRouteName() == 'admin.projects.index')
            <li class="mb-1">
                <button class=" ps-0 btn btn-toggle rounded border-0 collapsed"
                    data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                    Projects List
                </button>
                <div class="collapse ps-3" id="dashboard-collapse">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        @foreach ($projects as $project)
                            <li class="border-bottom">
                                <a href="{{ route('admin.projects.show', $project->slug) }}"
                                    class="link-body-emphasis d-inline-flex text-decoration-none rounded">
                                    {{ $project->title }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </li>
        @else
            <li class="mb-1">
                <a href="{{ route('admin.projects.index') }}" class="nav-link active" aria-current="page">
                    Projects
                </a>
            </li>
        @endif

    </ul>
</div>
