@extends('auth/template')

@section('content')
                <h2 class="text-center">Inciar Sesion</h2>
                <form role="form" method="POST" action="{{ url('auth/login') }}">
                    <input type="hidden" name="_token" value="{{ session()->getToken() }}">
                    <div class="row">

                        <div class="form-group col-lg-6" ng-class="{'has-error': errorEmail}">
                            <input ng-model="formData.email" class="form-control" placeholder="correo electrónico" name="email" type="email" id="email" required>
                        </div>

                        <div class="form-group col-lg-6" ng-class="{'has-error': errorPassword}">
                            <input ng-model="formData.password" class="form-control" placeholder="contraseña" name="password" type="password" value="" id="password" required>
                        </div>

                        <div class="checkbox col-lg-12">
                            <label>
                                <input ng-model="formData.memory" name="memory" type="checkbox" value="1">Recuerdame
                            </label>
                        </div>

                        <div class="form-group col-lg-12 text-center">
                            <input class="btn btn-default" type="submit" value="Send">
                        </div>

                        <div class="col-lg-12 text-center">
                            <a href="password/email">Recuperar contraseña</a>
                        </div>
                    </div>

                </form>
