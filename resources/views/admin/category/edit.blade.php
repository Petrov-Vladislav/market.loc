@extends('layouts_app.admin_layout')

@section('title', 'Редактирование категории')

@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Редактирование категории: {{ $category['name'] }}</h1>
        </div>
        
      </div><!-- /.row -->
      @if(session('success'))
        <div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            <h4><i class="icon fa fa-check"></i>{{session('success')}}</h4>
        </div>
      @endif
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-primary">
                    
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{route('category.update', $category['id'])}}" method="POST">
                      @csrf
                      @method('PUT')
                      <div class="card-body">
                        <div class="form-group">
                          <label for="exampleInputName">Название</label>
                          <input type="text" value="{{ $category['name'] }}" name="name" class="form-control" id="exampleInputName" placeholder="Введите название категории" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Изображение</label>
                            <input type="file" name="img" class="form-control" id="exampleInputFile" required>{{ $category['img'] }}
                        </div>
                        <div class="form-group">
                            <label for="exampleInputLink">Ссылка</label>
                            <input type="text" value="{{ $category['link'] }}" name="link" class="form-control" id="exampleInputLink" placeholder="Введите ссылку" required>
                          </div>
                      </div>
                      <!-- /.card-body -->
      
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Обновить</button>
                      </div>
                    </form>
                  </div>
            </div>
        </div>
      
    </div><!-- /.container-fluid -->
  </section>
    
@endsection