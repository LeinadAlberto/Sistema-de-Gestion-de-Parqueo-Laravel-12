@extends('adminlte::page')

@section('title', 'Ajustes')

@section('content_header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Ajustes del Sistema</h1>
            </div><!-- /.col-sm-6 -->

            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">
                        <a href="{{ url('/admin') }}">Inicio</a>
                    </li>
                    <li class="breadcrumb-item active">Ajustes</li>
                </ol>
            </div><!-- /.col-sm-6 -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->

    <hr>
@stop

@section('content')
    
    <div class="row">
        <div class="col-md-12">
            <div class="card card-info">

                <div class="card-header">
                    <h3 class="card-title">Llene los campos del formulario</h3>
                </div><!-- /.card-header -->

                <div class="card-body">
                    <form action="">
                        <div class="row">
                            <!-- Datos -->
                            <div class="col-md-8">
                                <!-- Nombre del Sistema, Descripción -->
                                <div class="row">
                                    <!-- Nombre del Sistema -->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="nombre">Nombre del Sistema</label> <b class="text-danger">*</b>
    
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fas fa-building text-info"></i>
                                                    </span>
                                                </div><!-- /.input-group-prepend -->
    
                                                <input type="text" class="form-control" name="nombre" id="nombre"
                                                    value="{{ old('nombre') }}" placeholder="Ej: Sistema de Parqueo LokyDevWeb" required>
                                            </div><!-- /.input-group -->
    
                                            @error('nombre')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div><!-- /.form-group -->
                                    </div><!-- /.col-md-4 -->
    
                                    <!-- Descripción -->
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="descripcion">Descripción</label> <b class="text-danger">*</b>
    
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fas fa-align-left text-info"></i>
                                                    </span>
                                                </div><!-- /.input-group-prepend -->
    
                                                <textarea class="form-control" name="descripcion" id="descripcion" rows="1" placeholder="Descripción del negocio..." required>{{ old('descripcion') }}</textarea>
                                            </div><!-- /.input-group -->
    
                                            @error('descripcion')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div><!-- /.form-group -->
                                    </div><!-- /.col-md-8 -->
                                </div><!-- /.row -->
    
                                <!-- Divisa, Correo, Página Web -->
                                <div class="row">
                                    <!-- Divisa -->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="divisa">Moneda</label> <b class="text-danger">*</b>
    
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fas fa-dollar-sign text-info"></i>
                                                    </span>
                                                </div><!-- /.input-group-prepend -->
    
                                                <select class="form-control" name="divisa" id="divisa" required>
                                                    <option value="">Seleccione moneda...</option>
                                                    @foreach ($divisas as $divisa)
                                                        <option value="{{ $divisa['symbol'] }}">{{ $divisa['name'] . ' - (' . $divisa['symbol'] . ')' }}</option>
                                                    @endforeach
                                                </select>
                                            </div><!-- /.input-group -->
    
                                            @error('divisa')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div><!-- /.form-group -->
                                    </div><!-- /.col-md-4 -->
    
                                    <!-- Correo -->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="correo">Correo Electrónico</label> <b class="text-danger">*</b>
    
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fas fa-envelope text-info"></i>
                                                    </span>
                                                </div><!-- /.input-group-prepend -->
    
                                                <input type="email" class="form-control" name="correo" id="correo"
                                                    value="{{ old('correo') }}" placeholder="info@tuempresa.com" required>
                                            </div><!-- /.input-group -->
    
                                            @error('correo')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div><!-- /.form-group -->
                                    </div><!-- /.col-md-4 -->
    
                                    <!-- Página Web -->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="pagina_web">Página Web</label>
    
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fas fa-globe text-info"></i>
                                                    </span>
                                                </div><!-- /.input-group-prepend -->
    
                                                <input type="url" class="form-control" name="pagina_web" id="pagina_web"
                                                    value="{{ old('pagina_web') }}" placeholder="https://www.tuempresa.com" required>
                                            </div><!-- /.input-group -->
    
                                            @error('pagina_web')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div><!-- /.form-group -->
                                    </div><!-- /.col-md-4 -->
                                </div><!-- /.row -->
    
                                <!-- Sucursal, Teléfonos, Dirección -->
                                <div class="row">
                                    <!-- Sucursal -->
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="sucursal">Sucursal</label> <b class="text-danger">*</b>
    
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fas fa-map-marker text-info"></i>
                                                    </span>
                                                </div><!-- /.input-group-prepend -->
    
                                                <input type="text" class="form-control" name="sucursal" id="sucursal"
                                                    value="{{ old('sucursal') }}" placeholder="Ej: Sucursal Centro" required>
                                            </div><!-- /.input-group -->
    
                                            @error('sucursal')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div><!-- /.form-group -->
                                    </div><!-- /.col-md-3 -->
    
                                    <!-- Teléfonos -->
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="telefonos">Teléfonos</label> <b class="text-danger">*</b>
    
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fas fa-phone text-info"></i>
                                                    </span>
                                                </div><!-- /.input-group-prepend -->
    
                                                <input type="text" class="form-control" name="telefonos" id="telefonos"
                                                    value="{{ old('telefonos') }}" placeholder="Ej: +591 2 345434" required>
                                            </div><!-- /.input-group -->
    
                                            @error('telefonos')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div><!-- /.form-group -->
                                    </div><!-- /.col-md-3 -->
    
                                    <!-- Dirección -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="direccion">Dirección</label> <b class="text-danger">*</b>
    
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fas fa-home text-info"></i>
                                                    </span>
                                                </div><!-- /.input-group-prepend -->
    
                                                <textarea class="form-control" name="direccion" id="direccion" rows="1" placeholder="Direccion completa..." required>{{ old('direccion') }}</textarea>
                                            </div><!-- /.input-group -->
    
                                            @error('direccion')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div><!-- /.form-group -->
                                    </div><!-- /.col-md-6 -->
                                </div><!-- /.row -->
                            </div><!-- /.col-md-8 -->
                            
                            <!-- Logos -->
                            <div class="col-md-4">
                                <!-- Logo Empresa, Logo Auto -->
                                <div class="row">
                                    <!-- Logo Empresa -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="logo">Logo Principal</label> <b class="text-danger">*</b>
    
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fas fa-image"></i>
                                                    </span>
                                                </div><!-- /.input-group-prepend -->
    
                                                <input type="file" class="form-control" name="logo" id="logo"
                                                    accept="image/*" onchange="mostrarImagen(event)" required>
                                            </div><!-- /.input-group -->
    
                                            <center>
                                                <img id="preview1" src="" 
                                                style="max-width: 150px; height: 150px; margin-top: 10px;">
                                            </center>
    
                                            @error('logo')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div><!-- /.form-group -->
                                    </div><!-- /.col-md-6 -->
    
                                    <script>
                                        const mostrarImagen = e => 
                                            document.getElementById('preview1').src = URL.createObjectURL(e.target.files[0]);
                                    </script>
    
                                    <!-- Logo Auto -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="logo_auto">Logo para Auto</label> <b class="text-danger">*</b>
    
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fas fa-car"></i>
                                                    </span>
                                                </div><!-- /.input-group-prepend -->
    
                                                <input type="file" class="form-control" name="logo_auto" id="logo_auto"
                                                    accept="image/*" onchange="mostrarImagen2(event)" required>
                                            </div><!-- /.input-group -->
    
                                            <center>
                                                <img id="preview2" src="" 
                                                style="max-width: 150px; height: 150px; margin-top: 10px;">
                                            </center>
    
                                            @error('logo_auto')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div><!-- /.form-group -->
                                    </div><!-- /.col-md-6 -->
    
                                    <script>
                                        const mostrarImagen2 = e => 
                                            document.getElementById('preview2').src = URL.createObjectURL(e.target.files[0]);
                                    </script>
                                </div><!-- /.row -->
                            </div><!-- /.col-md-4 -->
                        </div><!-- /.row -->
    
                        <hr>
    
                        <div class="row">
                            <div class="col-md-12">
                                <p class="text-danger">(*) Campos obligatorios</p>
                                <button type="submit" class="btn btn-info float-right">
                                    <i class="fas fa-save"> Guardar</i>
                                </button>
                            </div><!-- /.col-md-12 -->
                        </div><!-- /.row -->
                    </form>
                </div><!-- /.card-body -->

            </div><!-- /.card -->
        </div><!-- /.col-md-12 -->
    </div><!-- /.row -->

@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop