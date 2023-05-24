@extends('layouts.admin')

@section('page-title', 'Edit Project')

@section('admin-content')

    <div class="container">

        @include('partials.forms.validation.errors_alert')

        <form method="POST" action=" {{ route('admin.projects.update', ['project' => $project->slug]) }}">

            @csrf

            @method('PUT')

            @include(
                'partials.forms.edit_form_element',
                $data = ['default' => $project->title, 'type' => 'text', 'field' => 'title', 'label' => 'Title']
            )

            @include(
                'partials.forms.edit_form_element',
                $data = [
                    'default' => $project->cover_image,
                    'type' => 'text',
                    'field' => 'cover_image',
                    'label' => 'project cover link',
                ]
            )

            @include(
                'partials.forms.edit_form_element',
                $data = [
                    'default' => $project->description,
                    'type' => 'textarea',
                    'field' => 'description',
                    'label' => 'Description',
                ]
            )

            @include(
                'partials.forms.edit_form_element',
                $data = ['type' => 'select', 'field' => 'type_id', 'label' => 'Type', 'options' => $types, 'default' => $project->type_id]
            )

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
