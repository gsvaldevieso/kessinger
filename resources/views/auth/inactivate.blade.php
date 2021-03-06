@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Inativar Conta</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="/inativar/">
                        {{ csrf_field() }}

                        @if (isset($password))
                        <span class="help-block red-text text-center">
                             <strong>Senha incorreta! </strong>Por favor digite novamente!
                        </span>
                        @endif

                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Digite sua senha:</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>
                            </div>

                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Inativar
                                </button>

                                <!--<a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>-->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
