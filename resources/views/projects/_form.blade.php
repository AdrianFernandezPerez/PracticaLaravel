@csrf

<div class="form-group">
<label for="title">
    Título del proyecto <br>
    <input class="form-control bg-light shadow-sm border-0"
           type="text"
           name="title"
           value="{{old('title', $project->title)}}">
</label>
</div>
<div class="form-group">
<label for="url">
    URL del proyecto <br>
    <input class="form-control bg-light shadow-sm border-0"
           id="url"
           type="text"
           name="url"
           value="{{old('url', $project->url)}}">
</label>
</div>
<div class="form-group">
<label>
    Descripción del proyecto <br>
    <textarea class="form-control bg-light shadow-sm border-0"
              name="description"
    >{{old('description', $project->description)}}</textarea>
</label>
</div>
<button class="btn btn-primary btn-lg btn-block">{{$btnText}}</button>
<a class="btn btn-link btn-block" href="{{ route('projects.index') }}">Cancelar</a>
