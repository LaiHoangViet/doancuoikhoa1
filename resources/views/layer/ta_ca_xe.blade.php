@extends('layer.master')
@section('content')

@include('layer.header')

<div class="container">
    <div class="row tat-ca-xe">
        @foreach($array_xe as $xe)
        <div class="col-md-4 tat-ca-xe">
            <a href="{{ route('chi_tiet_xe', ['id' => $xe->Ma_xe]) }}" class="xe-chi-tiet">
                <div class="thumbnails">
                    <span>
                        <img width="100%" src="storage/{{$xe->Anh}}" class="anh-san-pham">
                    </span>
                </div>
                <b>
                    <span class="Ten_xe">
                        {{ $xe->Ten_xe }}
                    </span>
                    <div class="Hang_xe">
                        <span class="san-pham">Hãng Xe :</span>
                        <span class="san-pham1">{{ $xe->Hang_xe }}</span>
                    </div>
                    <div class="Gia">
                        <span class="san-pham">Giá:</span>
                        <span class="san-pham1">{{ $xe->Gia }}</span>
                    </div>
{{--                     <div class="Ten_loai_xe">
                        <span class="san-pham">Loại Xe:</span>
                        <span class="san-pham1">{{ $xe->Ten_loai_xe }}</span>
                    </div> --}}
                </b>
            </a>
        </div>
        @endforeach
    </div>
</div>

@endsection
