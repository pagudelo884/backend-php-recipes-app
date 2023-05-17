@extends('layouts.app')

@section('template_title')
    {{ $recipe->name ?? "{{ __('Show') Recipe" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Recipe</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('recipes.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Title:</strong>
                            {{ $recipe->title }}
                        </div>
                        <div class="form-group">
                            <strong>Imgrecipe:</strong>
                            {{ $recipe->imgRecipe }}
                        </div>
                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $recipe->description }}
                        </div>
                        <div class="form-group">
                            <strong>Timecook:</strong>
                            {{ $recipe->timeCook }}
                        </div>
                        <div class="form-group">
                            <strong>Portions:</strong>
                            {{ $recipe->portions }}
                        </div>
                        <div class="form-group">
                            <strong>Ingredients:</strong>
                            {{ $recipe->ingredients }}
                        </div>
                        <div class="form-group">
                            <strong>Instructions:</strong>
                            {{ $recipe->instructions }}
                        </div>
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $recipe->user_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
