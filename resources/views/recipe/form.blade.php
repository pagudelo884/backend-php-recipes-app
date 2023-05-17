<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('title') }}
            {{ Form::text('title', $recipe->title, ['class' => 'form-control' . ($errors->has('title') ? ' is-invalid' : ''), 'placeholder' => 'Title']) }}
            {!! $errors->first('title', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('imgRecipe') }}
            {{ Form::text('imgRecipe', $recipe->imgRecipe, ['class' => 'form-control' . ($errors->has('imgRecipe') ? ' is-invalid' : ''), 'placeholder' => 'Imgrecipe']) }}
            {!! $errors->first('imgRecipe', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('description') }}
            {{ Form::text('description', $recipe->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Description']) }}
            {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('timeCook') }}
            {{ Form::text('timeCook', $recipe->timeCook, ['class' => 'form-control' . ($errors->has('timeCook') ? ' is-invalid' : ''), 'placeholder' => 'Timecook']) }}
            {!! $errors->first('timeCook', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('portions') }}
            {{ Form::text('portions', $recipe->portions, ['class' => 'form-control' . ($errors->has('portions') ? ' is-invalid' : ''), 'placeholder' => 'Portions']) }}
            {!! $errors->first('portions', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ingredients') }}
            {{ Form::text('ingredients', $recipe->ingredients, ['class' => 'form-control' . ($errors->has('ingredients') ? ' is-invalid' : ''), 'placeholder' => 'Ingredients']) }}
            {!! $errors->first('ingredients', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('instructions') }}
            {{ Form::text('instructions', $recipe->instructions, ['class' => 'form-control' . ($errors->has('instructions') ? ' is-invalid' : ''), 'placeholder' => 'Instructions']) }}
            {!! $errors->first('instructions', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('user_id') }}
            {{ Form::text('user_id', $recipe->user_id, ['class' => 'form-control' . ($errors->has('user_id') ? ' is-invalid' : ''), 'placeholder' => 'User Id']) }}
            {!! $errors->first('user_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>