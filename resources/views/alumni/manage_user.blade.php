{{-- https://quickadminpanel.com/blog/stripe-payments-in-laravel-the-ultimate-guide/ --}}
@extends('layout.alumni_layout')
@section('content')
<div class="container-fluid">
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">{{$page}}</h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="#">{{ Request::segment(1) }} {{ Request::segment(2) }} {{ Request::segment(3) }}</a></li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="table-responsive">
                    <table class="table table-hover manage-u-table">
                        <thead>
                            <tr>
                                <th class="text-center" style="width: 70px">#</th>
                                <th>NAME</th>
                                <th>OCCUPATION</th>
                                <th>EMAIL</th>
                                <th>ADDED</th>
                                <th style="width: 250px">CATEGORY</th>
                                <th style="width: 300px">MANAGE</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">1</td>
                                <td><span class="font-medium">Daniel Kristeen</span>
                                    <br/><span class="text-muted">Texas, Unitedd states</span></td>
                                <td>Visual Designer
                                    <br/><span class="text-muted">Past : teacher</span></td>
                                <td>daniel@website.com
                                    <br/><span class="text-muted">999 - 444 - 555</span></td>
                                <td>15 Mar 1988
                                    <br/><span class="text-muted">10: 55 AM</span></td>
                                <td>
                                    <select class="form-control">
                                        <option>Modulator</option>
                                        <option>Admin</option>
                                        <option>User</option>
                                        <option>Subscriber</option>
                                    </select>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="ti-key"></i></button>
                                    <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="icon-trash"></i></button>
                                    <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="ti-pencil-alt"></i></button>
                                    <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-20"><i class="ti-upload"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">2</td>
                                <td><span class="font-medium">Daniel Kristeen</span>
                                    <br/><span class="text-muted">Texas, Unitedd states</span></td>
                                <td>Visual Designer
                                    <br/><span class="text-muted">Past : teacher</span></td>
                                <td>daniel@website.com
                                    <br/><span class="text-muted">999 - 444 - 555</span></td>
                                <td>15 Mar 1988
                                    <br/><span class="text-muted">10: 55 AM</span></td>
                                <td>
                                    <select class="form-control">
                                        <option>Modulator</option>
                                        <option>Admin</option>
                                        <option>User</option>
                                        <option>Subscriber</option>
                                    </select>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="ti-key"></i></button>
                                    <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="icon-trash"></i></button>
                                    <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="ti-pencil-alt"></i></button>
                                    <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-20"><i class="ti-upload"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">3</td>
                                <td><span class="font-medium">Daniel Kristeen</span>
                                    <br/><span class="text-muted">Texas, Unitedd states</span></td>
                                <td>Visual Designer
                                    <br/><span class="text-muted">Past : teacher</span></td>
                                <td>daniel@website.com
                                    <br/><span class="text-muted">999 - 444 - 555</span></td>
                                <td>15 Mar 1988
                                    <br/><span class="text-muted">10: 55 AM</span></td>
                                <td>
                                    <select class="form-control">
                                        <option>Modulator</option>
                                        <option>Admin</option>
                                        <option>User</option>
                                        <option>Subscriber</option>
                                    </select>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="ti-key"></i></button>
                                    <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="icon-trash"></i></button>
                                    <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="ti-pencil-alt"></i></button>
                                    <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-20"><i class="ti-upload"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">4</td>
                                <td><span class="font-medium">Daniel Kristeen</span>
                                    <br/><span class="text-muted">Texas, Unitedd states</span></td>
                                <td>Visual Designer
                                    <br/><span class="text-muted">Past : teacher</span></td>
                                <td>daniel@website.com
                                    <br/><span class="text-muted">999 - 444 - 555</span></td>
                                <td>15 Mar 1988
                                    <br/><span class="text-muted">10: 55 AM</span></td>
                                <td>
                                    <select class="form-control">
                                        <option>Modulator</option>
                                        <option>Admin</option>
                                        <option>User</option>
                                        <option>Subscriber</option>
                                    </select>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="ti-key"></i></button>
                                    <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="icon-trash"></i></button>
                                    <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="ti-pencil-alt"></i></button>
                                    <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-20"><i class="ti-upload"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">5</td>
                                <td><span class="font-medium">Daniel Kristeen</span>
                                    <br/><span class="text-muted">Texas, Unitedd states</span></td>
                                <td>Visual Designer
                                    <br/><span class="text-muted">Past : teacher</span></td>
                                <td>daniel@website.com
                                    <br/><span class="text-muted">999 - 444 - 555</span></td>
                                <td>15 Mar 1988
                                    <br/><span class="text-muted">10: 55 AM</span></td>
                                <td>
                                    <select class="form-control">
                                        <option>Modulator</option>
                                        <option>Admin</option>
                                        <option>User</option>
                                        <option>Subscriber</option>
                                    </select>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="ti-key"></i></button>
                                    <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="icon-trash"></i></button>
                                    <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="ti-pencil-alt"></i></button>
                                    <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-20"><i class="ti-upload"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">6</td>
                                <td><span class="font-medium">Daniel Kristeen</span>
                                    <br/><span class="text-muted">Texas, Unitedd states</span></td>
                                <td>Visual Designer
                                    <br/><span class="text-muted">Past : teacher</span></td>
                                <td>daniel@website.com
                                    <br/><span class="text-muted">999 - 444 - 555</span></td>
                                <td>15 Mar 1988
                                    <br/><span class="text-muted">10: 55 AM</span></td>
                                <td>
                                    <select class="form-control">
                                        <option>Modulator</option>
                                        <option>Admin</option>
                                        <option>User</option>
                                        <option>Subscriber</option>
                                    </select>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="ti-key"></i></button>
                                    <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="icon-trash"></i></button>
                                    <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="ti-pencil-alt"></i></button>
                                    <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-20"><i class="ti-upload"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">7</td>
                                <td><span class="font-medium">Daniel Kristeen</span>
                                    <br/><span class="text-muted">Texas, Unitedd states</span></td>
                                <td>Visual Designer
                                    <br/><span class="text-muted">Past : teacher</span></td>
                                <td>daniel@website.com
                                    <br/><span class="text-muted">999 - 444 - 555</span></td>
                                <td>15 Mar 1988
                                    <br/><span class="text-muted">10: 55 AM</span></td>
                                <td>
                                    <select class="form-control">
                                        <option>Modulator</option>
                                        <option>Admin</option>
                                        <option>User</option>
                                        <option>Subscriber</option>
                                    </select>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="ti-key"></i></button>
                                    <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="icon-trash"></i></button>
                                    <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="ti-pencil-alt"></i></button>
                                    <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-20"><i class="ti-upload"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection