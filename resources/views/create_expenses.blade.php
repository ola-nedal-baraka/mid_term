@extends('dashboard')
@section('content')
<div class="card uper">
            <div class="card-header">
                <?php 
                if($action==1){
                    $type="Edit";
                    foreach($expenses as $key => $expense){
                        $Item= $expense->Name;
                        $Item_category=$expense->Item_category;
                        $purchase_date =$expense->purchase_date;
                        $Amount=$expense->Amount;
                        $id=$expense->id;
                    }
                }else{
                    $Item="Creat";
                    $Item_category= "";
                    $purchase_date="";
                    $Amount="";  
                }
                
                ?>
                {{$type}} expense
            </div>
            <div class="card-body">
                @if($action==0)
                <form method="post" action="{{url('STORE')}}">
                @else
                <form method="post" action="{{url('up/'.$id)}}">
                @endif
                    @csrf
                    <div class="form-group">
                        <label for="name">Item:</label>
                        <input type="text" value='<?php echo"$Name";?>' class="form-control" name="product_name" />
                    </div>
                    <div class="form-group">
                        <label for="price">Item_category :</label>
                        <input type="text" value='<?php echo"$Price";?>'class="form-control" name="product_price" />
                    </div>
                    <div class="form-group">
                        <label for="quantity">purchase_date:</label>
                        <input type="text" value='<?php echo"$Quantity";?>'class="form-control" name="product_qty" />
                    </div>
                    <button type="submit" class="btn btn-primary">{{$type}}</button>
                    <div class="form-group">
                        <label for="quantity">Amount:</label>
                        <input type="text" value='<?php echo"$Quantity";?>'class="form-control" name="product_qty" />
                    </div>
                    <button type="submit" class="btn btn-primary">{{$type}}</button>

                </form>
            </div>
        </div>
    @endsection
@endsection
