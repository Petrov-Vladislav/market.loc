@extends('layouts_app.admin_layout')

@section('title', 'Редактировать товар (Смартфон)')

@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Редактировать товар: {{ $smartphone['name'] }}</h1>
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
                    <form action="{{route('smartphone.update', $smartphone['id'])}}" method="POST">
                      @csrf
                      @method('PUT')
                      <div class="card-body">
                        <div class="form-group">
                          <label for="exampleInputName">Название товара</label>
                          <input type="text" value="{{$smartphone['name']}}" name="name" class="form-control" id="exampleInputName" placeholder="Введите название товара" required>
                        </div>
                        <div class="form-group">
                            <!-- select -->
                            <div class="form-group">
                              <label for="description">Описание</label>
                              <textarea name="text" class="editor" id="description">{{$smartphone['text']}}</textarea>
                            </div>
                            <div class="form-group">
                              <label for="feature_image">Изображение</label>
                              <img src="/img/smartphones/{{$smartphone['img']}}" alt="" class="img-uploaded" style="display: block; width: 100px">
                              <input type="text" class="form-control" id="feature_image" name="img" value="{{$smartphone['img']}}" readonly>
                              <a href="" class="popup_selector" data-inputid="feature_image">Выбрать изображение</a>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="price">Цена</label>
                            <input type="text" value="{{$smartphone['price']}}" name="price" class="form-control" id="price" placeholder="Введите цену" required>
                          </div>
                      </div>
                      <!-- /.card-body -->
      
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Сохранить</button>
                      </div>
                    </form>
                  </div>
            </div>
        </div>
      
    </div><!-- /.container-fluid -->
  </section>
    
@endsection