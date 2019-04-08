@extends('layouts.layouts-admin')
@section('content')
 <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
    <center>

      <?php 
      $d = \App\tbldistributor::all();
      $p = \App\tblpetugas::all();
      ?>
    	<!-- Button trigger modal -->
 <a href="#modal-default"class="btn btn-warning" data-toggle="modal" data-target="#modal-default">
                <i class="fa fa-plus"></i>
              </a>

<!-- Modal -->
 <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                
              </div>
              <div class="modal-body">
              	<form action="{{url('barang-masuk/save')}}" method="POST">
                @csrf 
                 <div class="form-group">
                  <label>Nomor Nota</label>
                  <input type="number" class="form-control" name="no_nota">
                </div>
         <div class="form-group">
                  <label>Tanggal Masuk</label>
                  <input type="date" class="form-control" placeholder="" name="tgl_masuk">
                </div>	                
                 <div class="form-group">
                  <label>ID Distributor</label>
                  <select class="form-control" name="id_distributor">
                    @foreach($d as $distributor)
                  	<option>{{$distributor->id_distributor}}</option>
                  	@endforeach
                  </select>
                </div>
                 <div class="form-group">
                  <label>ID Petugas</label>
                  <select class="form-control" name="id_petugas">
                    @foreach($p as $petugas)
                  	<option>{{$petugas->id_petugas}}</option>
                  @endforeach
                  </select>
                </div>
                 <div class="form-group">
                  <label>Total</label>
                  <input type="number" class="form-control" name="total">
                </div>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah</button>
                </form>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <div class="modal fade" id="modal-edit">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                
              </div>
              <div class="modal-body">
              	<form action="#">
                 <div class="form-group">
                  <label>Nomor Nota</label>
                  <input type="number" class="form-control" placeholder="Nomor Nota ....">
                </div>

 <div class="form-group">
                  <label>Tanggal Masuk</label>
                  <input type="date" class="form-control" placeholder="">
                </div>	                
                 <div class="form-group">
                  <label>ID Petugas</label>
                  <select class="form-control">
                  	<option>1</option>
                  	<option>2</option>
                  </select>
                </div>
                 <div class="form-group">
                  <label>ID Distributor</label>
                  <select class="form-control">
                  	<option>1</option>
                  	<option>1</option>
                  </select>
                </div>
                 <div class="form-group">
                  <label>Total</label>
                  <input type="number" class="form-control" placeholder="Total ....">
                </div>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Edit</button>
                </form>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
    </center>
    <br>
<table id="example" class="ui celled table" style="width:100%">
        <thead>
            <tr>
                <th>Nomor Nota</th>
                <th>Tanggal Masuk</th>
                <th>ID Distributor</th>
                <th>ID Petugas</th>
                <th>Total</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td><a href="" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fa fa-trash"></i></a>
                		<a href="#modal-edit" data-target="#modal-edit" data-toggle="modal" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                </td>
            </tr>
            <tr>
            	<td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                   <td><a href="" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fa fa-trash"></i></a>
                		<a href="#modal-edit" data-target="#modal-edit" data-toggle="modal" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                </td>
            </tr>
               <tr>
            	<td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                  <td><a href="" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fa fa-trash"></i></a>
                		<a href="#modal-edit" data-target="#modal-edit" data-toggle="modal" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                </td>
            </tr>
               <tr>
            	<td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                  <td><a href="" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fa fa-trash"></i></a>
                	<a href="#modal-edit" data-target="#modal-edit" data-toggle="modal" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                </td>
            </tr>
               <tr>
            	<td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                  <td><a href="" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fa fa-trash"></i></a>
                		<a href="#modal-edit" data-target="#modal-edit" data-toggle="modal" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                </td>
            </tr>
               <tr>
            	<td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                   <td><a href="" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fa fa-trash"></i></a>
                		<a href="#modal-edit" data-target="#modal-edit" data-toggle="modal" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                </td>
            </tr>
               <tr>
            	<td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                   <td><a href="" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fa fa-trash"></i></a>
                		<a href="#modal-edit" data-target="#modal-edit" data-toggle="modal" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                </td>
            </tr>
           
        </tbody>
    </table>
          @endsection