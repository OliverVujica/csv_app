@extends('layouts.main')
@section('content')
<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6"><h2>Proizvodi <b></b></h2></div>
                    <div class="col-sm-6">
                        <div class="btn-group" data-toggle="buttons">
                     <?php if($products->count()>0){?>
               <a class="btn btn-warning" download="sample_architect.csv" href="{{URL::to('/')}}/product/export_product" >
                 <b>
                    <i class="fa fa-download" aria-hidden="true"></i>
                    Preuzmi CSV</b>
               </a>
           <?php } ?>
               &nbsp;&nbsp;
               <form action=""></form>
               <a class="btn btn-light" class="" href="{{URL::to('/')}}/product/import_product">
                  <b><i class="fa fa-upload"></i>
                   Unesi CSV</b>
               </a>
                        </div>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        
                        <th>ID</th>
                        <th>Naziv</th>
                        <th>Cijena</th>
                        <th>Opis</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($products as $s_no => $row )
                    <tr>
                        
                        <td>{{ $row->id ?? '' }}</td>
                        <td>{{ $row->title ?? '' }}</td>
                        <td>{{ $row->price ?? '' }}</td>
                        <td>{{ $row->description ?? '' }}</td>
                        <td> <div><a href="{{route('product.edit',$row->id)}}" class="btn">Uredi</a></div></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="paginator">
                            {!! $products->links() !!}
                        </div>
        </div> 
       
    </div>   
</div> 
@endsection
  